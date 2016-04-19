<?php

function connectMySQL($host,$login,$password,$dbname){
	$sql=new mysqli();
	$sql->init();
	$sql->real_connect($host,$login,$password,$dbname);
	return $sql;
}

function queryMySQL($sql,$query){
	$result = $sql->query($query);
	return $result;
}
