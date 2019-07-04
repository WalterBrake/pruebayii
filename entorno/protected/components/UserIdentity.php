<?php
/**
* UserIdentity represents the data needed to identity a user.
* It contains the authentication method that checks if the provided
* data can identity the user.
*/
class UserIdentity extends CUserIdentity
{
	private $_id;
	/**
	* Authenticates a user.
	* The example implementation makes sure if the username and password
	* are both 'demo'.
	* In practical applications, this should be changed to authenticate
	* against some persistent user identity storage (e.g. database).
	* @return boolean whether authentication succeeds.
	*/
	public function authenticate()
	{
		//Trying to find the user id logged and get the data 

		//the user is admin@admin.com
		//the password is admin
		$users=Users::model()->find("LOWER(email)=?",array(strtolower($this->username)));
		//evaluate if the user exist
		if(!isset($users)&&$users===NULL)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		//evaluate if the password is correct
		elseif($users->password!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		//succes case save the data
		else
			{
				$this->_id=$users->idusers;
				$this->setState("email", $users->email);
				$this->errorCode=self::ERROR_NONE;

			}
			//return the state 	
		return !$this->errorCode;
	}
}