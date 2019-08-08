<?php
/**
 * Created by PhpStorm.
 * User: ZiaulHaque
 * Date: 11-10-2015
 * Time: 18:25
 */
include("dbconnect.php");
$name=$_REQUEST['name'];
$city=$_REQUEST['city'];
$email=$_REQUEST['email'];
$message=$_REQUEST['message'];
/*
 * Inserting data to table
 * */

$query=mysqli_query($db_connect,"INSERT INTO user (name, city, email, message) VALUES ('$name','$city','$email','$message')") or die(mysqli_error($db_connect));

mysqli_close($db_connect);
header("location:index.php?note=success");