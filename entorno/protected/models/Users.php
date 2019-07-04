<?php
class Users extends CActiveRecord{

	public static function model($model=__CLASS__){
		return parent::model($model);
	} 
	public function tableName(){
		//name of the user table in db
		return "users";
	}
}
?>