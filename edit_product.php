<?php
include "condb.php";
// รับค่าidมาจาก edit file show_product.php
$idpro = $_GET['id'];
$sql1 = "SELECT * FROM product WHERE pro_id ='$idpro'";
$result = mysqli_query($conn,$sql1);

//รับค่าจาก mysql เป็น array
$rs = mysqli_fetch_array($result);

//เช็ดรหัสประเภทสินค้า
$p_typeID = $rs['type_id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add product</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-9">

                <div class="alert alert-primary text-center h4 mt-4" role="alert">
                    แก้ไขข้อมูลสินค้า
                </div>
                <!-- enctype="multipart/form-data" ใช่ methode จัดการรูปภาพ  -->
                <form action="update_product.php" method="post" name="formq" enctype="multipart/form-data">
                <label for="">รหัสสินค้า :</label>
                    <input type="text" name="proid" class="form-control" readonly value="<?=$rs['pro_id'] ?>" > <br>
                    <label for="">ชื่อสินค้า :</label>
                    <input type="text" name="pname" class="form-control" value="<?=$rs['pro_name'] ?>" > <br>
                    <label for="typeID">ประเภทสินค้า :</label>
                    <select class="form-select" name="typeID">
                        <!-- เรียกข้อมูลในmysql ประเภทสินค้า orderby คือการจัดเรียงข้อมูล -->

                        <?php
                        $sql = 'SELECT * FROM type ORDER BY type_name';
                        $hand = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($hand)) {
                            //  <!-- ตรวจสอบเงือนไขประเภทสินค้าให้แดสงหมวดหมู่ -->
                            $ttype_ID = $row['type_id'];
                        ?>
                            <option value="<?= $row['type_id'] ?>"<?php if($p_typeID==$ttype_ID){echo "selected=selected";} ?> >
                            <?= $row['type_name'] ?></option>
                        <?php
                        }
                        mysqli_close($conn);
                        ?>
                    </select>
                    <label for="">ราคา :</label>
                    <input type="number" name="price" class="form-control"value="<?=$rs['price'] ?>"> <br>
                    <label for="">จำนวน :</label>
                    <input type="number" name="num" class="form-control" value="<?=$rs['amount'] ?>"> <br>
                    <label >รูปภาพ :</label> <br>
                    <img src="img/<?=$rs['image']?>" width="120px" ><br> <br>
                    <input type="file" name="file1"> <br> 
                    <input type="hidden" name="txtimg" class="form-control" value="<?=$rs['image'] ?>">

                    <button type="submit" class="btn btn-primary mt-1">Update</button>
                    <!-- <input class="btn btn-danger mt-1" type="reset" value="Cancel"> -->
                    <a class="btn btn-danger mt-1" href="show_product.php" role="button" >Cancel</a>

                </form>

            </div>
        </div>

    </div>
</body>

</html>