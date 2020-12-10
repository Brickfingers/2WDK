<!----------------------------------------------------------------------------- 
* Filename:					InsertIntoGallery.php
* Version:					4.0
* Team Name:                2WDK
* Student Name:				Nick Wright
-------------------------------------------------------------------------------->

<!-- this file uploads an image for HomePage and stores all data in Home page table -->

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Wizard Home Page</title>
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/Gallery.css" />
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="wizardCSS/progressBar.css" />
<link rel="stylesheet" type="text/css" href="wizardCSS/wizard.css" />
</head>

<div class="body">
	<body>
		<div class="container">
			<br>
			<center>
				<img src="photo/logo.png" alt="logo"> <br /> <br />
				<h1 style="text-align: center; color: #71db77;">Booking Wizard</h1>

			</center>
			<div class="row" >
				<div class="col-md-12 mx-0">
					<!-- progressbar -->
					<ul id="progressbar" style="text-align: center">
						<li class="active" id="home"><strong>Home Page</strong></li>
						<li class="active" id="headerFooter"><strong>Header and Footer</strong></li>
						<li class="active" id="about"><strong>About Page</strong></li>
						<li class="active" id="gallery"><strong>Gallery Page</strong></li>
						<li class="active" id="booking"><strong>Booking Page</strong></li>
						<li id="layout"><strong>Layout</strong></li>
						<li id="finish"><strong>Finish</strong></li>
					</ul>
				</div>
			</div>
			<div class="text-white">

				<div style="background: #222222;">
					<div class="card-body p-5">



<?php
//echo "<h2> Booking Wizard </h2>";
include "DB_Connect.php";
if (isset($_POST['submit'])) {
    $question1 = $_POST["question1"];
    $question2 = $_POST["question2"];
    $question3 = $_POST["question3"];
    $question4 = $_POST["question4"];
    $question5 = $_POST["question5"];
    $question6 = $_POST["question6"];
    $question7 = $_POST["question7"];
    $question8 = $_POST["question8"];
    $question9 = $_POST["question9"];
    $question10 = $_POST["question10"];
    $question11 = $_POST["question11"];
    $question12 = $_POST["question12"];
    $question13 = $_POST["question13"];
    $question14 = $_POST["question14"];
    $question15 = $_POST["question15"];

    $question1 = str_replace("'", "''", $question1);
    $question2 = str_replace("'", "''", $question2);
    $question3 = str_replace("'", "''", $question3);
    $question4 = str_replace("'", "''", $question4);
    $question5 = str_replace("'", "''", $question5);
    $question6 = str_replace("'", "''", $question6);
    $question7 = str_replace("'", "''", $question7);
    $question8 = str_replace("'", "''", $question8);
    $question9 = str_replace("'", "''", $question9);
    $question10 = str_replace("'", "''", $question10);
    $question11 = str_replace("'", "''", $question11);
    $question12 = str_replace("'", "''", $question12);
    $question13 = str_replace("'", "''", $question13);
    $question14 = str_replace("'", "''", $question14);
    $question15 = str_replace("'", "''", $question15);

    $sql = "INSERT INTO [dbo].[HomePage]
       ([Question1],[Question2],[Question3],
        [Question4],[Question5],[Question6],
        [Question7],[Question8],[Question9],
        [Question10],[Question11],[Question12],
        [Question13],[Question14],[Question15])
            
        SELECT '$question1','$question2','$question3',
               '$question4','$question5','$question6',
               '$question7','$question8','$question9',
               '$question10','$question11','$question12',
               '$question13','$question14','$question15',";

    $result = sqlsrv_query($conn, $sql);
    
    if ($result === false) {
        if (($errors = sqlsrv_errors()) != null) {
            foreach ($errors as $error) {
                echo "SQLSTATE: " . $error['SQLSTATE'] . "<br />";
                echo "code: " . $error['code'] . "<br />";
                echo "message: " . $error['message'] . "<br />";
            }
        }
    }

    echo "<font color='green'>" . "Booking page is set." . "</font>";

    echo " <br /> <br />"; 
    header("Location: InsertToLayout.php");
} else {
    echo "Sorry, there was an error uploading your files.";
}


?>

