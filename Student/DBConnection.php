<?php

$serverName = "LAFNBMAH1\SQLEXPRESS01";   // serverName\ instance name
$connectionInfo = array( "Database"=>"students", "UID"=>"hope","PWD"=>"");  
  
/* Connect using Windows Authentication. */  
$conn = sqlsrv_connect( $serverName, $connectionInfo);  
if( $conn)  
{
	echo "Connection established.<br />";
}else{  
     echo "Connection could not be established.<br />";  
     die( print_r( sqlsrv_errors(), true));  
} 


