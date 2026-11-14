<?php
    //Set time zone to AZ
    date_default_timezone_set('America/Phoenix');
    // Adding countdown to the next launch to Mars
    $departure_date = "2026-12-15 12:00";
    // convert departure data to php secs
    $departure_time = strtotime($departure_date);

    // Gets current number of secs since 1/1/1970
    $now = time();

    // variable to hold the difference in time from now to departure
    $seconds_left = $departure_time - $now;

    //Checking variables
    // echo "<br>Departure Time: " . $departure_time;
    // echo "<br>Now: " . $now;
    // echo "<br>Seconds Left: " . $seconds_left;

    // Set up a constant to represent 60 seconds in a minute
    $MINUTE = 60;
    // Set up a constant to represent 3600 seconds in a hour
    $HOUR = 3600;
    // Set up a constant to represent 86400 seconds in a day
    $DAY = 86400;

    // Determine how many days are left before take off
    $days = floor($seconds_left / $DAY);
    // Determine how many hours are left before take off
    $hours = floor(($seconds_left % $DAY) / $HOUR);
    // Determine how many minutes are left before take off
    $minutes = floor(($seconds_left % $HOUR) / $MINUTE);

    // echo "<br>Days: " . $days;
    // echo "<br>Hours: " . $hours;
    // echo "<br>Minutes: " . $minutes;

    // Define the message variable
    $message = "";

    if ($seconds_left < 0){
        $message = "Oops, you missed the launch!";
    }
    elseif ($days > 30){
        $message = "Plenty of time before take off!";
    }
    elseif ($days > 14){
        $message = "Still have some time before take off!";
    }
    elseif ($days > 7){
        $message = "Pack your bags";
    }
    else{
        $message = "Head to the launch pad!";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mars Countdown</title>
    <!-- link to css file -->
    <link rel="stylesheet" href="mars.css">
</head>
<body>
    <header>
        <h1>Mars Flight Countdown</h1>
        <nav>
            <ul>
                <li><a href="mars_home.php">Home</a></li>
                <li><a href="mars_countdown.php">Flight Countdown</a></li>
                <li><a href="mars_app.php">Pilot Application</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Our First Mars Tour is Getting Closer!</h2>
        <p class="countdownPage"></p>        
        <!-- Display the message we built using php in the html portion of the page -->
        <p class="countdownPage"><?php echo $message; ?></p>
        <p class="countdownPage">Time of Depature: </p>
        <p class="countdownPageTime"><span><?php echo $days; ?> days
        <?php echo $hours; ?> hours
        <?php echo $minutes; ?> minutes</span></p>
        <p class="countdownPage">Next Departure: <?php echo date("F j, Y \a\\t g:i A", $departure_time) ?></p>
        <h3 class="home">The Mission Ahead:</h3>
        <p>Our pilots and crew are preparing for a journey beyond Earth. From training and safety planning to passenger preparation, every stop brings the mission closer.</p>
        <h3 class="home">Want to be part of the team?</h2>
        <a href="mars_app.php" class="applyButton">Apply Now</a>
    </main>
    <script>
        // Reload page every so often to recalculate time left
        setTimeout(() => {
            location.reload();
        }, 60000); //60000 is 1 minute (1000 millseconds in a sec)
    </script>
    <footer>
        <p>Red Frontier Expeditions - Your Next Destination is Another Planet</p>
    </footer>
</body>
</html>