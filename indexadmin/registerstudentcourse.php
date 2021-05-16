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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="indexadmin.css">
</head>
<body>
    <?php require('adminnav.php'); ?>
    
    <div class="main">
        <?php require('adminhead.php'); ?>

        <div class="hold">
            <h2>Register a student for a course.</h2>

            <?php
                if(isset($_GET['error'])){
                  if($_GET['error'] == "queryerror"){
                        echo '<p class ="signinerror"> query error, try again.</p>';
                    }
                }
                elseif(isset($_GET['signup'])){
                    if($_GET['signup'] == "success"){
                        echo '<p class ="signupsuccessx"> student|course registered.</p>';
                    }
                }
                
            ?>

            <form class="stucour" action="../includes/registration.inc.php" method="post">
                <div class="students">
                    <label for="stud">Student</label>
                    <select name="students" id="stud">
                        <?php foreach($rowStudent as $student): ?>
                            
                            <option value="<?= $student["nameStudent"] . "+". $student['idStudent']; ?>"><?= $student["nameStudent"];?></option>
                            <!-- <option value="">Bjorn</option>  -->
                            <?php echo $student["idStudent"]; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
                
                <div class="courses">
                <label for="cour">Course</label>
                <select name="course" id="cour">
                    <?php foreach($rowCourse as $course): ?>
                    <option value="<?= $course["courseCode"]. "+" . $course["courseTitle"]; ?>"><?= $course["courseCode"]; ?></option>
                    <!-- <option value="">MAT 422</option>
                    <option value="">PHY 311</option> -->
                    <?php endforeach; ?>
                </select>
                </div>
                
                <input class="submitcour" type="submit" name="registration-submit">
            </form>
        </div>
    </div>
</body>
</html>