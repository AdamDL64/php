<?php
include "condb.php";

$id =$_GET['id'];
$sql = "SELECT * FROM menber WHERE id = '$id' ";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EditMenberList</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">

    <div class="row">
        <div class="col-sm-6">
        <div class="h4 text-center my-5 alert alert-success" role="alert">แก้ไขข้อมูลสามชิก</div>
        <form action="update_menber.php" method="POST">
            
            <label for="">รหัสสมาชิก:</label>
            <input type="text" name="id_men" class="form-control" readonly  value="<?=$row['id'];?>" > <br>
            <label for="">ชื่อ</label>
            <input type="text" name="fname" class="form-control" value="<?php echo $row['name']; ?>" > <br>
            <label for="">นามสกุล</label>
            <input type="text" name="lname" class="form-control" value="<?php echo $row['surname']; ?>" > <br>
            <label for="">เบอร์</label>
            <input type="number" name="telephone" class="form-control" value="<?=$row['telephone'];?>" > <br>
            <input type="submit" value="Update" class="btn btn-success text-black">
            <a href="showmenber.php" class="btn btn-warning">ยกเลิก</a>

        </form>

        </div>
    </div>
    
</body>

</html>