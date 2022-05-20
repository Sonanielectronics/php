<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>palindromchecker</title>
</head>
<body>
    <form action="" method="POST">

    <h1>
        <?php

            if(isset($_POST['btnsubmit'])){
                $data = $_POST['palindrome'];

                $revdata = strrev($data);

                if($data == $revdata){
                    echo("yes $data is palindrome");
                }else{
                    echo("no");
                }
            }

        ?>
    </h1>

    <input type="text" placeholder="type your words" name="palindrome" value="" required/>
    <input type="submit" name="btnsubmit" value="generatechessboard">
    </form>
</body>
</html>