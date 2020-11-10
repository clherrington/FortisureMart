<?php

    //check that post items are set
    if(isset($_POST['cusName']) && isset($_POST['cusEmail']) && isset($_POST['cusMess']))
    {
        //display a modal thanking the customer for their input
        echo "
        <script>        
            alert('Thank you {$_POST['cusName']} for submitting your message. We will review it shortly!');
        </script>";

        //Here is where you would send information to the database

        //finally we clear out the data in post
        unset($_POST['cusName']);
        unset($_POST['cusEmail']);
        unset($_POST['cusMess']);

    }

?>