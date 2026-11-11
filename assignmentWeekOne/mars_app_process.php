<?php
    // see if a form was posted to this page
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        // if true then we can gather form inputs and do something with them
        echo "Name - " . $_POST["txtName"] . "<br>" . "<br>";
        echo "Email - " . $_POST["email"] . "<br>" . "<br>";
        echo "Years of piloting experience - " . $_POST["flightExperience"] . "<br>" . "<br>";
        echo "Hours of flight -  " . $_POST["flightHours"] . "<br>" . "<br>";
        echo "Types of aircrafts and spacecrafts - " . $_POST["flightStory"] . "<br>" . "<br>";
        echo "Describe a time you handled an unexpected situation during a flight: ".$_POST["flightSituation"] . "<br>" . "<br>";
        echo "Languages they can speak - " . $_POST["flightLang"] . "<br>" . "<br>";
        echo "Why do you want to pilot a tour to Mars: " . $_POST["marsReason"] . "<br>" . "<br>";
        echo "Willing to complete training -  " . $_POST["training"] . "<br>" . "<br>";
        echo "Start date - " . $_POST["startDate"] . "<br>" . "<br>";
    }
    else{
        echo "You can't access this page directly";
    }
?>