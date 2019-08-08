<?php
/**
 * Created by PhpStorm.
 * User: ZiaulHaque
 * Date: 11-10-2015
 * Time: 18:21
 */
include("dbconnect.php");
$note=$_REQUEST['note'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Service Request form</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>


<style>
  .topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

</style>


    <div class="topnav">

  <a href="http://localhost/vehicleWorkshop/customer/homepage.php">Home</a>
    </div>

<div id="page-wrap">
    <?PHP if($note=='success')
    {
    echo "<div class=\"success\">Form successfully submitted!</div>";
    }
?>

<h1>Service Request</h1>

    <div id="contact-area">

        <form method="post" action="user_process.php">
            <label for="f_name">First Name:</label>
            <input type="text" name="f_name" id="f_name" />

            <label for="l_name">Last name:</label>
            <input type="text" name="l_name" id="l_name" />
            
  
            <label for="gender">Gender :</label>
            <input type="text" name="gender" id="gender" />
            

            <label for="address">Vehicle details:</label>
            <input type="text" name="address" id="address" />

            <label>State </label>
            <input type="text" name="state" id="state" />

            <label for="email">Email:</label>
            <input type="text" name="email" id="email" />
            
            <label for="phone">Phone:</label>
            <input type="text" name="phone" id="phone" />

            <label for="date_of_birth">Date of birth:</label>
            <input type="text" name="date_of_birth" id="date_of_birth" />

            <input type="submit" name="submit" value="Submit" class="submit-button" />
        </form>

        <div style="clear: both;"></div>
    </div>

</div>

</body>
</html>