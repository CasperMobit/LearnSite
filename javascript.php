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