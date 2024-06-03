<?php
include 'db.php';

$sql = "SELECT visits FROM page_visits WHERE id=1";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

echo $row['visits'];

$conn->close();
