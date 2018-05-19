<?php include_once("include/functions.php"); ?>
<?php noPublic('dashboard.php');?>
<?php
echo round(allFileSize($_SESSION['id'])[0]/1048576);
?>
