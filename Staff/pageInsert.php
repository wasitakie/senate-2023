<?php
session_start();
include '../config/connect.php';
// 29//

// if ($_POST["a3"] == 1) {
//     $a4 = $_POST["a4"];
//     $a4t = $_POST["a4t"];
//     $a5 = "0";
//     $a5t = "";
// }
// if ($_POST["a3"] == 2) {
//     $a5 = $_POST["a5"];
//     $a5t = $_POST["a5t"];
//     $a4 = "0";
//     $a4t = "";
// }

// echo "ff->" . $_POST["a3"] . $a4 . $a4t . $a5 . $a5t;
//echo $_POST["q2_5_10"];


$page_array = array("", $_POST["sex"], $_POST["age"], $_POST["q2-3"], $_POST["q2-4"], $_POST["q2_5_1"], $_POST["q2_5_2"], $_POST["q2_5_3"], $_POST["q2_5_4"], $_POST["q2_5_5"], $_POST["q2_5_6"], $_POST["q2_5_7"], $_POST["q2_5_8"], $_POST["q2_5_9"], $_POST["q2_5_10"], $_POST["q2-5t"], $_POST["q2-6"], $_POST["q2-6t"], $_POST["q2-7"], $_POST["q2-8"], $_POST["q2-9"], $_POST["q2-10"], $_POST["q2-10t"], $_POST["q2-11"], $_POST["q2-11t"], $_POST["q2-12"], $_POST["q2-12t"], $_POST["q2-13"], $_POST["q2-14"], $_POST["q2-15"], $_POST["q2-16"]);

//echo $page_array[13];

// echo $_POST["sex"];
// echo $_POST["age"];
$_SESSION["page_array"] = $page_array;
$_SESSION["page_part1"] = $page_part1;



// foreach ($_SESSION["page1_array"] as $page1) {
//     echo $page1 . "<br>";
// }
header("Location: page1.php");
//header("Location: insertData.php");
