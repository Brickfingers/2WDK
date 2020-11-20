
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Booking</title>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
	<link rel='stylesheet' media='screen' type='text/css' href='pagesCSS/Booking.css' />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</head>
<body class="body">
	<div>
    <?php include "Header.php"; ?>
    <?php 
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
     ?>
    <br>
    <div class="form p-3 mx-3">
    <h1 class="header1"> BOOKING </h1>
    <form method="post" action="acknowledge.php" class="mx-5">
    	<div class="form-group">
    		<?php $formCount = 0; ?>
        	<label><?php echo $formQuestions[$formCount]?></label><br>
        	<input name="<?php echo $formNames[$formCount]?>" type="text" aria-required="true" class="form-control"></input><br>
        </div>
        <div class="form-group">
            <?php $formCount++; ?>
            <label><?php echo $formQuestions[$formCount]?></label><br>
            <input name="<?php echo $formNames[$formCount]?>" type="text" aria-required="true" class="form-control"></input><br>
        </div>
        <div class="form-group">    
            <?php $formCount++; ?>
            <label><?php echo $formQuestions[$formCount]?></label><br>
            <input name="<?php echo $formNames[$formCount]?>" type="number" maxlength="9" aria-required="true" class="form-control"></input><br>
        </div>    
        <div class="form-group">    
            <?php $formCount++; ?>
            <label><?php echo $formQuestions[$formCount]?></label><br>
            <input name="<?php echo $formNames[$formCount]?>" type="text" aria-required="true" class="form-control"></input><br>
        </div>    
        <div class="form-group">    
            <?php $formCount++; ?>
            <label><?php echo $formQuestions[$formCount]?></label><br>
            <input name="<?php echo $formNames[$formCount]?>" type="text" aria-required="true" class="form-control"></input><br>
        </div>    
        <div class="form-check text-left">    
            <label>Your event is: *</label><br>
            <?php $formCount++; ?>
            <input name="<?php echo $formNames[$formCount]?>" type="checkbox" value ="private" class="form-check-input"></input>
            <label><?php echo $formQuestions[$formCount]?></label><br>
            
            <?php $formCount++; ?>
            <input name="<?php echo $formNames[$formCount]?>" type="checkbox" value ="public" class="form-check-input"></input>
            <label><?php echo $formQuestions[$formCount]?></label><br>
        </div>    
        <div class="form-group">    
            <?php $formCount++; ?>
            <label><?php echo $formQuestions[$formCount]?></label><br>
            <input name="<?php echo $formNames[$formCount]?>" type="text" aria-required="true" class="form-control"></input><br>
        </div>    
        <div class="form-group">    
            <?php $formCount++; ?>
            <label><?php echo $formQuestions[$formCount]?></label><br>
            <input name="<?php echo $formNames[$formCount]?>" type="text" aria-required="true" class="form-control"></input><br>
        </div>    
        <div class="form-group">    
            <?php $formCount++; ?>
            <label><?php echo $formQuestions[$formCount]?></label><br>
            <input name="<?php echo $formNames[$formCount]?>" type="text" aria-required="true" class="form-control"></input><br>
        </div>    
        <div class="form-group">    
            <?php $formCount++; ?>
            <label><?php echo $formQuestions[$formCount]?></label><br>
            <input name="<?php echo $formNames[$formCount]?>" type="text" aria-required="true" class="form-control"></input><br>
        </div>    
        <div class="form-group">    
            <?php $formCount++; ?>
            <label><?php echo $formQuestions[$formCount]?></label><br>
            <input name="<?php echo $formNames[$formCount]?>" type="text" aria-required="true" class="form-control"></input><br>
        </div>    
        <div class="form-group">    
            <?php $formCount++; ?>
            <label><?php echo $formQuestions[$formCount]?></label><br>
            <input name="<?php echo $formNames[$formCount]?>" type="text" aria-required="true" class="form-control"></input><br>
        </div>    
        <div class="form-group">    
            <?php $formCount++; ?>
            <label><?php echo $formQuestions[$formCount]?></label><br>
            <input name="<?php echo $formNames[$formCount]?>" type="text" aria-required="true" class="form-control"></input><br>
        </div>
        <div class="form-group">    
            <?php $formCount++; ?>
            <label><?php echo $formQuestions[$formCount]?></label><br>
            <input name="<?php echo $formNames[$formCount]?>" type="text" aria-required="true" class="form-control"></input><br>
        </div>    
        <div class="form-group">    
            <?php $formCount++; ?>
            <label><?php echo $formQuestions[$formCount]?></label><br>
            <textarea name="<?php echo $formNames[$formCount]?>" aria-required="true" class="form-control" rows="4"></textarea><br>
        </div>
        <div class="form-group">    
            <button name="submit" class="submitButton" type="submit">Submit</button>
    	</div>
    </form>
    </div>
    </div>
    <?php include "Footer.php"; ?>
</body>
</html>

