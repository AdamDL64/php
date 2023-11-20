<?php 
include "condb.php";


$id = $_POST['id_mem'];
$f_name = $_POST['fname'];
$l_name = $_POST['lname'];
$tel = $_POST['telephone'];

$sql = "UPDATE menber set name='$f_name',surname='$l_name',telephone='$tel' ";

$result = mysqli_query($conn,$sql);

if ($result) {
    echo " <script>alert('ทำการแก้ไขข้อมูลเรียบร้อย');</script>";
    echo " <script>window.location='showmenber.php';</script>";
}else{
    echo " <script>alert('ทำการแก้ไขมูลไมสำเร็จ')</script>";
}

mysqli_close($conn);

?>