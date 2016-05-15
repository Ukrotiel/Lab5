<?php

$DB_host = "br-cdbr-azure-south-b.cloudapp.net";
$DB_user = "bff5e106ae53a6";
$DB_pass = "3c9126da";
$DB_name = "vadikdb";


try
{
	$DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
	$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
	echo $e->getMessage();
}

include_once 'class.crud.php';

$crud = new crud($DB_con);

?>