<?php
include "condb.php";

$f_name = $_POST['fname'];
$l_name = $_POST['lname'];
$tel = $_POST['telephone'];

$sql = "INSERT INTO menber(name,surname,telephone) VALUE('$f_name','$l_name','$tel')";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo " <script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
    echo " <script>window.location='showmenber.php';</script>";
}else{
    echo " <script>alert('บันทึกข้อมูลไมสำเร็จ')</script>";
}

mysqli_close($conn);

?>
