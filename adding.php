<?php

require_once("functions.php");
$con = connect();


if(isset($_POST["submit"])){
	
	
	
$Name = $_POST["Name"];	
$Dateofbirth = $_POST["age"];
$Sex = $_POST["previousclass"];
$Nickname = $_POST["previousSchool"];
$Favouritecolours= $_POST["Favouritecolours"];
$stateoforigin = $_POST["Stateoforigin"];
$Localgovt = $_POST["Localgovt"];
$Address = $_POST["Address"];
$phone = $_POST["phone"];


$insert = "INSERT INTO Pupils (Name, Dateofbirth, Previousschool, Favouritecolours,stateoforigin,Localgovt,Address, Phone,) VALUES
 (:Name, :Dateofbirth, :Previousschool, :Favouritecolours, :Stateoforigin,:Localgovt,:Address, :Phone, :Gender)";

$sql = $con->prepare($insert);
$sql->bindValue(":Name", $Name, PDO::PARAM_STR);
$sql->bindValue(":Dateofbirth", $Dateofbirth, PDO::PARAM_STR);
$sql->bindValue(":Previousschool", $previousschool, PDO::PARAM_STR);
$sql->bindValue(":Favouritecolours", $Favouritecolours, PDO::PARAM_STR);
$sql->bindValue(":Stateoforigin", $Stateoforigin, PDO::PARAM_STR);
$sql->bindValue(":Localgovt", $Localgovt, PDO::PARAM_STR);
$sql->bindValue(":Address", $Address, PDO::PARAM_STR);
$sql->bindValue(":Phone", $Phone, PDO::PARAM_STR);
		
if($sql->execute()){
	echo "You have been registered successfully";
}

}
//ends isset

