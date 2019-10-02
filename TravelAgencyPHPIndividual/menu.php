<nav class="navbar navbar-expand-sm bg-secondary navbar-dark sticky-top">
   
    <a class="navbar-brand" style="color:white;">
    <?php include_once("greeting.php")
    ?></a>
 <!-- left side link -->   
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="Index.php"><i class="fa fa-fw fa-home"></i>Home</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="gallery.php"><i class="fas fa-images"></i> Gallery</a>
        </li>
        <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown"><i class="far fa-comments"></i> Contact us </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="location.php"><i class="fas fa-map-pin"></i> Office location</a>
                <a class="dropdown-item" href="contactus.php"><i class="fas fa-users"></i> Meet Our Team</a>
            </div>

        </li>
    </ul>
<!-- right side link-->
    <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="register.php"><i class="fas fa-user-plus"></i> Register</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><i class="fas fa-user"></i> Login</a>
        </li>
    </ul>
</nav>
<!-- login part below-->
<div id="id01" class="modal">

    <form class="modal-content animate" action="verifylogin.php">
        <div class="imgcontainer1">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="q2.jpg" alt="" class="avatar">
        </div>

        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="CustUserId" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="CustPassword" required>
        <p style="color:red">
        <?php
    //login php part
        if(isset($_SESSION["message"])) 
        {
            print($_SESSION["message"]);
            $_SESSION["message"] = "";
        }       
        ?>
        
    </p>
            <button class="loginButtonSpacing" type="submit" value="Log In" onclick="">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>

        </div>
    </form>

</div>


<script>
    // Get the login modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
            modal.style.position = "center";
        }
    }

</script>
