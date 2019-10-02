<!DOCTYPE html>
<html>

<head>
    <title>Contact us</title>
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
        <h1>Meet the team</h1>
    </div>
    <br />
    <p id="p1">Introduction O(∩_∩)O<br />
        Fancy agency is a young team.<br />
        We are looking for providing best service to customers who want a wonderful trip.<br />
        We are found in 2016 and our goal is to make every customer satisfied.<br />
        Feel free to contact any of us!<br />
    </p>
    <br />
    <!-- team members -->
    <div class="row">
        <div class="column">
            <div class="card">
                <img src="q8.jpg" alt="abby" style="width:80%; margin:auto;">
                <div class="container">
                    <h2>Abby Joe</h2>
                    <p class="title">Founder</p>
                    <p>Active and patient leader. I am the one who is most reliable in the team.</p>
                    <p>abby@fancyagency.com</p>
                    <p>888-888-8888</p>
                    <p><button class="button"><a class="link" href="mailto:abby@fancyagency.com" target="_top">Contact</a></button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="q9.jpg" alt="micky" style="width:80%; margin:auto;">
                <div class="container">
                    <h2>Micky Ben</h2>
                    <p class="title">Agent</p>
                    <p>Salt and pepper squid with sweet and sour sauce is my favourite! </p>
                    <p>micky@fancyagency.com</p>
                    <p>888-888-8881</p>
                    <p><button class="button"><a class="link" href="mailto:micky@fancyagency.com" target="_top">Contact</a></button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="q4.jpg" alt="ana" style="width:80%; margin:auto;">
                <div class="container">
                    <h2>Ana Green</h2>
                    <p class="title">Agent</p>
                    <p>Tomorrow is another day and I always be there with my customers.</p>
                    <p>ana@fancyagency.com</p>
                    <p>888-888-8882</p>
                    <p><button class="button"><a class="link" href="mailto:ana@fancyagency.com" target="_top">Contact</a></button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="q7.jpg" alt="bacon" style="width:80%; margin:auto;">
                <div class="container">
                    <h2>Bacon Pepper</h2>
                    <p class="title">Agent</p>
                    <p>Boiled egg with pepper tomato soup makes a delicious meal on flight!</p>
                    <p>bacon@fancyagency.com</p>
                    <p>888-888-8883</p>
                    <p><button class="button"><a class="link" href="mailto:bacon@fancyagency.com" target="_top">Contact</a></button></p>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <?php
                include_once("footer.php");
            ?>
    </footer>
</body>

</html>
