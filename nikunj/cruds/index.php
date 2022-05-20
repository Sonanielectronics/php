
<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud tutorial</title>
</head>
<body>

<form action="" method="POST">

<input type="text" 
name="username" value="" required/>
<input type="text" 
name="password" value="" required/>

<input type="submit" 
name="btnsubmit" value="Register"/>

<a href="display.php">check form </a>

</form>
    
</body>
</html>

<?php

include 'connection.php' ;

if(isset($_POST['btnsubmit'])){

    $username= $_POST['username'];
    $password= $_POST['password'];
    
    $insertquery = " INSERT INTO `crud table`(`username`, `password`) VALUES ('$username','$password') ";

    mysqli_query($con,$insertquery);
}

?>
