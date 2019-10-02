<?php
    include("variables.php");

    function dbconnect()
    {
        global $host, $user, $pwd, $dbname;
/*        $host = "localhost";
        $user = "jackie";
        $pwd  = "123456";
        $dbname = "travelexperts";*/
        
        $dbh = mysqli_connect($host, $user, $pwd, $dbname);
        if (!$dbh)
        {
            print("Connection failed, call tech support");
            exit();
        }
        return $dbh;
    }

    
    function insertagent($agent)
    {   
        global $host, $user, $pwd, $dbname;        
        /*$host = "localhost";
        $user = "jackie";
        $pwd  = "123456";
        $dbname = "travelexperts";*/
        
        $sql = "INSERT INTO `agents`(`AgtFirstName`, `AgtMiddleInitial`, `AgtLastName`, `AgtBusPhone`, `AgtEmail`, `AgtPosition`, `AgencyId`) VALUES (?,?,?,?,?,?,?)";
        $dbh = mysqli_connect($host, $user, $pwd, $dbname);
        if (!$dbh)
        {
            print("Connection Error: " . mysqli_connect_errno() . ":" . mysqli_connect_error() . "<br />");
            $fh = fopen("logs.txt", "w");
            fwrite($fh,mysqli_connect_errno(). "\n");
            fwrite($fh,mysqli_connect_error(). "\n");
            fclose($fh);
            exit();
        }
        
        $stmt = mysqli_prepare($dbh, $sql);
        mysqli_stmt_bind_param($stmt, "ssssssi", $_POST["AgtFirstName"], $_POST["AgtMiddleInitialName"], $_POST["AgtLastName"], $_POST["AgtBusPhone"], $_POST["AgtEmail"], $_POST["AgtPosition"], $_POST["AgencyId"]);
        $result = mysqli_stmt_execute($stmt);
        if (!$result)
        {
            print(mysqli_stmt_error($stmt));
            $fh = fopen("logs.txt", "a");
            fwrite($fh,mysqli_stmt_error($stmt));
            fclose($fh);
            mysqli_close($dbh);
            return false;
        }
        mysqli_close($dbh);
        return true;        
    }
?>