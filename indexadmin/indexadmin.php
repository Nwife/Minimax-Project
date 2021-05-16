<?php
    require('../includes/dbh.inc.php');

    //write sql to fetch student
    $sql = "SELECT * FROM students";

    //query the sql
    $resultStudent = mysqli_query($conn, $sql);

    //return as associative array
    $rowStudent = mysqli_fetch_all($resultStudent, MYSQLI_ASSOC);

    //free result
    mysqli_free_result($resultStudent);

    //close conection
    mysqli_close($conn);

    // print_r($rowStudent);
?>

<?php
    require('../includes/dbh.inc.php');

    //write sql to fetch student
    $sql = "SELECT * FROM course";

    //query the sql
    $resultCourse = mysqli_query($conn, $sql);

    //return as associative array
    $rowCourse = mysqli_fetch_all($resultCourse, MYSQLI_ASSOC);

    //free result
    mysqli_free_result($resultCourse);

    //close conection
    mysqli_close($conn);

    // print_r($rowCourse);
?>

<?php
    require('../includes/dbh.inc.php');

    //write sql to fetch student
    $sql = "SELECT * FROM registration";

    //query the sql
    $resultReg = mysqli_query($conn, $sql);

    //return as associative array
    $rowReg = mysqli_fetch_all($resultReg, MYSQLI_ASSOC);

    //free result
    mysqli_free_result($resultReg);

    //close conection
    mysqli_close($conn);

    // print_r($rowCourse);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="indexadmin.css">
</head>
<body>
    <?php include('adminnav.php') ?>

    <div class="main">
        <?php require('adminhead.php'); ?>

        <div class="cards">
                <div class="cardbody">
                    <div class="firsthold">
                        <svg width="70" height="70" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 14C6.23858 14 4 16.2386 4 19C4 20.6569 5.34315 22 7 22H17C18.6569 22 20 20.6569 20 19C20 16.2386 17.7614 14 15 14H9Z" fill="#fff"/>
                            <path d="M12 2C9.23858 2 7 4.23858 7 7C7 9.76142 9.23858 12 12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2Z" fill="#fff"/>
                        </svg>
                        <span><?= count($rowStudent); ?></span> 
                    </div>
                    <div class="innertext"><p>STUDENTS</p></div>
                </div>
        
                <div class="cardbody">
                    <div class="firsthold">
                        <svg width="70" height="70" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 14C6.23858 14 4 16.2386 4 19C4 20.6569 5.34315 22 7 22H17C18.6569 22 20 20.6569 20 19C20 16.2386 17.7614 14 15 14H9Z" fill="#fff"/>
                            <path d="M12 2C9.23858 2 7 4.23858 7 7C7 9.76142 9.23858 12 12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2Z" fill="#fff"/>
                        </svg>
                        <span><?= count($rowCourse); ?></span> 
                    </div>
                    <div class="innertext"><p>COURSES</p></div>
                </div>

                <div class="cardbody">
                    <div class="firsthold">
                        <svg width="70" height="70" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 14C6.23858 14 4 16.2386 4 19C4 20.6569 5.34315 22 7 22H17C18.6569 22 20 20.6569 20 19C20 16.2386 17.7614 14 15 14H9Z" fill="#fff"/>
                            <path d="M12 2C9.23858 2 7 4.23858 7 7C7 9.76142 9.23858 12 12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2Z" fill="#fff"/>
                        </svg>
                        <span><?= count($rowReg); ?></span> 
                    </div>
                    <div class="innertext"><p>REGISTRATIONS</p></div>
                </div>
        </div>

    </div>
</body>
</html>