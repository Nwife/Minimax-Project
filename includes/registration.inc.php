<?php

if(isset($_POST["registration-submit"])){
    require('dbh.inc.php');

    $id = $_POST["idStudent"];

    $student = $_POST["students"];

    $courseCode = $_POST["course"];

    echo $id;

    // $sql = "INSERT INTO registration(studentID, studentname, courseCode) VALUES ('$id', '$student', '$courseCode')";

    // if(!mysqli_query($conn, $sql)){
    //     header("Location: ../indexadmin/registerstudentcourse.php?error=queryerror");
    //     exit(); 
    // }
    // else{
    //     header("Location: ../indexadmin/registerstudentcourse.php?signup=success");
    //     exit();
    // }

}