<!DOCTYPE html>
<html lang="en">
<head>
	<title>Booking</title>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/Booking.css" />
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
<?php include "Header.php"; ?>
<h1 style="text-align: center; white-space; pre-wrap;"> Booking </h1>

<form method="post">
<label>How did you hear about Ben Joseph?</label>
<input type="text"></input><br>

<label>First Name</label>
<input type="text"></input><br>

<label>Last Name</label>
<input type="text"></input><br>

<label>Email Address</label>
<input type="email"></input><br>

<label>Phone Number</label>
<input type="text" maxlength="3"></input>
<input type="text" maxlength="3"></input>
<input type="text" maxlength="3"></input><br>

<label>Website</label>
<input type="text"></input><br>

<label>Type of Event</label>
<input type="text"></input><br>

<label>Your event is:</label>
<input type="checkbox" value ="private"></input>
<input type="checkbox" value ="public"></input><br>

<label>What is the start and end time of your event?</label>
<input></input><br>

<label>Where is your event located?</label>
<input></input><br>

<label>How long would you like Ben Joseph to perform?</label>
<input></input><br>

<label>What genre of music would you like to be played?</label>
<input></input><br>

<label>What musical performance type are you seeking?</label>
<input></input><br>

<label>Does the venue have a P.A. system or in-house sound/audio</label>
<input></input><br>

<label>Please list any additional information you would like to include about the event</label>
<textarea></textarea><br>
</form>


<?php include "Footer.php"; ?>
</body>
</html>

