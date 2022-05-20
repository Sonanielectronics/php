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


<?php

// $username = "root";
// $password = "";
// $server = 'localhost';
// $db = '29march';

// $con = mysqli_connect($server,$username,$password,$db);

// if($con){
//     echo "connection successful";
// }else{
//     echo "no connection";
// }

include 'connection.php' ;

if(isset($_POST['btnsubmit'])){
    $idupdate= $_GET['id'];
    $username= $_POST['username'];
    $password= $_POST['password'];

    // echo("$password");

    // $insertquery = " INSERT INTO 29marchtable(
    //     username,password) VALUES ('$username','$password') ";

    $query = "UPDATE `crudtable` SET `username`='$username',`password`='$password' where id=$idupdate ";

    // echo("$insertquery");

    mysqli_query($con,$query);
}

include 'connection.php';

$ids = $_GET['id'];

$showquery = "SELECT * FROM crudtable where id={$ids}";

$showdata = mysqli_query($con,$showquery);

$arrdata = mysqli_fetch_array($showdata);

?>
<!-- 
<input type="text" 
name="id" value="" required/> -->
<input type="text" 
name="username" value="<?php echo $arrdata[1]; ?>" required/>
<input type="text" 
name="password" value="<?php echo $arrdata[2]; ?>" required/>

<input type="submit" 
name="btnsubmit" value="Register"/>

<a href="display.php">check form </a>

</form>
    
</body>
</html>