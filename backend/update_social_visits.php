<?php
include 'db.php';

$platform = $_GET['platform'];
$sql = "UPDATE social_visits SET visits = visits + 1 WHERE platform='$platform'";
$conn->query($sql);

$conn->close();