<?php 

function connectSqlSrv($host,$login,$password,$dbname){
	$connectionInfo = array( "Database"=>$dbname, "UID"=>$login, "PWD"=>$password);
	$conn = sqlsrv_connect( $host, $connectionInfo);
	
	if( $conn ) {
	    // echo "Connexion établie à SQL Server.<br />";
		return $conn;
	}else{
	     //echo "La connexion n'a pu être établie à SQL Server.<br />";
	     die( print_r( sqlsrv_errors(), true));
	}
}

function querySqlSrv($connector,$query){
	$stmt=sqlsrv_query($connector,$query);
	if( $stmt === false ) {
	    if( ($errors = sqlsrv_errors() ) != null) {
	        foreach( $errors as $error ) {
	            echo "SQLSTATE: ".$error[ 'SQLSTATE']."\n";
	            echo "code: ".$error[ 'code']."\n";
	            echo "message: ".$error[ 'message']."\n";
				echo "Requète: ".$query."\n";
				die();
	        }
	    }
	}
	return $stmt;
}

function breakableQuerySqlSrv($connector,$query){
	$stmt=sqlsrv_query($connector,$query);
	return $stmt;
}

function insertSqlSrv($connector,$table,$data){
	//$data format : array(column=>value,column=>value...)
}

function updateSqlSrv($connector,$table,$data){
	//$data format : array(column=>value)
}

