<?php
// Include necessary file
require_once('include.php');

// Check if user is already logged in
if ($user->is_logged_in()) {
    // Redirect logged in user to their home page
    $user->redirect('home.php');
}

// Check if log-in form is submitted
if (isset($_POST['log_in'])) {
    // Retrieve form input
    $user_name = trim($_POST['user_name_email']);
    $user_email = trim($_POST['user_name_email']);
    $user_password = trim($_POST['user_password']);

    // Check for empty and invalid inputs
    if (empty($user_name) || empty($user_email)) {
        array_push($errors, "Please enter a valid username or e-mail address");
    } elseif (empty($user_password)) {
        array_push($errors, "Please enter a valid password.");
    } else {
        // Check if the user may be logged in
        if ($user->login($user_name, $user_email, $user_password)) {
            // Redirect if logged in successfully
            $user->redirect('home.php');
        } else {
            array_push($errors, "Incorrect log-in credentials.");
        }
    }
}

// Check if register form is submitted
if (isset($_POST['register'])) {
    // Retrieve form input
    $user_name = trim($_POST['user_name']);
    $user_email = trim($_POST['user_email']);
    $user_password = trim($_POST['user_password']);
	$phone_number = trim($_POST['phone_number']);

    // Check for empty and invalid inputs
    if (empty($user_name)) {
        array_push($errors, "Please enter a valid username.");
    } elseif (empty($user_email)) {
        array_push($errors, "Please enter a valid e-mail address.");
    } elseif (empty($user_password)) {
        array_push($errors, "Please enter a valid password.");
    } elseif (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Please enter a valid e-mail address.");
    } elseif (empty($phone_number)) {
        array_push($errors, "Please enter a valid number.");
	}
	else {
        try {
            // Define query to select matching values
            $sql = "SELECT user_name, user_email FROM users WHERE user_name=:user_name OR user_email=:user_email";

            // Prepare the statement
            $query = $db_conn->prepare($sql);

            // Bind parameters
            $query->bindParam(':user_name', $user_name);
            $query->bindParam(':user_email', $user_email);

            // Execute the query
            $query->execute();

            // Return clashes row as an array indexed by both column name
            $returned_clashes_row = $query->fetch(PDO::FETCH_ASSOC);

            // Check for usernames or e-mail addresses that have already been used
            if ($returned_clashes_row['user_name'] == $user_name) {
                array_push($errors, "That username is taken. Please choose something different.");
            } elseif ($returned_clashes_row['user_email'] == $user_email) {
                array_push($errors, "That e-mail address is taken. Please choose something different.");
            } else {
                // Check if the user may be registered
                if ($user->register($user_name, $user_email, $user_password,  $phone_number)) {
                    echo "Registered";
                }
            }
        } catch (PDOException $e) {
            array_push($errors, $e->getMessage());
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
      <link rel="stylesheet" href="style.css">
  
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
  <div class="login-wrap">
  <div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
    <div class="login-form">
      <form class="sign-in-htm" action="index.php" method="post">
        <div class="group">
          <label for="user_name_email">Username or E-mail Address:</label>
        <input type="text" name="user_name_email" class='input'id="user_name_email" required>
        </div>
        <div class="group">
           <label for="user_password_log_in">Password:</label>
        <input type="password" class='input' name="user_password" id="user_password_log_in" required>
        </div>
        <div class="group">
          <input id="check" type="checkbox" class="check" checked>
          <label for="check"><span class="icon"></span> Keep me Signed in</label>
        </div>
        <div class="group">
          <input type="submit" class="button" name="log_in" value="Log in">
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
          <a href="#forgot">Forgot Password?</a>
        </div>
      </form>
      <form class="sign-up-htm" action="index.php" method="POST">
        <div class="group">
          <label for="user_name">Username:</label>
          <input type="text" class='input' name="user_name" id="user_name" required>
		</div>
        <div class="group">
          <label for="user_email">E-mail Address:</label>
        <input type="email" class='input'name="user_email" id="user_email" required>
        </div>
		<div class='group'>
		<label for="user_password">Password:</label>
        <input type="password"class='input'name="user_password" id="user_password" required>
		</div>
		 <div class="group">
          <label for="phone_number">phone number:</label>
        <input type="text" class='input'name="phone_number" id="phone_number" required>
        </div>
        <div class="group">
          <input type="submit" class="button" name="register" value="Register">
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
          <label for="tab-1">Already Member?</a>
        </div>
      </form>
    </div>
  </div>
</div>
  
  
</body>
</html>