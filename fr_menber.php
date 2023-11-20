<?php
include "condb.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddMenberList</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">

    <div class="row">
        <div class="col-sm-6">
        <div class="h4 text-center my-5 alert alert-success" role="alert">เพิ่มข้อมูลสามชิก</div>
        <form action="insert_menber.php" method="POST">

            <label for="">ชื่อ</label>
            <input type="text" name="fname" class="form-control" placeholder="ชือ" required> <br>
            <label for="">นามสกุล</label>
            <input type="text" name="lname" class="form-control" placeholder="นายสกุล" required> <br>
            <label for="">เบอร์</label>
            <input type="number" name="telephone" class="form-control" placeholder="เบอร์" required> <br>
            <input type="submit" value="submit" class="btn btn-success">
            <a href="showmenber.php" class="btn btn-warning">ยกเลิก</a>

        </form>

        </div>
    </div>
    
</body>

</html>