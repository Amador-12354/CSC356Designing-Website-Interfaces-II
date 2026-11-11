<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mars Pilot Application</title>
    <!-- link to css file -->
    <link rel="stylesheet" href="mars.css">

    <!-- link to JS file which handle form validation -->
     <script src="mars.js"></script>
</head>
<body>
    <header>
        <h1>Mars Tour Pilot Application</h1>
        <nav>
            <ul>
                <li><a href="mars_home.php">Home</a></li>
                <li><a href="mars_app.php">Pilot Application</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h3>Who Are You?</h3>
        <p>Tell us about your experience, skills, and interest in joining our flight crew. Fill out this application to be considered for becoming part of our team. Required answers must be completed before you can submit.</p>

        <form name="frmApp" id="frmApp" method="post" action="mars_app_process.php" onsubmit="return validateForm();">
            <!-- Need at leadt 5 elements -->
             <div id="divMessageName" class="divMessage"></div>
             <div>
                <label for="txtName">Full Name: </label>
                <input type="text" id="txtName" name="txtName" required>
             </div>
             <div>
                <label for="email">Email: </label>
                <input type="email" id="email" name="email" required>
             </div>
             <div>
                <label for="flightExperience">How many years of piloting experience do you have? </label>
                <input type="number" id="flightExperience" name="flightExperience" required>
             </div>
             <div>
                <label for="flightHours">How many total flights hours have you logged?: </label>
                <input type="number" id="flightHours" name="flightHours" required>
             </div>
             <div>
                <label for="flightStory">What types of aircraft or spacecraft are you qualified to fly? </label>
                <textarea id="flightStory" name="flightStory" rows=4 required></textarea>
             </div>
             <div id="divMessageSituation" class="divMessage"></div>
             <div>
                <label for="flightSituation">Describe a time you handled an unexpected situation during a flight. </label>
                <textarea id="flightSituation" name="flightSituation" rows=5 required></textarea>
             </div>
             <div>
                <label for="flightLang">What languages can you use to communicate in an emergency? </label>
                <input type="text" id="flightLang" name="flightLang" required>
             </div>
             <div id="divMessageReason" class="divMessage"></div>
             <div>
                <label for="marsReason">Why do you want to pilot a tour to Mars? </label>
                <textarea id="marsReason" name="marsReason" rows=5 required></textarea>
             </div>
             <div id="trainingMessage" class="divMessage"></div>
             <fieldset>
                <legend>Are you willing to complete six months of mission training?</legend>
                <label>
                    <input type="radio" id="trainingYes" name="training" value="yes" required> Yes
                </label>
                <label>
                    <input type="radio" id="trainingNo" name="training" value="no" required> No
                </label>
             </fieldset>
             <div>
                <label for="startDate">When could you begin training? </label>
                <input type="date" id="startDate" name="startDate" required>
             </div>
             <div>
                <button type="submit" id="submitButton">Submit Application</button>
             </div>
        </form>
    </main>
    <footer>
        <p>Red Frontier Expeditions - Your Next Destination is Another Planet</p>
    </footer>
</body>
</html>