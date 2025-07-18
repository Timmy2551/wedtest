<?php 
require('server.php');

$sql = "SELECT * FROM  account";
$result = mysqli_query( $con , $sql);

$row = mysqli_fetch_object($result);
echo "รหัสพนักงาน".$row->id_account ."<br>";
echo "ชื่อ".$row->username_account."<br>";
echo "นามสกุล".$row->lname_account."<br>";
echo "เพส".$row->gender."<br>";
echo "ทักษะ".$row->skill."<br>";





?>