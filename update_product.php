<?php
include "condb.php";
$proid = $_POST['proid'];
$proname = $_POST['pname'];
$typeid = $_POST['typeID'];
$price = $_POST['price'];
$num = $_POST['num'];
$image = $_POST['txtimg'];


//อัพโหลดรูปภาพ edi file1ชื่อที่รักจากform   create folder ima เพื่อเก็บที่อยู่ของfile รุปภาพ
if (is_uploaded_file($_FILES['file1']['tmp_name'])) {
    $new_image_name = 'pr_' . uniqid() . "." . pathinfo(basename($_FILES['file1']['name']), PATHINFO_EXTENSION);
    $image_upload_path = "./img/" . $new_image_name;
    move_uploaded_file($_FILES['file1']['tmp_name'], $image_upload_path);
} else {
    //ข้อมูลชื่อรูปภาพ
    $new_image_name = "$image";
}

$sql = "UPDATE product SET 
   pro_name = '$proname',
   type_id = '$typeid',
   price = '$price',
   image = '$new_image_name'
   WHERE pro_id = '$proid' ";


  $result = mysqli_query($conn,$sql);
  if($result){
    echo "<script> alert('แก้ไขข้อมูลเรียกร้อย') </script>";
    echo "<script> window.location='show_product.php' </script>";
  }else{
    echo "<script>alert('ไม่สามารถแก้ไขข้อมูลได้') </script>";
  }
  
