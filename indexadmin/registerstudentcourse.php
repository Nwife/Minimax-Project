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

            <form class="stucour" action="" method="post">
                <div class="students">
                <label for="stud">Student</label>
                <select name="students" id="stud">
                    <option value="">Ragnar</option>
                    <option value="">Ivar</option>
                    <option value="">Bjorn</option>
                </select>
                </div>
                
                <div class="courses">
                <label for="cour">Course</label>
                <select name="course" id="cour">
                    <option value="">CSC 411</option>
                    <option value="">MAT 422</option>
                    <option value="">PHY 311</option>
                </select>
                </div>

                <input class="submitcour" type="submit">
            </form>
        </div>
    </div>
</body>
</html>