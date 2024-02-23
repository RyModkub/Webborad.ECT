<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
<?php session_start();  ?>
    <h1 style="text-align: center;">สมัครสมาชิก</h1>
    <hr>
    <div class="row mt-4">
        <div class="col-lg-4 col-md-3 col-sm-2 col-1"></div>
        <div class="col-lg-4 col-md-6 col-sm-8 col-10">
    <div class="card">
                <div class="card-header">เข้าสู่ระบบ</div>
                <form action="verify.php" method="POST">
                    <div class="form-group c">
                        <label for="user" class="form-label col-2">ชื่อบัญชี:</label>
                        <input type="text" id="user" name="login" class="col-auto" placeholder="Username" required>
                    </div>
                    <div class="form-group mt-2">
                        <label for="pass" class="form-label col-2">รหัสผ่าน:</label>
                        <input type="password" id="pass" class="col-auto"name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label for="name" class="form-label">ชื่อ-นามสกุล:</label>
                        <input type="text" id="name" name="name" class="" placeholder="Firstname-Lastname" required>
                    </div>
                    <div>
                        <label class="form-label ">เพศ</label>
                    <div class="form-check">   
                    <input class="form-check-input" type="radio" name="gender" id="M">
                    <label label class="form-check-label" for="M">
                     ชาย
                    </label>
                    </div>
                    <div class="form-check">
                        
                    <input class="form-check-input" type="radio" name="gender" id="F" checked>
                    <label class="form-check-label" for="F">
                    หญิง
                    </label>
                    </div>
                    <input class="form-check-input" type="radio" name="gender" id="O" checked>
                    <label class="form-check-label" for="O">
                    อื่นๆ
                    </label>
                    </div>
                    <div class="form-group mt-2">
                        <label for="email" class="form-label">อีเมล:</label>
                        <input type="password" id="email" class=""name="email" placeholder="email" required>
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                    <button type="submit" class="btn btn-secondary m-1">สมัครสมาชิก</button> 
                    </div>
                </form>      
            </div>
    <br>
            
    <table style="border: 2px solid black; width: 30%;" align="center">
        <tr><td style="background-color: #6cd2fe;" colspan="2" >กรอกข้อมูล</td></tr>
        <tr><td>ชื่อบัญชี</td><td><input type="text" name="login" size="50"></td></tr>
        <tr><td>รหัสผ่าน</td><td><input type="password" name="password" size="50"></td></tr>
        <tr><td>ชื่อ-นามสกุล</td><td><input type="text" name="name" size="50"></td></tr>
        <tr><td></td><td><input type="radio" name="gender" value="m">ชาย</td></tr>
        <tr><td>เพศ</td><td><input type="radio" name="gender" value="f">หญิง</td></tr>
        <tr><td></td><td><input type="radio" name="gender" value="other">อื่นๆ</td></tr>
        <tr><td>อีเมล</td><td><input type="email" name="email" size="50"></td></tr>
        <tr style="text-align: center;"><td colspan="2"><input type="submit" value="สมัครสมาชิก"></td></tr>
    </table>
        </div>
    <div style="text-align: center;"> 
        <a href="index.php">กลับไปที่หน้าหลัก</a>
    </div>
</body>
</html>