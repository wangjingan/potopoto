<?php
$page=$_POST["page"];
//include
include("dbConnect.php");
if($page=="login"){
    $email=$_POST["email"];
    $pass=$_POST["pass"];
    //database validation
    $con = mysql_connect(connection, dbUserName, dbPassword);
    callDB($con);
    mysql_select_db(dbName, $con);
    $result = mysql_query("SELECT * FROM user where email='$email' and password='$pass'");
    if(!$result){
        die('account not found');
        closeDB($con);
        header("location:index.php");
    }
    else {
        closeDB($con);
        session_start();
        $_SESSION['login']=$email;
        header("location:index.php");
    }
}
?>
