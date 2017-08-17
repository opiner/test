
<?php
/* 
@author Ini Obong  Daniel 
@date 17-08-2017
@task First hotel.ng task
*/
function connect()
{
	$dsn = "mysql:dbname=Admission; host=localhost;";
	$password = "";
	$user = "root";
	
	$dopt = new PDO($dsn, $user, $password);
	
	return $dopt;
	
}
?>
