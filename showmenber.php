<?php
include "condb.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MenberList</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <div class="container">
        <div class="h4 text-center my-5 alert alert-success" role="alert">แสดงข้อมูลสามชิก</div>
        <a href="fr_menber.php" class="btn btn-success mb-4">Add</a>
    <table class="table table-striped">
        <tr>
        <th>รหัส</th>
            <th>ชื่อ</th>
            <th>นามสกุล</th>
            
            <th>เบอร์</th>
            <th>แก้ไข</th>
            <th>ลบ</th>
        </tr>

        <?php
        $sql = "SELECT * FROM menber";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_array($result)) {
        ?>

            <tr>
                <td><?php echo $row["id"] ?></td>
                <td><?php echo $row["name"] ?></td>
                <td><?php echo $row["surname"] ?></td>
                <td><?php echo $row["telephone"] ?></td>
                <td><a href="edit_menber.php?id=<?php echo $row["id"] ?>" class="btn btn-warning">แก้ไข</a></td>
                <td><a href="delete_menber.php?id=<?php echo $row["id"] ?>" class="btn btn-danger" onclick="Del(this.href); return false ;" >ลบ</a></td>


            </tr>
        <?php }
        mysqli_close($conn);
        ?>
    </table>
    </div>
</body>

</html>

<script language="JavaScript"> 

function Del(mypage){
    var agree = confirm("คุณต้องการลบข้อมูลหรือไม่");
    if(agree){
        window.location=mypage;
    }
}

</script>