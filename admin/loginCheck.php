<?php
session_start();
include '../config/connect.php';


try {
    $admin = $coon->prepare("SELECT* FROM admin WHERE user = ? AND pass = ? ");
    $admin->execute([$_POST["user"], $_POST["pass"]]);
    $row = $admin->rowCount();
    if ($row == 1) {
        $r = $admin->fetch(PDO::FETCH_ASSOC);
        $_SESSION["admin"] = $r["check"];
        header("location:adminPageAll.php");
    } else {
        header("location:index.php");
    }
} catch (Exception $e) {
    echo "on insert " . $e->getMessage();
}
