<?php

if(isset($_POST["addst-submit"])){
    require('dbh.inc.php');

    $name = $_POST["stname"];

    $email = $_POST["stmail"];
    
    if(empty($name) || empty($email)){
        header("Location: ../indexadmin/addstudent.php?error=emptyfields");
        exit();
    }
    elseif(strlen($name) < 3){
        header("Location: ../indexadmin/addstudent.php?error=namelessthan");
        exit();
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../indexadmin/addstudent.php?error=invalidmail");
        exit();
    }
    else{
        $sql = "SELECT emailStudent FROM students WHERE emailStudent = $email";

        $result = mysqli_query($conn, $sql);

        $row = mysqli_num_rows($result);

        if($row > 0){
            header("Location: ../indexadmin/addstudent.php?error=mailtaken");
            exit(); 
        }
        else {
            $pwd= strtolower(substr($name, 0, 3)) ;
            $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
            $sql = "INSERT INTO students(nameStudent, emailStudent, pwdStudent) VALUES ('$name', '$email', '$hashedPwd')";

            if(!mysqli_query($conn, $sql)){
                header("Location: ../indexadmin/addstudent.php?error=queryerror");
                exit(); 
            }
            else{
            
                header("Location: ../indexadmin/addstudent.php?signup=success");
                exit();
            }
        }

            }
        }
        else{
            header("Location: ../indexadmin/addstudent.php");
        }




