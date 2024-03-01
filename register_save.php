<?php 

    $login = $_POST['login'];
    $pwd = sha1($_POST['pass']);
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");

    $sql =  "INSERT INTO user(login,password,name,gender,email,role) VALUES('$login','$pwd','$name','$gender','$email','m')";

    $conn->exec($sql);
    $conn=null;
   
?>
    <div style="text-align: center;"> 
        <a href="index.php">กลับไปที่หน้าหลัก</a>
    </div>