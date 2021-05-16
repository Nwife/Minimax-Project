<?php session_start(); ?>

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
                    <th>Course Title</th>
                    <th>Course Name</th>
                </tr>

                <tr>
                    <td>1</td>
                    <td>CSC 422</td>
                    <td>Digital circuits & signals</td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>CSC 419</td>
                    <td>Software Architecture</td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>CSC 419</td>
                    <td>Software Architecture</td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>CSC 419</td>
                    <td>Software Architecture</td>
                </tr>
            </tbody>
        </table>
    </main>
</body>
</html>