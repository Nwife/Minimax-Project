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
            <h2> Create a course +</h2>

            <div class="forms">
                 
                <form action="../includes/addcourse.inc.php" method="POST">
                    <label for="text">Course Code</label>
                        <input type="text" name="code">
                    
                    <label for="text">Course Title</label>
                    <input type="text" name="title">
                    
                    <input type="submit" name="addcourse-submit" value="Add Course">
                </form>
            </div>
        </div>

</body>
</html>