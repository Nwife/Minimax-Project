

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <header>
        <nav>
           <h2>Minimax</h2>
           <h3>@Amaeze</h3> 
        </nav>
    </header>

    <main>
        <div class="illust">
            <img src="Learning-amico.png" alt="">
        </div>

        <div class="content">
        <h4 class="signin">Sign In As</h4>
            <a href="adminindex.php">admin</a>
            <a href="index.php">student</a>
           
            <div class="forms">
                <h2>Hello student,</h2>
                <form action="includes/studentlogin.inc.php" method="POST">
                    <label for="">Email</label>
                        <input type="email" name="studentemail">
                    
                    <label for=""> Password</label>
                        <input type="password" name="studentpwd">
                    
                    <input type="submit" name="studentlogin-submit" value="Log in">
                </form>
            </div>
        </div>
    </main>
</body>
</html>