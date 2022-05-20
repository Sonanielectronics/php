<?php

include 'connection.php';

$selectquery = " select * from crudtable WHERE 1";

$query = mysqli_query($con,$selectquery);

$nums = mysqli_num_rows($query);

$showquery = "SELECT * FROM crudtable ";

$showdata = mysqli_query($con,$showquery);

$arrdata = mysqli_fetch_array($showdata);

$selectquery = " select * from crudtable WHERE 1";

$query = mysqli_query($con,$selectquery);

$nums = mysqli_num_rows($query);

$res = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
            <tr>
                <th>id</th>
                <th>username</th>
                <th>password</th>
                <th colspan="2">operation</th>
</tr>

<tr>
                <th><?php echo $res[0]; ?></th>
                <th><?php echo $res[1]; ?></th>
                <th><?php echo $res[2]; ?></th>
                <th><a href="updates.php ? id=<?php echo $res[0]; ?><?php ?>" data-placement="top" title="UBDATE"><i>update</i></a></th>
                <td><a href="delete.php ? id=<?php echo $res[0]; ?><?php ?>" data-placement="top" title="DELETE"><i>delete</i></td>
            </tr>
<?php

while($res = mysqli_fetch_array($query)){
    ?>
<tr>
    <td><?php echo $res[0]; ?></td>
    <td><?php echo $res[1]; ?></td>
    <td><?php echo $res[2]; ?></td>
    <td><a href="updates.php ? id=<?php echo $res[0]; ?><?php ?>" data-placement="top" title="UBDATE"><i>update</i></a></td>
    <td><a href="delete.php ? id=<?php echo $res[0]; ?><?php ?>" data-placement="top" title="DELETE"><i>delete</i></td>
</tr>
 
      <?PHP

}

?>

</table>

</body>
</html>

