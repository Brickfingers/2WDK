<!DOCTYPE html>
<html>
<head>
<title>Events</title>
<meta charset='utf-8' />

<script src="https://unpkg.com/@popperjs/core@2"></script>
<link href='https://use.fontawesome.com/releases/v5.0.6/css/all.css' rel='stylesheet'>
<link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel='stylesheet' />

<link href='../packages/core/main.css' rel='stylesheet' />
<link href='../packages/daygrid/main.css' rel='stylesheet' />
<link href='../packages/bootstrap/main.css' rel='stylesheet' />

<script src='../packages/core/main.js'></script>
<script src='../packages/daygrid/main.js'></script>
<script src='../packages/bootstrap/main.js'></script>
<script src='../packages/google-calendar/main.js'></script>

<link rel='stylesheet' media='screen' type='text/css' href='pagesCSS/Events.css' />

<script>
//creates the calendar
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {

    plugins: [ 'dayGrid', 'googleCalendar', 'bootstrap' ],
	themeSystem: 'bootstrap',
    header: {
        left: 'prev,next today',
        center: '',
        right: 'title'
      },


      displayEventTime: false, // don't show the time column in list view

      googleCalendarApiKey: 'AIzaSyDc0lVZ9BmPgodpioi4Lneom05oRWB1yTA',


           events: {
		    googleCalendarId: 'team2wdk@gmail.com',
		    textColor: 'black',
		    color: '#feda6a',
		  },
		  

      eventClick: function(arg) {
          // opens events in a popup window
          window.open(arg.event.url, 'google-calendar-event', 'width=700,height=600');

          arg.jsEvent.preventDefault() // don't navigate in main tab
        },
	    
  	  eventRender: function(info)
	  {
	    $(info.el).tooltip({ 
		    title: info.event.title,
		    placement: 'top',
		    trigger: 'hover',
		    container: 'body'
		});
	  }

    });

    calendar.render();
  });
  
</script>
</head>
<body  class="body">
    <?php include "Header.php"; ?>
<div>
    <div class="container" >
   
    <br><br>
    
    	<div class="container" id="card">
			<h1  class="header1">EVENTS</h1>
		</div>
	
	<br><br>

          <div id='calendar'></div>
          <br>
    </div>
</div>
<?php include_once "Footer.php";?>
</body>
</html>
