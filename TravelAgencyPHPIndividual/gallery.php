<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="stylesheet.css" />
    <?php
        include_once("header.php");
    ?>
</head>

<body>
    <?php
        include("menu.php");
    ?>
    <br />
    <div class="hh3">
        <h1>Gallery</h1>
    </div>
    <br />
    <!-- gallery pictures -->
    <div class="clearfix">
        <div class="img-container">
            <img src="111.jpg" alt="" style="width:100%"></div>
        <div class="img-container">
            <img src="122.jpg" alt="" style="width:100%"></div>
        <div class="img-container">
            <img src="133.jpg" alt="" style="width:100%"></div>
    </div>

    <div class="clearfix">
        <div class="img-container">
            <img src="144.jpg" alt="" style="width:100%"></div>
        <div class="img-container">
            <img src="155.jpg" alt="" style="width:100%"></div>
        <div class="img-container">
            <img src="177.jpg" alt="" style="width:100%"></div>
    </div>
    <div class="clearfix">
        <div class="img-container">
            <img src="308.jpg" alt="" style="width:100%"></div>
        <div class="img-container">
            <img src="201.jpg" alt="" style="width:100%"></div>
        <div class="img-container">
            <img src="300.jpg" alt="" style="width:100%"></div>
    </div>
    <footer>
        <?php
            include_once("footer.php");
        ?>
    </footer>

</body>

</html>
