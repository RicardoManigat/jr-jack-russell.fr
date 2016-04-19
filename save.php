<?php
require('core/conf.php');
require('core/sqlsrv.php');
$sqlsrv=connectSqlSrv($dbSqlSrv['host'],$dbSqlSrv['login'],$dbSqlSrv['password'],$dbSqlSrv['dbname']);
$table="sitecontact";

if((ISSET($_POST['email']))&&filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
	$email=$_POST['email'];
	$req_email="INSERT INTO ".$table."(email) VALUES ('".$email."')";
	$res=querySqlSrv($sqlsrv,$req_email);
}
