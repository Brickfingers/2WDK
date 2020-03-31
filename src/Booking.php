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
    <?php 
     $formNames = array(
         'reference',
         'first_name',
         'last_name',
         'email',
         'phone',
         'website',
         'type',
         'private',
         'public',
         'start_end',
         'location',
         'duration',
         'genre',
         'performance_type',
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
         'Website *',
         'Type of Event *',
         'Private',
         'Public',
         'What is the start and end time of your event? *',
         'Where is your event located? *',
         'How long would you like Ben Joseph to perform? *',
         'What genre of music would you like to be played? *',
         'What musical performance type are you seeking? *',
         'Does the venue have a P.A. system or in-house sound/audio? *',
         'Will there be a sound technician/dj? *',
         'How many people are you expecting to be in attendance at the event? *',
         'Please list any additional information you would like to include about the event: *');
     ?>
    <div class="form p-3 m-3">
    <h1 style="text-align: center; white-space; pre-wrap;"> Booking </h1>
    <form method="post" action="acknowledge.php">
    	<?php $formCount = 0; ?>
        <label><?php echo $formQuestions[$formCount]?></label><br>
        <input name="<?php echo $formNames[$formCount]?>" type="text" aria-required="true"></input><br>
        
        <?php $formCount++; ?>
        <label><?php echo $formQuestions[$formCount]?></label><br>
        <input name="<?php echo $formNames[$formCount]?>" type="text" aria-required="true"></input><br>
        
        <?php $formCount++; ?>
        <label><?php echo $formQuestions[$formCount]?></label><br>
        <input name="<?php echo $formNames[$formCount]?>" type="text" aria-required="true"></input><br>
        
        <?php $formCount++; ?>
        <label><?php echo $formQuestions[$formCount]?></label><br>
        <input name="<?php echo $formNames[$formCount]?>" type="email" aria-required="true"></input><br>
        
        <?php $formCount++; ?>
        <label><?php echo $formQuestions[$formCount]?></label><br>
        <input name="<?php echo $formNames[$formCount]?>" type="number" maxlength="9" aria-required="true"></input><br>
        
        <?php $formCount++; ?>
        <label><?php echo $formQuestions[$formCount]?></label><br>
        <input name="<?php echo $formNames[$formCount]?>" type="text" aria-required="true"></input><br>
        
        <?php $formCount++; ?>
        <label><?php echo $formQuestions[$formCount]?></label><br>
        <input name="<?php echo $formNames[$formCount]?>" type="text" aria-required="true"></input><br>
        
        <label>Your event is: *</label><br>
        
        <?php $formCount++; ?>
        <label><?php echo $formQuestions[$formCount]?></label><br>
        <input name="<?php echo $formNames[$formCount]?>" type="checkbox" value ="private" ></input><br>
        
        <?php $formCount++; ?>
        <label><?php echo $formQuestions[$formCount]?></label><br>
        <input name="<?php echo $formNames[$formCount]?>" type="checkbox" value ="public" ></input><br>
        
        <?php $formCount++; ?>
        <label><?php echo $formQuestions[$formCount]?></label><br>
        <input name="<?php echo $formNames[$formCount]?>" type="text" aria-required="true"></input><br>
        
        <?php $formCount++; ?>
        <label><?php echo $formQuestions[$formCount]?></label><br>
        <input name="<?php echo $formNames[$formCount]?>" type="text" aria-required="true"></input><br>
        
        <?php $formCount++; ?>
        <label><?php echo $formQuestions[$formCount]?></label><br>
        <input name="<?php echo $formNames[$formCount]?>" type="text" aria-required="true"></input><br>
        
        <?php $formCount++; ?>
        <label><?php echo $formQuestions[$formCount]?></label><br>
        <input name="<?php echo $formNames[$formCount]?>" type="text" aria-required="true"></input><br>
        
        <?php $formCount++; ?>
        <label><?php echo $formQuestions[$formCount]?></label><br>
        <input name="<?php echo $formNames[$formCount]?>" type="text" aria-required="true"></input><br>
        
        <?php $formCount++; ?>
        <label><?php echo $formQuestions[$formCount]?></label><br>
        <input name="<?php echo $formNames[$formCount]?>" type="text" aria-required="true"></input><br>
        
        <?php $formCount++; ?>
        <label><?php echo $formQuestions[$formCount]?></label><br>
        <input name="<?php echo $formNames[$formCount]?>" type="text" aria-required="true"></input><br>
        
        <?php $formCount++; ?>
        <label><?php echo $formQuestions[$formCount]?></label><br>
        <input name="<?php echo $formNames[$formCount]?>" type="text" aria-required="true"></input><br>
        
        <?php $formCount++; ?>
        <label><?php echo $formQuestions[$formCount]?></label><br>
        <textarea name="<?php echo $formNames[$formCount]?>" aria-required="true"></textarea><br>
        
        <input name="submit" type="submit" value="Submit">
    </form>
    </div>
    <?php include "Footer.php"; ?>
</body>
</html>

