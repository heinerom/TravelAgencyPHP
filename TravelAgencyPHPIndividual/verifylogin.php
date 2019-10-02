<?php
    session_cache_expire(30);
    session_start();
//login function
    if(!isset($_REQUEST["CustUserId"]))
    {
        $_SESSION["message"] = "User Id and Password are required";
        header("Location: Index.php");
    }
    
    $dbh = mysqli_connect("localhost", "jackie", "123456", "travelexperts");
    if (mysqli_connect_errno())
    {
        die("Error: " . mysqli_connect_error());
    }
    $sql = "select CustPassword from customers where CustUserId=?";
    $stmt = mysqli_prepare($dbh, $sql);
    mysqli_stmt_bind_param($stmt, "s", $_REQUEST["CustUserId"]);
    if (!mysqli_stmt_execute($stmt))
    {
        $_SESSION["message"] = "Database lookup failed, call tech support";
        header("Location: Index.php");
    }
    $result = mysqli_stmt_get_result($stmt);
    if (($password = mysqli_fetch_array($result)) && ($password[0] == $_REQUEST["CustPassword"]))
    {
        $_SESSION["logged-in"] = true;
        $returnpage = $_SESSION["returnpage"];
        unset($_SESSION["returnpage"]);
        mysqli_close($dbh);
        header("Location: $returnpage");
    }
    else
    {
        $_SESSION["message"] = "UserID or password is incorrect";
        mysqli_close($dbh);
        header("Location: Index.php");
    }
    
?>
