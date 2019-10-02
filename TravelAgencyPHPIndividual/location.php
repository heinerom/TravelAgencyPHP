<!Doctype html>
<html>

<head>
    <title>Customer Registration</title>
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
        <h1>Office Location</h1>
    </div>

    <br /><br />
    <p>
        <center><b> Office Location</b><br />
            12345 Travel Way, NW<br />
            Calgary, AB<br />
            Canada T1T M8M<br /></center>
    </p>
    <p>
        <center><b>Office Phone Number</b><br />
            777-777-7777<br /></center>
    </p>
    <br />
<!-- location and contacts -->
   
    <center><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d47713.757089611856!2d-114.08313560991056!3d51.059634032135804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sca!4v1542327605029" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></center>
<!-- google map css inserted -->
   
    <footer>
        <?php
            include_once("footer.php");
        ?>
    </footer>
</body>

</html>
