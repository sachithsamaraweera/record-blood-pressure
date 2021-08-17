<?php

include 'connection.php';

$sql = "SELECT * FROM pressure order by date,time DESC";
$result = mysqli_query($conn, $sql);
