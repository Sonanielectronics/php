
<html>
    <head>
        <title></title>
</head>

<body>
 
<form method="POST">

<input type="text" name="num1"></input>
<input type="text" name="num2"></input>
<select name="operation">
    <option value="add" name="add">add</option>
    <option value="sub">SUB</option>
    <option value="multi">MULTI</option>
    <option value="divide">DIVIDE</option>
</select>
<input type="submit" name="submit"></input>

</form>

</body>

<p>
   <?php

   if(isset($_POST['submit'])){
       $num1=$_POST['num1'];
       $num2=$_POST['num2'];
       $operation=$_POST['operation'];
       switch($operation){
           case "add":
            $add=$num1+$num2;
            echo "the sum of two number is $add ";
            break;
            case "sub":
                $sub=$num1-$num2;
                echo "the sub of two number is {$sub}";
                break;
                case "multi":
                    $multi=$num1*$num2;
                    echo "the multi of two number is {$multi}";
                    break;
                    case "divide":
                        $divide=$num1/$num2;
                        echo "the sum of two number is {$divide}";
                        break;
                        default: echo "sorry its not exist";

       }
   }

   ?>

</p>

</html>