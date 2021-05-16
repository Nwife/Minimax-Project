<?php session_start(); ?>

<?php

require('includes/dbh.inc.php');
$id = $_SESSION['id'];
//write sql to fetch student
$sql = "SELECT * FROM registration WHERE studentID = $id";

//query the sql
$resultReg = mysqli_query($conn, $sql);

//return as associative array
$rowReg = mysqli_fetch_all($resultReg, MYSQLI_ASSOC);

//free result
mysqli_free_result($resultReg);

//close conection
mysqli_close($conn);

// print_r($rowReg);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <link rel="stylesheet" href="studentindex.css">
</head>
<body>
    <header>
        <nav>
           <h2>Miniso</h2>
           
           <div class="formbox">
               <div class="formflex">
               <h3>Hello, <?= $_SESSION["name"]; ?></h3> 
                <form method="POST" action="includes/logout.inc.php" class="logoutform">
                        <input name="logout" type="submit" value="Logout">
                </form>
                </div>
           </div>
        </nav>
    </header>

    <main>
        <div class="write">
            <h2>Your Registered Courses:</h2>
        </div>
        <table>
            <tbody>
                <tr>
                    <th>S/N</th>
                    <th>Course Code</th>
                    <th>Course Name</th>
                </tr>
                <?php foreach($rowReg as $reg): ?>
                    <tr>
                        <td>#</td>
                        <td><?= $reg["courseCode"]; ?></td>
                        <td><?= $reg["courseTitle"]; ?></td>     
                    </tr>
                <?php endforeach; ?>
                <!-- <tr>
                    <td>1</td>
                    <td>CSC 422</td>
                    <td>Digital circuits & signals</td>
                </tr>
            </tbody>
        </table>
    </main>
</body>
</html>