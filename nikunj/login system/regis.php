<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration page</title>
</head>
<body>

<?php

include 'connection.php' ;

if(isset($_POST['submit'])){

    $username= $_POST['fullname'];
    $emailaddress= $_POST['emailaddress'];
    $phonenumber= $_POST['phonenumber'];
    $password= $_POST['password'];
    $confirmpassword= $_POST['confirmpassword'];

    $passwords= password_hash($password,PASSWORD_BCRYPT);
    $confirmpasswords= password_hash($confirmpassword,PASSWORD_BCRYPT);
    
    $emailquery = " SELECT * FROM `regis` WHERE email='$emailaddress' ";
    $query = mysqli_query($con,$emailquery);

    $emailcount = mysqli_num_rows($query);

    if($emailcount>0){
        echo "email already exists";
    }else{
        if($password == $confirmpassword){

            $insertquery = " INSERT INTO `regis`(`name`, `email`, `mobile`, `password`, `confirm password`) VALUES ('$username','$emailaddress','$phonenumber','$passwords','$confirmpasswords') ";

            mysqli_query($con,$insertquery);

        }else{
            echo "password are not matching"; 
        }
    }

    // $insertquery = " INSERT INTO `regis`(`name`, `email`, `mobile`, `password`, `confirm password`) VALUES ('$username','$emailaddress','$phonenumber','$password','$confirmpassword') ";

    // mysqli_query($con,$insertquery);

}

?>

<h1> create account </h1>

<br><br>
Get started with your free account 

<br><br>

<a href="login.php" style="text-decoration: none;">Login via Gmail</a>
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
<button type="submit" name="submit">Create Account</button>

</form>

<br><br>

have an account ? 

<button type="submit" name="submit">Sign up</button>

</body>
</html>

<?php

include 'css/style.php' ;
include 'links/links.php' ;
include 'connection.php' ;

?>