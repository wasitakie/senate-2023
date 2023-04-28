<?php
session_start();
include '../config/connect.php';

$stmt = $coon->prepare("SELECT* FROM position WHERE po_id = ? ");
$stmt->execute([$_POST["user"]]);

$row = $stmt->rowCount();

if ($row == 0) {
    header("location: index.php");
} else {
    $r = $stmt->fetch(PDO::FETCH_ASSOC);
    $_SESSION["codeLogin"] = $r["po_code"];
    $_SESSION["name"] = $r["po_name"];
    $_SESSION["position"] = $r["po_position"];
    $_SESSION["check"] = $r["po_check"];
    header("location: checkUserLogin.php");
}
