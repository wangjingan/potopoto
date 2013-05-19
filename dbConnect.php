<?php
$host = "ap-cdbr-azure-east-a.cloudapp.net";
$user = "bb048baef36f69";
$password = "10f0f629";
$dba = "pototo";

$con = mysql_connect("$host", "$user", "$password");
    if(!$con)
    {
        die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("$dba", $con);
    mysql_close($con);
?>
