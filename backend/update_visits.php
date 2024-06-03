<?php
include 'db.php';

$sql = "UPDATE page_visits SET visits = visits + 1 WHERE id=1";
$conn->query($sql);

$conn->close();
