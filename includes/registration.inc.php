<?php

if(isset($_POST["registration-submit"])){
    require('dbh.inc.php');

    $id = explode('+', $_POST["students"])[1]; //$_POST["students"];
    $name = explode('+', $_POST["students"])[0];
    //$student = $_POST["students"];

    $courseCode = explode('+', $_POST["course"])[0];
    $courseTitle = explode('+', $_POST["course"])[1];

    // echo $id;
    // echo $name;
    // echo $courseCode;
    // echo $courseTitle;

    $sql = "INSERT INTO registration(studentID, studentname, courseCode, courseTitle) VALUES ('$id', '$name', '$courseCode', '$courseTitle')";

    if(!mysqli_query($conn, $sql)){
        header("Location: ../indexadmin/registerstudentcourse.php?error=queryerror");
        exit(); 
    }
    else{
        header("Location: ../indexadmin/registerstudentcourse.php?signup=success");
        exit();
    }

}