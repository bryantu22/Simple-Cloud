<?php
session_start();
error_reporting(0);
include_once("include/db.php");

function noUser() {
    if (isset($_SESSION['id'])) {
		echo '<meta http-equiv="refresh" content="0; url=dashboard.php" />';
		die();
	}
}

function noPublic($source) {
    if (isset($_SESSION['id'])) {} else {
		echo '<meta http-equiv="refresh" content="0; url=login.php?redirect=' . $source . '" />';
		die();
	}
}

function handleRegister($username, $email, $password) {
    $options = ['cost' => 12];
    $password = password_hash($password, PASSWORD_BCRYPT, $options);
    $conn = connectDb();
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $query = "INSERT INTO `users` (`username`, `email`, `password`) VALUES ('{$username}', '{$email}', '{$password}')";
    if (mysqli_query($conn, $query)) {
        echo '<meta http-equiv="refresh" content="0; url=login.php?registered" />';
        die();
    }
}

function handleLogin($username, $password, $redirect) {
    $conn = connectDb();
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $query = "SELECT * FROM users WHERE `username` = '{$username}'";
    $result = mysqli_query($conn, $query);
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            $_SESSION['id'] = $row['id'];
			$_SESSION['username'] = $row['username'];
            echo '<meta http-equiv="refresh" content="0; url=dashboard.php?' . $redirect . '" />';
            die();
        }
    } else {
        echo mysqli_error($conn);
    }
}

function getFiles($userid, $offset) {
    $conn = connectDb();
    $query = "SELECT filename, shortlink, size FROM uploads WHERE `userid` = '{$userid}' AND `deleted` = 0 ORDER BY filename ASC, time ASC LIMIT {$offset}, 10";
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_all($result);
}

function getBinFiles($userid, $offset) {
    $conn = connectDb();
    $query = "SELECT filename, shortlink, size FROM uploads WHERE `userid` = '{$userid}' AND `deleted` = 1 ORDER BY filename ASC, time ASC LIMIT {$offset}, 10";
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_all($result);
}

function fileTotal($userid) {
    $conn = connectDb();
    $query = "SELECT COUNT(*) FROM uploads WHERE `userid` = '{$userid}' AND `deleted` = 0";
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_array($result, MYSQLI_NUM);
}

function trashFileTotal($userid) {
    $conn = connectDb();
    $query = "SELECT COUNT(*) FROM uploads WHERE `userid` = '{$userid}' AND `deleted` = 1";
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_array($result, MYSQLI_NUM);
}

function allFileSize($userid) {
    $conn = connectDb();
    $query = "SELECT SUM(size) FROM uploads WHERE `userid` = '{$userid}'";
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_array($result, MYSQLI_NUM);
}

function getUserPlan($userid) {
    $conn = connectDb();
    $query = "SELECT name, storagelimit, limitperfile FROM users AS user INNER JOIN plan ON user.planid = plan.id WHERE user.id = '{$userid}'";
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_array($result, MYSQLI_NUM);
}

function humanFilesize($bytes, $decimals = 2) {
    $size = array('B','kB','MB','GB','TB','PB','EB','ZB','YB');
    $factor = floor((strlen($bytes) - 1) / 3);
    return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$size[$factor];
}

function checkFileOwner($shortlink) {
    $conn = connectDb();
    $query = "SELECT userid, servername, filename FROM uploads WHERE `shortlink` = '{$shortlink}'";
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_array($result, MYSQLI_NUM);
}

function trashFile($server_name) {
    $conn = connectDb();
    $query = "UPDATE uploads SET `deleted` = 1 WHERE `servername` = '{$server_name}'";
    mysqli_query($conn, $query);
    echo '<meta http-equiv="refresh" content="0; url=dashboard.php?trashed" />';
    die();
}

function deleteFile($server_name) {
    $ds = DIRECTORY_SEPARATOR;
    unlink(dirname(dirname( __FILE__ )) . $ds . 'uploads' . $ds . $server_name);
    $conn = connectDb();
    $query = "DELETE FROM uploads WHERE `servername` = '{$server_name}'";
    mysqli_query($conn, $query);
    echo '<meta http-equiv="refresh" content="0; url=dashboard.php?deleted" />';
    die();
}

function recoverFile($server_name) {
    $conn = connectDb();
    $query = "UPDATE uploads SET `deleted` = 0 WHERE `servername` = '{$server_name}'";
    mysqli_query($conn, $query);
    echo '<meta http-equiv="refresh" content="0; url=dashboard.php?trashed" />';
    die();
}

function getSettings() {
    $conn = connectDb();
    $query = "SELECT setkey, setvalue FROM `settings`";
    $result = mysqli_fetch_all(mysqli_query($conn, $query));
    $settings = array();
    foreach ($result as $setting) {
        $settings[$setting['0']] = $setting['1'];
    }
    return $settings;
}
?>
