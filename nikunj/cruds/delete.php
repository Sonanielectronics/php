<?php

include 'connection.php';

$id = $_GET['id'];

$deletequery = " DELETE FROM `crudtable` WHERE id=$id ";

$query = mysqli_query($con,$deletequery)

?>