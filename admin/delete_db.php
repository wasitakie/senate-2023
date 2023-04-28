<?php
session_start();
include '../config/connect.php';

if ($_GET["g"] == "sf") {
    $f = $coon->prepare("DELETE FROM insert_data WHERE idcode <> ?  ");
    $f->execute([0]);
    header("location:adminPageAll.php");
}
if ($_GET["g"] == "ss") {
    $f = $coon->prepare("DELETE FROM insert_data WHERE idcode <> ?  ");
    $f->execute([0]);
    header("location:adminPageAll.php");
}
if ($_GET["g"] == "sdf") {
    $f = $coon->prepare("DELETE FROM insert_data WHERE idcode <> ?  ");
    $f->execute([0]);
    header("location:adminPageAll.php");
}
if ($_GET["g"] == "sds") {
    $f = $coon->prepare("DELETE FROM insert_data WHERE idcode <> ?  ");
    $f->execute([0]);
    header("location:adminPageAll.php");
}
