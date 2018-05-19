<?php
function connectDb() {
    $conn = mysqli_connect("localhost","bryantu22","Kappa123123","bryantu22_simplecloud");
    return $conn;
}
?>
