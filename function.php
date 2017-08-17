<?php
function connect()
{
	$dsn = "mysql:dbname=Admission; host=localhost;";
	$password = "";
	$user = "root";
	
	$dopt = new PDO($dsn, $user, $password);
	
	return $dopt;
	
}
?>
