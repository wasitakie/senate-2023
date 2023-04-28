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
    <div class="container" style="margin-top:2rem;">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <p><strong><span style="font-size:18px; text-align: center">แบบสำรวจความผูกพัน ความพึงพอใจ และความสุข</p>
                <hr>

                <form method="post" action="loginCheck.php">

                    <div class="loginFrom">
                        <div class="mb-3">
                            <label for="" class="form-label">วุฒิสภา</label>
                            <input type="text" class="form-control" name="user" id="" aria-describedby="helpId" placeholder="...รหัสผ่านของท่าน">
                        </div>
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
                    </div>

                </form>

            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <?php include '../title/footer.php' ?>

</body>

</html>