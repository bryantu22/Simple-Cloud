<?php
session_start();
session_unset();
session_destroy();
echo '<meta http-equiv="refresh" content="0; url=index.php" />';
die();
?>
