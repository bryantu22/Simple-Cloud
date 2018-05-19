<?php include_once("include/functions.php"); ?>
<?php noPublic('dashboard.php');?>
<?php
$plan = getUserPlan($_SESSION['id']);
$user_limit = $plan[1]/1048576;
echo '<div class="progress-bar" role="progressbar" style="width: ' . allFileSize($_SESSION['id'])[0] / 10485.76 / $user_limit . '%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>';
?>
