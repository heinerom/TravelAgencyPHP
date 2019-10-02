<?php
        session_cache_expire(30);
        session_start();

        if(!isset($_SESSION["logged-in"]) || !$_SESSION["logged-in"])
        {
            $_SESSION["returnpage"] = "index.php";
            header("Location: Index.php");
        }
  
?>
