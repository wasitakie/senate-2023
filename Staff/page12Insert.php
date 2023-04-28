<?php

session_start();
//12//
$page12_array = array("", $_POST["q73"], $_POST["q74"], $_POST["q75"], $_POST["q76"], $_POST["q77"], $_POST["q78"], $_POST["q79"], $_POST["q80"], $_POST["q81"], $_POST["q82"], $_POST["q83"], $_POST["q84"]);

// $sumData  = array('', '0', '10', '25', '50', '75', '100');

// $sumDataAll = ($sumData[$_POST["q58"]] + $sumData[$_POST["q59"]] + $sumData[$_POST["q60"]] + $sumData[$_POST["q61"]] + $sumData[$_POST["q62"]] + $sumData[$_POST["q63"]] + $sumData[$_POST["q64"]] + $sumData[$_POST["q65"]] + $sumData[$_POST["q66"]]) / 9;

// $_SESSION["sumNum10"] = $sumDataAll;
$_SESSION["page12_array"] = $page12_array;

// foreach ($_SESSION["page10_array"] as $page10) {
//     echo $page10 . "<br>";
// }
header("Location: insertData.php");