<form name="myForm" method="POST" enctype="multipart/form-data">
	<h4>Question 1 Text:</h4>
	<span style="color: red" id="error-question1"></span>
	<textarea rows="2" cols="50" name="question1"></textarea>
	<br /> <br />
	<h4>Question 2 Text:</h4>
	<span style="color: red" id="error-question2"></span>
	<textarea rows="2" cols="50" name="question2"></textarea>
	<br /> <br />
	<h4>Question 3 Text:</h4>
	<span style="color: red" id="error-question3"></span>
	<textarea rows="2" cols="50" name="question3"></textarea>
	<br /> <br />
	<h4>Question 4 Text:</h4>
	<span style="color: red" id="error-question4"></span>
	<textarea rows="2" cols="50" name="question4"></textarea>
	<br /> <br />
	<h4>Question 5 Text:</h4>
	<span style="color: red" id="error-question5"></span>
	<textarea rows="2" cols="50" name="question5"></textarea>
	<br /> <br />
	<h4>Question 6 Text:</h4>
	<span style="color: red" id="error-question6"></span>
	<textarea rows="2" cols="50" name="question6"></textarea>
	<br /> <br />
	<h4>Question 7 Text:</h4>
	<span style="color: red" id="error-question7"></span>
	<textarea rows="2" cols="50" name="question7"></textarea>
	<br /> <br />
	<h4>Question 8 Text:</h4>
	<span style="color: red" id="error-question8"></span>
	<textarea rows="2" cols="50" name="question8"></textarea>
	<br /> <br />
	<h4>Question 9 Text:</h4>
	<span style="color: red" id="error-question9"></span>
	<textarea rows="2" cols="50" name="question9"></textarea>
	<br /> <br />
	<h4>Question 10 Text:</h4>
	<span style="color: red" id="error-question10"></span>
	<textarea rows="2" cols="50" name="question10"></textarea>
	<br /> <br />
	<h4>Question 11 Text:</h4>
	<span style="color: red" id="error-question11"></span>
	<textarea rows="2" cols="50" name="question11"></textarea>
	<br /> <br />
	<h4>Question 12 Text:</h4>
	<span style="color: red" id="error-question12"></span>
	<textarea rows="2" cols="50" name="question12"></textarea>
	<br /> <br />
	<h4>Question 13 Text:</h4>
	<span style="color: red" id="error-question13"></span>
	<textarea rows="2" cols="50" name="question13"></textarea>
	<br /> <br />
	<h4>Question 14 Text:</h4>
	<span style="color: red" id="error-question14"></span>
	<textarea rows="2" cols="50" name="question14"></textarea>
	<br /> <br />
	<h4>Question 15 Text:</h4>
	<span style="color: red" id="error-question15"></span>
	<textarea rows="2" cols="50" name="question15"></textarea>
	<br /> <br />

	<div>
		<center>
			<a class="next" href="SelectLayout.php">&laquo; Previous</a>
			<button class="next" type="submit" name="submit"
				onclick="return validateForm()">Next &raquo;</button>
		</center>
	</div>
	<br />
