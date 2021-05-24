<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <style>header{background-color: white;}</style>
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
            <h2> Add a student + </h2>

            
            <?php
                if(isset($_GET['error'])){
                    if($_GET['error'] == "emptyfields"){
                        echo '<p class ="signinerror"> fill in all fields.</p>';
                    }
                    elseif($_GET['error'] == "namelessthan"){
                        echo '<p class ="signinerror"> student name should be 3 or more characters. </p>';
                    }
                    elseif($_GET['error'] == "invalidmail"){
                        echo '<p class ="signinerror"> invalid email address.</p>';
                    }
                    elseif($_GET['error'] == "mailtaken"){
                        echo '<p class ="signinerror"> email address already registered.</p>';
                    }
                    elseif($_GET['error'] == "queryerror"){
                        echo '<p class ="signinerror"> query error, try again.</p>';
                    }
                }
                elseif(isset($_GET['signup'])){
                    if($_GET['signup'] == "success"){
                        echo '<p class ="signupsuccess"> student added.</p>';
                    }
                }
                
            ?>

            <div class="forms">
                 
                <form action="../includes/addnewstudent.inc.php" method="post">
                    <label for="text">Name</label>
                        <input type="text" name="stname">
                    
                    <label for="mail">Email</label>
                    <input type="email" name="stmail">
                    
                    <input type="submit" name="addst-submit" value="Add Student">
                </form>
            </div>
        </div>

</body>
</html>