<?php
class Core {
	static $DB_Created = 2015;
	static $DB_Skin = 'default';
	static $DB_Name = 'houses';
	static $DB_Name2 = 'people';
	static $DB_Login = 'Alex2';
	static $DB_Pass = '153079';
	static $DB_Local = 'localhost';
	static $Domain = 'http://localhost/ll/sajt1/sajt22/';
	//static $CSS=array(

	//	);
	static $JS=array();
	static $META=array(
		'title'=>'standard title',
		'description'=>'d',
		'keywords'=>'k'
	);
}

$link2 = mysqli_connect(Core::$DB_Local, Core::$DB_Login, Core::$DB_Pass, Core::$DB_Name2);
mysqli_set_charset($link2, 'utf8');

$link = mysqli_connect(Core::$DB_Local, Core::$DB_Login, Core::$DB_Pass, Core::$DB_Name);
mysqli_set_charset($link, 'utf8');
/* define ('CREATED',2015); 
define('NEWSONPAGE',12);
define('SKIN','default'); // podstavljaem v glavnie fajl= index.php ( u neas eto urok17.php)

// zdesj takzhe soedinenija s bazoj daonnih i drugie nastrojki
/*define('DB','name');
define('DBlogin','alex');
define('DBpass','153079');
define('ADMINLOGIN','alex');
define('ADMINPASS','153079');
*/

function __autoload($class) {
	include './class_'.$class.'.php';
}


?>