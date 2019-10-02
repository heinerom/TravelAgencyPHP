<!Doctype html>
<html>

<head>
    <title>Index</title>
    <link rel="stylesheet" href="stylesheet.css" />
    <?php
        include_once("header.php");
    
        session_cache_expire(30);
        session_start();
        $_SESSION["returnpage"] = "Index.php";
    ?>
    <script src="emailpostal.js"></script>
    <!-- header part php -->
</head>

<body>
    <br />
    <div class="hh">
        <h1><img src="WORLD.png" alt="earth" width="65px" height="65px"><b>Welcome to Travel Experts</b></h1>
    </div>

    <?php
        include("menu.php");
    ?>
    
    <!-- nav bar menu and the title -->
    <div class="slides">
    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="3"></li>
            <li data-target="#demo" data-slide-to="4"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="301.jpg" alt="" width="1100" height="500" onclick="openWin()">
            </div>

            <div class="carousel-item">
                <img src="302.jpg" alt="" width="1100" height="500" onclick="openWin()">
            </div>
            <div class="carousel-item">
                <img src="303.jpg" alt="" width="1100" height="500" onclick="openWin()">
            </div>
            <div class="carousel-item">
                <img src="304.jpg" alt="" width="1100" height="500" onclick="openWin()">
            </div>
            <div class="carousel-item">
                <img src="305.jpg" alt="" width="1100" height="500" onclick="openWin()">
            </div>
            <div class="carousel-item">
                <img src="306.jpg" alt="" width="1100" height="500" onclick="openWin()">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    </div>


    <footer>
        <?php
                include_once("footer.php");
        ?>
    </footer>
</body>

</html>
