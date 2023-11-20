<?php
include "condb.php";

$ids = $_GET['id'];
$sql = "DELETE FROM menber WHERE id = '$ids' ";

if(mysqli_query($conn,$sql)){
    echo " <script>alert('ลบข้อมูลเรียบร้อย');</script>";
    echo " <script>window.location='showmenber.php';</script>";
}else{
    echo "Error:l" .$sql. "<br>" . mysqli_errno($conn);
    echo " <script>alert('ลบข้อมูลไม่สำเร็จ');</script>";
}
?>
