<?php
	// greetings on the nav bar
        date_default_timezone_set('America/Edmonton');
        if (date('G') < 12)
        {
            print ("Good Morning");
        }
        else if (date('G') < 18)
        {
            print ("Good Afternoon");
        }
        else
        {
            print ("Good Evening");
        }
?>