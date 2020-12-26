<!DOCTYPE html>
<html lang="en">
<head>
	<title>JavaScript</title>
	<?php require('components/headContent.html');?>
</head>
<body>

<?php include('./components/header.html'); ?>

<div class="row" id="wrapper">
	<div class="col-2"></div>
	<div class="col-8 content">
		<h1>Javascript</h1>
		<h2>Creating Models Using Data</h2>
		<h3>Objects &amp; Properties</h3>
		<p>In programming, each physical thing in the world can be represented as an <strong>object</strong>.<br/>There can be several <strong>instances</strong> of an object.</p>
		<p>Each object can have its own:</p>
		<ul>
			<li>Properties</li>
			<li>Events</li>
			<li>Methods</li>
		</ul>

		<h2>Examples</h2>
		<script src="js/add-content.js"></script>
		<script>
			document.write('<p>You can use the "document.write()" method to add HTML using JavaScript</p>');

			var time = new Date();
			var weekDay = time.getDay();
			var day = time.getDate();
			var month = time.getMonth() + 1;
			var year = time.getFullYear();
			var hour = time.getHours();
			var minute = time.getMinutes();

			// Replace weekDay number with name of the day
			if (weekDay == 1) {
				weekDay = 'Monday';
			} else if (weekDay == 2) {
				weekDay = 'Tuesday';
			} else if (weekDay == 3) {
				weekDay = 'Wednesday';
			} else if (weekDay == 4) {
				weekDay = 'Thursday';
			} else if (weekDay == 5) {
				weekDay = 'Friday';
			} else if (weekDay == 6) {
				weekDay = 'Saturday';
			} else if (weekDay == 7) {
				weekDay = 'Sunday';
			} else {
				weekDay = 'Date:'
			}

			// Display the date as "Name DD.MM.YY HH:mm"
			document.write('<p>' + weekDay + ' ' + day + '.' + month + '.' + year + ' ' + hour + ':' + minute + '</p>');
		</script>
	</div>
	<div class="col-2"></div>
</div>

</body>