<?php include_once("include/functions.php"); ?>
<?php noPublic('dashboard.php'); ?>
<?php
if (isset($_POST['file'])) {
    $file_owner = checkFileOwner($_POST['file'])[0];
    $server_name = checkFileOwner($_POST['file'])[1];
    if ($_SESSION['id'] == $file_owner) {
        deleteFile($server_name);
    }
}
?>
