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
            <h2> Add a student </h2>

            <div class="forms">
                 
                <form action="" method="post">
                    <label for="text">Name</label>
                        <input type="email">
                    
                    <label for="mail">Email</label>
                    <input type="password">
                    
                    <input type="submit" value="Add Student">
                </form>
            </div>
        </div>

</body>
</html>