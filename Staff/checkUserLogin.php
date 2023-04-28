<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php include '../title/title.php' ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="../boot/css/mdb.min.css" />
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php include '../banner/banner.php'; ?>
    <?php include '../function/staffNumText.php' ?>
    <?php

    if ($_SESSION["check"] == 0) {
        $btn = '<a name="" id="" class="btn btn-success" href="detail.php" role="button">เอกสารชี้แจงในการตอบแบบสำรวจ</a>';
    } else {
        $btn = '<a name="" id="" class="btn btn-danger disabled" href="#" role="button">ไม่สามารถทำแบบสำรวจได้</a>';
    }

    ?>
    <div class="container LoginName" style="margin-top:5rem;">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">

                <h4><?= $_SESSION["name"] . $_SESSION["codeLogin"] ?></h4>
                <p>ตำแหน่ง : <?= $_SESSION["position"] ?></p>
                <hr>
                <div class="d-grid gap-2">
                    <?= $btn ?>
                </div>


            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <?php include '../title/footer.php' ?>

</body>

</html>