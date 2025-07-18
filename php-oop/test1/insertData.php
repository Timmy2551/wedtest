<?php 
require('server.php');

// รับค่าข้อมูลและป้องกัน SQL Injection
$fname = mysqli_real_escape_string($con, $_POST["fname"]);
$lname = mysqli_real_escape_string($con, $_POST["lname"]);
$gender = mysqli_real_escape_string($con, $_POST["gender"]); // แนะนำ escape ด้วย
$skill =implode("," , $_POST["skill"]); //array => string

// สร้างคำสั่ง SQL ที่ถูกต้อง
$sql = "INSERT INTO account(username_account, lname_account, gender , skill ) VALUES ('$fname', '$lname', '$gender','$skill')";

// ส่งคำสั่งไปยังฐานข้อมูล
$result = mysqli_query($con,$sql);
// if ($result) {
//     echo "บันทึกข้อมูลเรียบร้อย"; 
// } else {
//     echo "เกิดข้อผิดพลาด: " . mysqli_error($con);
// }
// // ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head >
<body style="background-color: #E3F2FD;">
    <h1 class="text-center my-5">welcome</h1>
    <div class="text-center">
       <a href="home.php" class="btn btn-primary my-5">ถัดไป</a>
    </div>
   
    
</body>
</html>