</form>
<script>
function validateForm(){
	var question1 = document.forms["myForm"]["question1"].value;
	var question2 = document.forms["myForm"]["question2"].value;
	var question3 = document.forms["myForm"]["question3"].value;
	var question4 = document.forms["myForm"]["question4"].value;
	var question5 = document.forms["myForm"]["question5"].value;

	var question6 = document.forms["myForm"]["question6"].value;
	var question7 = document.forms["myForm"]["question7"].value;
	var question8 = document.forms["myForm"]["question8"].value;
	var question9 = document.forms["myForm"]["question9"].value;
	var question10 = document.forms["myForm"]["question10"].value;

	var question11 = document.forms["myForm"]["question11"].value;
	var question12 = document.forms["myForm"]["question12"].value;
	var question13 = document.forms["myForm"]["question13"].value;
	var question14 = document.forms["myForm"]["question14"].value;
	var question15 = document.forms["myForm"]["question15"].value;
	
	
    if (question1.length<1) {
        document.getElementById('error-question1').innerHTML = " Please enter a question *";
        return false;
    }else{
    	document.getElementById('error-question1').innerHTML ="";
    }
    if (question1.length>50) {
        document.getElementById('error-question1').innerHTML = " Please enter a question *";
        return false;
    }else{
    	document.getElementById('error-question1').innerHTML ="";
    }
    if (question2.length<1) {
        document.getElementById('error-question2').innerHTML = " Please enter a question *";
        return false;
    }else{
    	document.getElementById('error-question2').innerHTML ="";
    }
    if (question2.length>50) {
        document.getElementById('error-question2').innerHTML = " Please enter a question *";
        return false;
    }else{
    	document.getElementById('error-question2').innerHTML ="";
    }
    if (question3.length<1) {
        document.getElementById('error-question3').innerHTML = " Please enter a question *";
        return false;
    }else{
    	document.getElementById('error-question3').innerHTML ="";
    }
    if (question3.length>50) {
        document.getElementById('error-question3').innerHTML = " Please enter a question *";
        return false;
    }else{
    	document.getElementById('error-question3').innerHTML ="";
    }
    if (question4.length<1) {
        document.getElementById('error-question4').innerHTML = " Please enter a question *";
        return false;
    }else{
    	document.getElementById('error-question4').innerHTML ="";
    }
    if (question4.length>50) {
        document.getElementById('error-question4').innerHTML = " Please enter a question *";
        return false;
    }else{
    	document.getElementById('error-question4').innerHTML ="";
    }
    if (question5.length<1) {
        document.getElementById('error-question5').innerHTML = " Please enter a question *";
        return false;
    }else{
    	document.getElementById('error-question5').innerHTML ="";
    }
    if (question5.length>50) {
        document.getElementById('error-question5').innerHTML = " Please enter a question *";
        return false;
    }else{
    	document.getElementById('error-question5').innerHTML ="";
    }
    if (question6.length<1) {
        document.getElementById('error-question6').innerHTML = " Please enter a question *";
        return false;
    }else{
    	document.getElementById('error-question6').innerHTML ="";
    }
    if (question6.length>50) {
        document.getElementById('error-question6').innerHTML = " Please enter a question *";
        return false;
    }else{
    	document.getElementById('error-question6').innerHTML ="";
    }
    if (question7.length<1) {
        document.getElementById('error-question7').innerHTML = " Please enter a question *";
        return false;
    }else{
    	document.getElementById('error-question7').innerHTML ="";
    }
    if (question7.length>50) {
        document.getElementById('error-question7').innerHTML = " Please enter a question *";
        return false;
    }else{
    	document.getElementById('error-question7').innerHTML ="";
    }
    if (question8.length<1) {
        document.getElementById('error-question8').innerHTML = " Please enter a question *";
        return false;
    }else{
    	document.getElementById('error-question8').innerHTML ="";
    }
    if (question8.length>50) {
        document.getElementById('error-question8').innerHTML = " Please enter a question *";
        return false;
    }else{
    	document.getElementById('error-question8').innerHTML ="";
    }
    if (question9.length<1) {
        document.getElementById('error-question9').innerHTML = " Please enter a question *";
        return false;
    }else{
    	document.getElementById('error-question9').innerHTML ="";
    }
    if (question9.length>50) {
        document.getElementById('error-question9').innerHTML = " Please enter a question *";
        return false;
    }else{
    	document.getElementById('error-question9').innerHTML ="";
    }
    if (question10.length<1) {
        document.getElementById('error-question10').innerHTML = " Please enter a question *";
        return false;
    }else{
    	document.getElementById('error-question10').innerHTML ="";
    }
    if (question10.length>50) {
        document.getElementById('error-question10').innerHTML = " Please enter a question *";
        return false;
    }else{
    	document.getElementById('error-question10').innerHTML ="";
    }
    if (question11.length<1) {
        document.getElementById('error-question11').innerHTML = " Please enter a question *";
        return false;
    }else{
    	document.getElementById('error-question11').innerHTML ="";
    }
    if (question11.length>50) {
        document.getElementById('error-question11').innerHTML = " Please enter a question *";
        return false;
    }else{
    	document.getElementById('error-question11').innerHTML ="";
    }
    if (question12.length<1) {
        document.getElementById('error-question12').innerHTML = " Please enter a question *";
        return false;
    }else{
    	document.getElementById('error-question12').innerHTML ="";
    }
    if (question12.length>50) {
        document.getElementById('error-question12').innerHTML = " Please enter a question *";
        return false;
    }else{
    	document.getElementById('error-question12').innerHTML ="";
    }
    if (question13.length<1) {
        document.getElementById('error-question13').innerHTML = " Please enter a question *";
        return false;
    }else{
    	document.getElementById('error-question13').innerHTML ="";
    }
    if (question13.length>50) {
        document.getElementById('error-question13').innerHTML = " Please enter a question *";
        return false;
    }else{
    	document.getElementById('error-question13').innerHTML ="";
    }
    if (question14.length<1) {
        document.getElementById('error-question14').innerHTML = " Please enter a question *";
        return false;
    }else{
    	document.getElementById('error-question14').innerHTML ="";
    }
    if (question14.length>50) {
        document.getElementById('error-question14').innerHTML = " Please enter a question *";
        return false;
    }else{
    	document.getElementById('error-question14').innerHTML ="";
    }
    if (question15.length<1) {
        document.getElementById('error-question15').innerHTML = " Please enter a question *";
        return false;
    }else{
    	document.getElementById('error-question15').innerHTML ="";
    }
    if (question15.length>50) {
        document.getElementById('error-question15').innerHTML = " Please enter a question *";
        return false;
    }else{
    	document.getElementById('error-question15').innerHTML ="";
    }
          
}
</script>
					</div>
				</div>
				<center>
					&copy;
					<script>document.write(new Date().getFullYear());</script>
					Copyright - 2WDK Team
				</center>
				<br />
				<div />
			</div>	
	</body>
</html>
