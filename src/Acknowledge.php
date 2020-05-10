<?php 
if (isset($_POST['submit'])){
    //variable to pull from settings file eventually.
    $emailaddress = "";
    $to = 'robwright445@gmail.com';
    $subject = "Booking Submission for Sax'N'Sip";
    
    $formNames = array(
        'reference',
        'first_name',
        'last_name',
        'email',
        'phone',
        'type',
        'private',
        'public',
        'start_end',
        'location',
        'duration',
        'genre',
        'pa_system',
        'sound_technician',
        'num_guests',
        'additional_info');
    $formQuestions = array(
        'How did you hear about Ben Joseph? *',
        'First Name *',
        'Last Name *',
        'Email Address *',
        'Phone Number *',
        'Type of Event *',
        'Private',
        'Public',
        'What is the start and end time of your event? *',
        'Where is your event located? *',
        'How long would you like Ben Joseph to perform? *',
        'What genre of music would you like to be played? *',
        'Does the venue have a P.A. system or in-house sound/audio? *',
        'Will there be a sound technician/dj? *',
        'How many people are you expecting to be in attendance at the event? *',
        'Please list any additional information you would like to include about the event: *');
    
    $emailBody = $formQuestions[0].': '.$_POST[$formNames[0]]."\r\n\r\n";
    $emailBody .= $formQuestions[1].': '.$_POST[$formNames[1]]."\r\n\r\n";
    $emailBody .= $formQuestions[2].': '.$_POST[$formNames[2]]."\r\n\r\n";
    $emailBody .= $formQuestions[3].': '.$_POST[$formNames[3]]."\r\n\r\n";
    $emailBody .= $formQuestions[4].': '.$_POST[$formNames[4]]."\r\n\r\n";
    $emailBody .= $formQuestions[5].': '.$_POST[$formNames[5]]."\r\n\r\n";
    $emailBody .= $formQuestions[6].': '.$_POST[$formNames[6]]."\r\n\r\n";
    $emailBody .= $formQuestions[7].': '.$_POST[$formNames[7]]."\r\n\r\n";
    $emailBody .= $formQuestions[8].': '.$_POST[$formNames[8]]."\r\n\r\n";
    $emailBody .= $formQuestions[9].': '.$_POST[$formNames[9]]."\r\n\r\n";
    $emailBody .= $formQuestions[10].': '.$_POST[$formNames[10]]."\r\n\r\n";
    $emailBody .= $formQuestions[11].': '.$_POST[$formNames[11]]."\r\n\r\n";
    $emailBody .= $formQuestions[12].': '.$_POST[$formNames[12]]."\r\n\r\n";
    $emailBody .= $formQuestions[13].': '.$_POST[$formNames[13]]."\r\n\r\n";
    $emailBody .= $formQuestions[14].': '.$_POST[$formNames[14]]."\r\n\r\n";
    $emailBody .= $formQuestions[15].': '.$_POST[$formNames[15]]."\r\n\r\n";
    $emailBody .= $formQuestions[16].': '.$_POST[$formNames[16]];
    
    //echo $emailBody; early test that the form is working.
    $headers = "From: robwright445@gmail.com\r\n";
    $headers .= 'Content-Type: text/plain; charset=utrf-8';
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if ($email){
        $headers .= "\r\nReply-To: $email";
    }
    //don't try to mail if running on localhost, didn't setup email server locally.
    if ($_SERVER['SERVER_NAME'] != "127.0.0.1"){
        $success = mail($to, $subject, $emailBody, $headers, '-frobwright445@gmail.com');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Booking</title>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="stylesheet" type="text/css" href="css/Booking.css" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</head>
<body>
<?php include "Header.php"; ?>
	<div style="background-color: #83677B">
		<div class="form p-3 mx-3 bg-dark text-white">
			<?php if (isset($success) && $success){ ?>
			<h1>Thank You</h1>
			<p>Your booking has been submitted.</p>
			<?php } else { ?>
        	<h1>Oops!</h1>
			<p>Sorry, there was a problem with the submission.</p>
    		<?php } ?>
    	</div>
	</div>
</body>
<?php include "Footer.php"; ?>