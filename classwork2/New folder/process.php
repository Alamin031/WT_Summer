<?php
$name=$_REQUEST["fName"];
if(empty(strlen($name)>4))
{
    echo"<br> First name should be more than 4 charactor ".$name;

}
$name1=$_REQUEST["lName"];

if(empty(strlen($name1)>4))
{
    echo"<br> Last name should be more than 4 charactor ".$name;

}
$mail=$_REQUEST["mail"];

if(empty(strlen($mail)>4))
{
    echo"<br> Last name should be more than 4 charactor ".$name;

}

?>

