<?php 
require('server.php');

// คำสั่ง SQL ที่ถูกต้อง
$sql = "SELECT * FROM account";

// ส่งคำสั่ง SQL ไปยังฐานข้อมูล
$result = mysqli_query($con, $sql);

// ดึงข้อมูลแถวแรกจากผลลัพธ์
$row = mysqli_fetch_object($result);

// แสดงผลข้อมูล
echo $row->id_account . "<br>";
echo $row->username_account . "<br>";
echo $row->lname_account . "<br>";
echo $row->gender . "<br>";
echo $row->skill . "<br>";

echo $row->id_account . "<br>";
echo $row->username_account . "<br>";
echo $row->lname_account . "<br>";
echo $row->gender . "<br>";
echo $row->skill . "<br>";

echo $row->id_account . "<br>";
echo $row->username_account . "<br>";
echo $row->lname_account . "<br>";
echo $row->gender . "<br>";
echo $row->skill . "<br>";

echo $row->id_account . "<br>";
echo $row->username_account . "<br>";
echo $row->lname_account . "<br>";
echo $row->gender . "<br>";
echo $row->skill . "<br>";
?>
