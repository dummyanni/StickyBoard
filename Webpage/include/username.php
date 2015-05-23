<?php
session_start();
require("db_connection.php");

$sessUserId = $_SESSION['UserID'];

$checkStmt = $conn->prepare("SELECT Name FROM Users WHERE ID = :uid");
$checkStmt -> execute(array('uid' => $sessUserId));
$session = $checkStmt->fetch(PDO::FETCH_ASSOC);

if($_SESSION['login'] && !empty($session)) {
    echo strtoupper($session["Name"]);
    echo '<ul>';
    echo '<li><a href="/account.php">PROFILE</a></li>';
    echo '<li><a href="/settings.php">SETTINGS</a></li>';
    echo '<li><a href="/stats.php" id="stats">STATISTICS</a></li>';
    echo '<hr>';
    echo '<li><a href="/include/logout.php" id="logoutBtn">LOG OUT</a></li>';
    echo '</ul>';
}
