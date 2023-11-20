<?php
include "condb.php"
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
                    เพิ่มข้อมูลสินค้า
                </div>
                <!-- enctype="multipart/form-data" ใช่ methode จัดการรูปภาพ  -->
                <form action="insert_product.php" method="post" name="formq" enctype="multipart/form-data">
                    <label for="">ชื่อสินค้า :</label>
                    <input type="text" name="pname" class="form-control" placeholder="ชื่อสินค้า" required> <br>
                    <label for="typeID">ประเภทสินค้า :</label>
                    <select class="form-select" name="typeID">
                        <!-- เรียกข้อมูลในmysql ประเภทสินค้า orderby คือการจัดเรียงข้อมูล -->

                        <?php
                        $sql = 'SELECT * FROM type ORDER BY type_name';
                        $hand = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($hand)) {
                        ?>
                            <option value="<?= $row['type_id'] ?>"><?= $row['type_name'] ?></option>
                        <?php
                        }
                        mysqli_close($conn);
                        ?>
                    </select>
                    <label for="">ราคา :</label>
                    <input type="number" name="price" class="form-control" placeholder="ราคาสินค้า" required> <br>
                    <label for="">จำนวน :</label>
                    <input type="number" name="num" class="form-control" placeholder="จำนวน" required> <br>
                    <label for="">รูปภาพ :</label>
                    <input type="file" name="file1" required> <br>

                    <button type="submit" class="btn btn-primary mt-1">Submit</button>
                    <!-- <input class="btn btn-danger mt-1" type="reset" value="Cancel"> -->
                    <a class="btn btn-danger mt-1" href="show_product.php" role="button" >Cancel</a>

                </form>

            </div>
        </div>

    </div>
</body>

</html>