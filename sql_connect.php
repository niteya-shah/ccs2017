<?php

$serverName = "den1.mysql1.gear.host";

/* Get UID and PWD from application-specific files.  */
$uid = 'tag1';
$pwd = 'Ql75O-h93?4S';
$connectionInfo = array( "UID"=>$uid,
                         "PWD"=>$pwd,
                         "Database"=>"tag1");

/* Connect using SQL Server Authentication. */
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if( $conn === false )
{
     echo "Unable to connect.</br>";
     die( print_r( sqlsrv_errors(), true));
}
 
echo 'Connected successfully';

?>
