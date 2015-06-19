<?
include("../core/config/config.inc.php");
include("mysqldump.php");

$ready = false;
if(count($_POST) && !empty($_POST["filename"])) {
	mysql_connect($database_server, $database_user, $database_password) or die("Can't connect to database!");
  $dumpFileName = "dumps/".$_POST["filename"].".sql";
	$dumper = new MySQLDump($dbase,$dumpFileName,false,false);
	mysql_query("set names utf8");
	@$dumper->doDump();
  // фикс заменяющий неработающую CURRENT_TIMESTAMP на наших серверах
  $fileContents = file_get_contents($dumpFileName);
  $fileContents = str_ireplace('CURRENT_TIMESTAMP','0000-00-00 00:00:00',$fileContents);
  file_put_contents($dumpFileName , $fileContents);
	$ready = true;
}

$filename = "dump_".date("d-m-Y");
include("dumperview.php");
