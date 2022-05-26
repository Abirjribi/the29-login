
    <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="img/29.png" type="image/x-icon">

	<title>Planning</title>
<!--
Holiday Template
http://www.templatemo.com/tm-475-holiday
-->
	<link href='css/googlefont.css' rel='stylesheet' type='text/css'>
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">  
	<link href="css/flexslider.css" rel="stylesheet">
	<link href="css/templatemo-style.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet" />
	<script src='js/main.js'></script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	<script>
	document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

	var calendarEl = document.getElementById('calendar');

var calendar = new FullCalendar.Calendar(calendarEl, {
  height: '100%',
  expandRows: true,
  slotMinTime: '08:00',
  slotMaxTime: '20:00',
  headerToolbar: {
	left: 'prev,next today',
	center: 'title',
	right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
  },
  initialView: 'dayGridMonth',
  initialDate: '2022-05-01',
  navLinks: true, // can click day/week names to navigate views
  editable: true,
  selectable: true,
  nowIndicator: true,
  dayMaxEvents: true, // allow "more" link when too many events
  events: [
	{
	  title: 'All Day Event',
	  start: '2020-09-01',
	},
	{
	  title: 'Long Event',
	  start: '2020-09-07',
	  end: '2020-09-10'
	},
	{
	  groupId: 999,
	  title: 'Repeating Event',
	  start: '2020-09-09T16:00:00'
	},
	{
	  groupId: 999,
	  title: 'Repeating Event',
	  start: '2020-09-16T16:00:00'
	},
	{
	  title: 'Conference',
	  start: '2020-09-11',
	  end: '2020-09-13'
	},
	{
	  title: 'Meeting',
	  start: '2020-09-12T10:30:00',
	  end: '2020-09-12T12:30:00'
	},
	{
	  title: 'Lunch',
	  start: '2020-09-12T12:00:00'
	},
	{
	  title: 'Meeting',
	  start: '2020-09-12T14:30:00'
	},
	{
	  title: 'Happy Hour',
	  start: '2020-09-12T17:30:00'
	},
	{
	  title: 'Dinner',
	  start: '2020-09-12T20:00:00'
	},
	{
	  title: 'Birthday Party',
	  start: '2020-09-13T07:00:00'
	},
	{
	  title: 'Click for Google',
	  url: 'http://google.com/',
	  start: '2020-09-28'
	}
  ]
});

calendar.render();
});

</script>
<style>

#calendar-container {
    position: fixed;
    top: 10%;
    left: 0;
    right: 0;
    bottom: 0;
	height: 90%  !important;
  }
  .fc-header-toolbar {
    /*
    the calendar will be butting up against the edges,
    but let's scoot in the header's buttons
    */
    padding-top: 1em;
    padding-left: 1em;
    padding-right: 1em;
  }


</style>
</head>
<body>
	<!-- Header -->
	<div class="tm-header">
	<div class="container">
  			<div class="row">
  				<div class="col-lg-6 col-md-4 col-sm-3 tm-site-name-container">
				  <img style="margin-top: -14px;" src="{{ url('img/29.jpg')}}" width="70" height="57"  />
	</div>
				  
				<div class="col-lg-6 col-md-8 col-sm-9">
					<div class="mobile-menu-icon">
						<i class="fa fa-bars"></i>
					</div>
					<nav class="tm-nav">
					<ul>
                            <li style="margin-top: -10px;"><a href="/" ><h5>Accueil</h5></a></li>
                            <li style="margin-top: -10px;"><a href="activite"><h5>Activités</h5></a></li>
                            <li style="margin-top: -10px;"><a href="evenements"><h5>Evénements</h5></a></li>
							<li style="margin-top: -10px;"><a href="planning" class="active" ><h5>Planning</h5></a></li>
                            <li style="margin-top: -10px;"><a href="contact"><h5>Contact</h5></a></li>
                            
                        </ul>

					</nav>		
				</div>				
			</div>
		</div>	  	
	</div>

	<div id='calendar-container'>
  <div id='calendar'></div></div>

</body>
</html>