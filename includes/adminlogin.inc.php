<?php

if(isset($_POST["admin-submit"])){

    $defaultAdminName = "admin";
    $defaultPassword = "students";

    $adminName = $_POST['adminname'];

    $adminPassword = $_POST['pwd'];

    if(empty($adminName) || empty($adminPassword)){
        header("Location: ../adminindex.php?error=emptyfields");
        exit();
    }
    else if(($adminName != $defaultAdminName) || ($adminPassword != $defaultPassword)){
        header("Location: ../adminindex.php?error=wrongnamepwd");
        exit();
    }
    else if(($adminName == $defaultAdminName) && ($adminPassword == $defaultPassword)){
        header("Location: ../indexadmin/indexadmin.php?success=login");
        exit();
    }

    

}