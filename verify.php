<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 style="text-align: center;">Web ja Board</h1>
    <hr>
   <?php 
   $id = $_POST['login'];
   $pw = $_POST['password'];
   ?>
   <div style="text-align: center;" > <?php  
   echo "เข้าสู่ระบบด้วย" .'<BR>';
   echo "Login = $id" .'<BR>';
   echo "Password = $pw".'<BR>';
   ?> </div>
</body>
</html>
