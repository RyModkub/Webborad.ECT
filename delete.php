<?php
session_start();
if(isset($_SESSION['id']) && $_SESSION['role']=='a') {
    $id = ($_GET["id"]);
    echo "ลบกระทู้หมายเลข $id";
}
else 
header("Location: index.php");
    ?> 