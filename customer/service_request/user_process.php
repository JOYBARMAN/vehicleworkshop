<?php
/**
 * Created by PhpStorm.
 * User: ZiaulHaque
 * Date: 11-10-2015
 * Time: 18:25
 */
include("dbconnect.php");
$f_name=$_REQUEST['f_name'];
$l_name=$_REQUEST['l_name'];
$gender=$_REQUEST['gender'];
$address=$_REQUEST['address'];
$state=$_REQUEST['state'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$date_of_birth=$_REQUEST['date_of_birth'];
/*
 * Inserting data to table
 * */

$query=mysqli_query($db_connect,"INSERT INTO customers (f_name, l_name, gender, address, state, email, phone, date_of_birth) VALUES ('$f_name','$l_name','$gender','$address','$state','$email','$phone','$date_of_birth')") or die(mysqli_error($db_connect));

mysqli_close($db_connect);
header("location:index.php?note=success");