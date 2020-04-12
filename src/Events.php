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

      googleCalendarApiKey: 'AIzaSyDYCTtQL94JwOS_9Hkp4f0ypSBw6Ua30zA',


           events: {
		    googleCalendarId: 'saxnsip@gmail.com',
		    textColor: 'white',
		    color: 'rgba(0, 0, 0, 0.5)',
		    className: 'gevent'
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

<style>

  body {

    font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
    font-size: 14px;
   background-color:#CACFD2 !important;
       overflow: auto;
   
  }

.fc table {
    border-color: black !important;
  font-size: 1em; 
  }
.fc-left .fc-prev-button, .fc-left .fc-next-button, .fc-left .fc-today-button{
    background-color: black !important;
    border-color: black !important;
}
.fc-day-grid-event .fc-content {
	white-space: normal;
	font-size: 11pt;
	font-weight: 700;
	font-family: Verdana, sans-serif !important;
}

.fc-day-grid-event {
	background: rgba(0, 0, 0, 0.0);
	color: #000;
	 font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
}


</style>
</head>
<body>
    <?php include "Header.php"; ?>
<div style="background-color: #CACFD2;">
    <div class="container" style="background-color: #CACFD2;">
   
    <br><br>
    
    	<div class="card bg-dark text-white">
			<div class="card-header">
				<h1 style="text-align: center; color: white;">EVENTS</h1>
			</div>
			

		</div>
	
	<br><br>

          <div id='calendar'></div>
          
    </div>
</div>
<?php include_once "Footer.php";?>
</body>
</html>
