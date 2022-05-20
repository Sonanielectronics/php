<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chess</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="chessboard" value="" required/>
        <input type="submit" name="btnsubmit" value="generatechessboard">
    </form>

    <br>

    <table>

    <!-- <?php

    echo("hi");

    ?> -->

    </table>

</body>
</html>

<?php

if(isset($_POST['btnsubmit'])){
    
    $data = $_POST['chessboard'];
    
    for($row=1 ; $row<=$data ; $row++){
        echo "<tr>
        <td>$row</td>
        </tr>";
    }
}

//without css it's can't possible i think by my mine 

?>
