<?php

// This is the database connection configuration.
return array(
	'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database
	//define the propieties for connect to the DB
	'connectionString' => 'mysql:host=localhost;dbname=mydb',
	'emulatePrepare' => true,
	'username' => 'useryii',
	'password' => '#useryii2019',
	'charset' => 'utf8',
	
);