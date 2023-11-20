<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show prodcut</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- menu navbar -->
    <?php include "menu.php" ?>

    <div class="container">
        <div class="row">
            <?php
            include "condb.php";
            $sql = "SELECT * FROM product";
            $hand = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_array($hand)) {
                    $price = $row['price']
            ?>
                <div class="col-md-3">
                    <img src="img/<?=$row['image'] ?>" alt="imageproduct" width="200" height="250" class="mt-5 p-2 my-2 border "> <br>
                    ID: <?=$row['pro_id'] ?><br>
                    <h5 class="text-success"><?=$row['pro_name'] ?></h5>
                    <!-- ราคา  <b class="text-danger">$<?=$row['price'] ?></b> บาท <br><br><br> -->
                     ราคา  <b class="text-danger">$<?=number_format($price,2) ?></b> บาท 
                </div> 

            <?php } mysqli_close($conn) ?>
        </div>  <!-- end row -->
    </div> <!-- end conatiner -->
</body>

</html>