<?php

function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


include "connection.php";

if (isset($_POST['add'])) {
    $systolic = validate($_POST['sys']);
    $diastolic =  validate($_POST['dia']);
    $date =  validate($_POST['date']);
    $time =  validate($_POST['time']);


    if (empty($systolic)) {
        header('location:index.php?error=systolic value is not provided');
        die;
    } else if (empty($diastolic)) {
        header('location:index.php?error=diastolic value is not provided');
        die;
    } else if (empty($date) && empty($time)) {
        $date = date("Y-m-d");
        date_default_timezone_set("Asia/Colombo");
        $time = date("h:i:s");
    } else if (empty($time)) {
        date_default_timezone_set("Asia/Colombo");
        $time = date("h:i:s");
    } else if (empty($date)) {
        $date = date("Y-m-d");
    }

    $sql = "INSERT INTO pressure (date,time,systolic,diastolic)
 VALUES ('$date','$time','$systolic','$diastolic')";
    $result = mysqli_query($conn, $sql);


    header("refresh:0.5;url=index.php?success=Record has been added");
} else {
    echo "OHH you can't come direcly to this page,Somethig went wrong, please go <a href='index.php'>back</a> and come again to this page";
    header("refresh:2;url=index.php");
}
