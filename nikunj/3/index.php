<?php


if(isset($_FILES['docx'])){

    $file_name =$_FILES['docx']['name'] ;
    $file_size =$_FILES['docx']['size'] ;
    $file_tmp =$_FILES['docx']['tmp_name'] ;
    $file_type =$_FILES['docx']['type'] ;


    move_uploaded_file($file_tmp,"upload-files/docx.docx");

}

if(isset($_POST['btnsubmit'])){
    $operation=$_POST['operation'];
    switch($operation){
        case "add":
         
            
        $command = escapeshellcmd('python upload-files/python1.py');
        $output = shell_exec($command);
        // echo $output;

         break;
         case "sub":
             
            
            $command = escapeshellcmd('python upload-files/python1.py');
            $output = shell_exec($command);
            // echo $output;

             break;
             case "multi":
                
                
                $command = escapeshellcmd('python upload-files/python2.py');
                $output = shell_exec($command);
                // echo $output;



                     break;
                     default: echo "sorry its not exist";

    }
}

//   } else if (choice === 'snowing') {
//     para.textContent = 'The snow is coming down — it is freezing! Best to stay in with a cup of hot chocolate, or go build a snowman.';
//   } 

// if(isset){

    // $file_name =$_FILES['btnsubmit']['name'] ;
    // $file_size =$_FILES['btnsubmit']['size'] ;
    // $file_tmp =$_FILES['btnsubmit']['tmp_name'] ;
    // $file_type =$_FILES['btnsubmit']['type'] ;

//     move_uploaded_file($file_tmp,"upload-files/docx.docx");

// }

// if(isset($_FILES['btnsubmit'])){

//     $file_name =$_FILES['png']['name'] ;
//     $file_size =$_FILES['png']['size'] ;
//     $file_tmp =$_FILES['png']['tmp_name'] ;
//     $file_type =$_FILES['png']['type'] ;

//     move_uploaded_file($file_tmp,"upload-files/image.png");

// }

    // if(isset($_FILES['csv'])){

    //     $file_name =$_FILES['csv']['name'] ;
    //     $file_size =$_FILES['csv']['size'] ;
    //     $file_tmp =$_FILES['csv']['tmp_name'] ;
    //     $file_type =$_FILES['csv']['type'] ;

    //     move_uploaded_file($file_tmp,"upload-files/csv");

    //     $file = fopen("upload-files/csv","r");

    //     $command = escapeshellcmd('python upload-files/python.py');
    //     $output = shell_exec($command);
    //     echo $output;
    // }
 
    // if(isset($_FILES['png'])){

    //     $file_name =$_FILES['png']['name'] ;
    //     $file_size =$_FILES['png']['size'] ;
    //     $file_tmp =$_FILES['png']['tmp_name'] ;
    //     $file_type =$_FILES['png']['type'] ;

    //     move_uploaded_file($file_tmp,"upload-files/image.png");

    //     $file = fopen("upload-files/csv","r");

    //     $command = escapeshellcmd('python upload-files/python.py');
    //     $output = shell_exec($command);
    //     echo $output;
    // }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sum of the number inside the csv files and extract text from image</title>

</head>
<body>
    
<form class="form-horizoontal" action="" method="POST" name="uploadcsv" enctype="multipart/form-data">

<h1>created by nikx_prajapati</h1></br>
<select style="width: 20px;" name="operation">
    <option value="add"></option>
    <option value="sub">sum of the number inside the csv files</option>
    <option value="multi">extract text from image</option>
    <!-- <option value="divide">project 3</option> -->
</select>

      <input type="file" name="docx"></br></br>
      <input type="submit" name="btnsubmit">

      <a href="download2.csv">download</a>

</form>
</body>
</html>
