<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center;">Web Ja Board</h1>
    <hr>
<?php
session_start();
if(!isset($_SESSION['id'])) {
    header("Location: index.php");
    die();
}
?>
<table style="border: 2px  ; width: 20%;" >
<tr><td>ผู้ใช้: </td><td> <?php echo "$_SESSION[username]"; ?></td></tr>
<tr><td>หมวดหมู่:</td><td>  <select name=category>
    <option value=all>--ทั้งหมด--</option>></option>
    <option value=all>--เรื่องทั่วไป--</option>></option>
    <option value=all>--เรื่องเรียน--</option>></option>
    </select></td></tr> 
    <tr><td>หัวข้อ :</td><td><input type=text name=login size=20></td></tr>
    <tr><td>เนื้อหา :</td><td><textarea name= id= cols=20 rows=4></textarea></td></tr>
    <tr><td></td><td><input type="submit" value="บันทึกข้อความ"></td></tr>
 </table>
</body>
</html>