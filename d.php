<?php include_once("include/functions.php"); ?>
<?php noPublic('dashboard.php'); ?>
<?php
$ds = DIRECTORY_SEPARATOR;
$file_detail = checkFileOwner(array_keys($_GET)[0]);
if ($_SESSION['id'] == $file_detail[0]) {
    header('Content-type:text/plain');
    header('Content-Disposition: attachment; filename ="' . $file_detail[2] . '"');
    readfile(dirname( __FILE__ ) . $ds . 'uploads' . $ds . $file_detail[1]);
    sleep(1);
    echo '<meta http-equiv="refresh" content="0; url=dashboard.php" />';
    die();
} else {
    'HEY!';
}
?>
