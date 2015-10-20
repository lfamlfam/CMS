<?php
class DB extends PDO {
	
	private static $db_user = 'root';
	private static $db_name = 'cms';
	private static $db_pass = '';
	private static $db_host = '127.0.0.1'; 
	private static $db_driver = 'mysql';
	private static $db_charset = 'utf8';
	private static $pdo_options = [PDO::ATTR_EMULATE_PREPARES => false,
					PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
	public function __construct(){
		try{
			parent::__construct(	self::$db_driver.':host='.self::$db_host.';dbname='.self::$db_name.';charset='.self::$db_charset, 
						self::$db_user,
						self::$db_pass,
						self::$pdo_options);
		}catch(PDOException $objPDOException){
			echo "<pre>\n\n::ERRO no DB::\n".$objPDOException->getMessage()."\n\n</pre>";
		}
	}
}
?>
