<?php
class Database 
{
	
	private static $dbName = 'id9131734_gmmistur_database'; 
	private static $dbHost = 'localhost' ;
	private static $dbUsername = 'id9131734_gmmistur355';
	private static $dbUserPassword = '3552019';
	private static $dbConnection  = null;
	
	public function __construct() {
		exit('Init function is not allowed');
	}
	
	// Returns instance of PDO class
	public static function connect()
	{
	   // One connection through whole application
       if ( null == self::$dbConnection )
       {      
        try 
        {
          self::$dbConnection =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword);  
        }
        catch(PDOException $e) 
        {
          die($e->getMessage());  
        }
       } 
       return self::$dbConnection;
	}
	
	public static function disconnect()
	{
		self::$dbConnection = null;
	}
}
?>
