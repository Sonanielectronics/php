<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
</head>
<body>

<?php

include 'connection.php';


if(isset($_POST['submit'])){

    $email = $_POST['emailaddress'];
    $password = $_POST['password'];

    $email_search = " SELECT * FROM regis WHERE email='$email' ";
    $query = mysqli_query($con,$email_search);

    $email_count = mysqli_num_rows($query);

    if($email_count){

        $email_pass = mysqli_fetch_assoc($query);

        $db_pass = $email_pass['password'];

        $pass_decode = pass



        
        word_verify($password,$db_pass);

        if($pass_decode){

            echo ("login successfully");

        }else{

            echo ("password incorrect");
        }
    
    }else{

        echo ("invalid email");

    }

    }
 
?>

<h1> create account </h1>

<br><br>
Get started with your free account 

<br><br>

<a href="display.php" style="text-decoration: none;">Login via Gmail</a>
<a href="display.php" style="text-decoration: none;">Login via Fassbook</a>

<br><br>

OR

<br><br>

<form action="" method="POST">

<input type="full name" name="fullname" placeholder="Full name" required></input><br><br>
<input type="text" name="emailaddress" placeholder="Email address" required></input><br><br>
<input type="text" name="phonenumber" placeholder="Phone number"required ></input><br><br>
<input type="text" name="password" placeholder="Password" required></input><br><br>
<input type="text" name="confirmpassword" placeholder="Confirm password" required></input><br><br>
<button type="submit" name="submit">Login Now</button>

</form>

<br><br>

don't have an account ? 

<a href="display.php" style="text-decoration: none;">Sign Up Here</a>

</body>
</html>