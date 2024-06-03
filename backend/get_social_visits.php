<?php
include 'db.php';

$platform = $_GET['platform'];
$sql = "SELECT visits FROM social_visits WHERE platform='$platform'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

echo $row['visits'];

$conn->close();
