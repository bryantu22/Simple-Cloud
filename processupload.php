<?php include_once("include/functions.php"); ?>
<?php noPublic('dashboard.php'); ?>
<?php include_once("include/db.php"); ?>
<?php
session_start();
$ds = DIRECTORY_SEPARATOR;
if (!empty($_FILES)) {
    $temp_file = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $target_path = dirname( __FILE__ ) . $ds . 'uploads' . $ds;
    $userid = $_SESSION['id'];
    $time = microtime(true) * 10000;
    $original_name = $_FILES['file']['name'];
    $modified_name = "{$username} {$time} {$original_name}";
    $storage_name = hash('sha384', $modified_name, false);
    $short_link = hash('crc32', $modified_name, false);
    $target_file = "{$target_path}{$storage_name}";
    move_uploaded_file($temp_file,$target_file);
    $conn = connectDb();
    $query = "INSERT INTO `uploads` (`userid`, `time`, `filename`, `servername`, `shortlink`, `size`) VALUES ('{$userid}', '{$time}', '{$original_name}', '{$storage_name}', '{$short_link}', '{$file_size}')";
    mysqli_query($conn, $query);
}
?>
