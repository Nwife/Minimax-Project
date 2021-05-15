<?php

if(isset($_POST["addcourse-submit"])){
    require('dbh.inc.php');

    $code = strtoupper($_POST["code"]); 

    $title = strtoupper($_POST["title"]);
    
    if(empty($code) || empty($title)){
        header("Location: ../indexadmin/createcourse.php?error=emptyfields");
        exit();
    }
    else{
        $sql = "INSERT INTO course(courseCode, courseTitle) VALUES ('$code', '$title')";

        if(!mysqli_query($conn, $sql)){
            header("Location: ../indexadmin/createcourse.php?error=queryerror");
            exit(); 
        }
        else{
            header("Location: ../indexadmin/createcourse.php?course=success");
            exit();
        }
    }
}
else{
    header("Location: ../indexadmin/createcourse.php");
}




