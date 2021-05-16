<?php
if(isset($_POST["studentlogin-submit"])){

    require('dbh.inc.php');

    $email = $_POST["studentemail"];

    $password = $_POST["studentpwd"];

    if(empty($email) || empty($password)){
        header("Location: ../index.php?error=emptyfields");
        exit();
    }
    else{
        $sql = "SELECT * FROM students WHERE emailStudent = '$email'";

        $result = mysqli_query($conn, $sql);

        // $count = mysqli_num_rows($result);
        if($row = mysqli_fetch_assoc($result)){
            // $row = mysqli_fetch_assoc($result);
            $pwdCheck = password_verify($password, $row["pwdStudent"]);
                if($pwdCheck === false){
                    header("Location: ../index.php?error=incorrectPassword");
                    exit();
                }
                elseif($pwdCheck === true){
                    session_start();
                    $_SESSION['id'] = $row["idStudent"];
                    $_SESSION['name'] = $row["nameStudent"];
                    $_SESSION['email'] = $row["emailStudent"];

                    
                    header("Location: ../studentindex.php?login=success");
                    exit();
                }
                else {
                    header("Location: ../index.php?error=incorrectPassword");
                    exit();
                }
            }else{
                header("Location: ../index.php?error=nostudentfound");
                exit();
            }

        }
         
    }

else{
    header("Location: ../index.php");
}
