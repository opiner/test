<?php
require_once("function.php");
$con = connect();


$sql = "create tables adminpupils(
adminpupilsId int (11) Primary Key Auto_increment not null,
Name Varchar (30),
Dateofbirth Varchar (20),
Sex Varchar (5),
Nickname Varchar (10),
Favouritecolours Varchar(8),
Stateoforigin Varchar(10) 
Localgovt Varchar(10),
Address Varchar (15),
Phonenumber Varchar (15)
)";

$con->query($sql);


?>