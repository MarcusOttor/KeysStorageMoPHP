<?php

$servername = "mysql.hostinger.com";
$user = "u504343144_usr"; // phpmyadmin user
$pass = "123456"; // phpmyadmin pass
$dbname = "u504343144_db"; // change at host
$tablename = "keystore"; // empty table

$package = $_POST['package'];
$type = $_POST['type'];

if (isset($package) && isset($type)) {
    $con = new mysqli($servername, $user, $pass, $dbname);
    if ($con->connect_error) {
        echo json_encode("Error");
    } else {
        $sql = "SELECT * FROM $tablename WHERE package = '$package'";
        $result = $con->query($sql);
        while ($row = $result->fetch_assoc()) {
            if ($type == 1) {
                echo json_encode($row['interstitial']); // appnext
            } else if ($type == 2) {
                echo json_encode($row['video']); // appnext
            } else if ($type == 3) {
                echo json_encode($row['nativex']);
            } else if ($type == 4) {
                echo json_encode($row['adcolony_zone']);
            } else if ($type == 5) {
                echo json_encode($row['adcolony_app']);
            } else if ($type == 6) {
                echo json_encode($row['offertoro_app']);
            } else if ($type == 7) {
                echo json_encode($row['offertoro_secret']);
            } else if ($type == 8) {
                echo json_encode($row['vungle']);
            } else if ($type == 9) {
                echo json_encode($row['banner_appnext']);
            } else if ($type == 10) {
                echo json_encode($row['chartboost_app']);
            } else if ($type == 11) {
                echo json_encode($row['chartboost_signature']);
            } else if ($type == 12) {
                echo json_encode($row['unity']);
            } else if ($type == 13) {
                echo json_decode($row['admob_app']);
            } else if ($type == 14) {
                echo json_decode($row['admob_banner']);
            } else if ($type == 15) {
                echo json_decode($row['admob_interstitial']);
            } else if ($type == 16) {
                echo json_decode($row['admob_video']);
            }
            exit();
        }
        $con->close();
    }
} else {
    echo json_encode("Error");
}
?>