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
    <title>Feedback Form</title>
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

<h1>Contact us</h1>

    <div id="contact-area">

        <form method="post" action="user_process.php">
            <label for="Name">Name:</label>
            <input type="text" name="name" id="Name" />

            <label for="City">Location:</label>
            <input type="text" name="city" id="City" />

            <label for="Email">Email:</label>
            <input type="text" name="email" id="Email" />

            <label for="Message">Message:</label><br />
            <textarea name="message" rows="20" cols="20" id="Message"></textarea>

            <input type="submit" name="submit" value="Submit" class="submit-button" />
        </form>

        <div style="clear: both;"></div>
    </div>

</div>

</body>
</html>