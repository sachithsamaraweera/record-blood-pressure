<?php

include "connection.php";

if (isset($_POST['add'])) {
    $systolic = $_POST['sys'];
    $diastolic = $_POST['dia'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    $sql = "INSERT INTO pressure (date,time,systolic,diastolic)
 VALUES ('$date','$time','$systolic','$diastolic')";
    $result = mysqli_query($conn, $sql);

    echo "<h3>Record has been added redirecting to the previous page</h3>";
    header("refresh:0.5;url=index.php");
} else {
    echo "OHH you can't come direcly to this page,Somethig went wrong, please go <a href='index.php'>back</a> and come again to this page";
    header("refresh:2;url=index.php");
}
