<?php

//[Configuration des variables PHP pour connection au serveur MySQL]
$dbMySQL=array();
$dbMySQL['host']="localhost";
$dbMySQL['login']="ebarbe";
$dbMySQL['password']="quoizza10";
$dbMySQL['dbname']="caribou";


//[Configuration des variables PHP pour connection au serveur Microsoft SQL Server]
$dbSqlSrv=array();
$dbSqlSrv['host']="158.69.119.86";
$dbSqlSrv['login']="jrdata";
$dbSqlSrv['password']="perceptive7&truth";
$dbSqlSrv['dbname']="varibase";

//[Configuration des éléments pour l'import des fichiers]
$imports=array();
$imports['folder']="";
$imports['status']=1; //Pour création de switch auto/nonauto import

