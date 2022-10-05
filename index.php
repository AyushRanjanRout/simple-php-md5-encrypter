<?php

if(isset($_POST['md5'])){
  $md5 = md5($_POST['md5']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MD5 Encrypt</title>
    <style>
        .form{
            margin:auto;
            display:block;
        }
      .p{
        color:red;
      }

        .input_box{
            width:50%;
            padding: 10px;
            border-radius:50px;
            border: 3px solid purple;
        }
        .submit_box{
            width:25%;
            padding: 10px;
            border-radius:50px;
            border: 3px solid purple;
            color: white;
            background: purple;
        }
    </style>    
</head>
<body>
    <h1>Simple Md5 Encryptor</h1>
    <form action="index.php" method="post" class="form">
        <input class="input_box" type="text" placeholder="Enter Text Here " name="md5">
        <button class="submit_box" type="submit">Encrypt</button>
    </form>
   <?php 
    if(isset($_POST['md5'])){
      echo "<p>Your Hash is : <b> $md5</b></p>";
    }
    ?>
  
    
</body>
</html>
