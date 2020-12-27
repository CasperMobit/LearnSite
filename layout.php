<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bootstrap</title>
	<?php require('components/headContent.html');?>
</head>
<body>

<?php include('./components/header.html'); ?>

<div class="row" id="wrapper">
	<div class="col-2"></div>
	<div class="col-8 content">
		<h1>Layout</h1>
		<p class="meta">This layout was made using CSS only!</p>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
		<h2>Size Guide</h2>
		<table>
			<tr>
				<th>Value</th>
				<th>Device</th>
				<th>Size</th>
			</tr>
			<tr>
				<td>xs</td>
				<td>Phones</td>
				<td>Screens less than 768px wide</td>
			</tr>
			<tr>
				<td>xs</td>
				<td>Phones</td>
				<td>Screens less than 768px wide</td>
			</tr>
			<tr>
				<td>xs</td>
				<td>Phones</td>
				<td>Screens less than 768px wide</td>
			</tr>
			<tr>
				<td>xs</td>
				<td>Phones</td>
				<td>Screens less than 768px wide</td>
			</tr>
		</table>
		<h2>Sass</h2>
		<h3>Making Arrays</h3>
		<p>Function structure:</p>
		<code>
<pre>
@function MyFunction($array, $element, $key: null) {
  @if $key {
    @return map-get(map-get($array, $element), $key);
  } @else {
    @return map-get($array, $element);
  }
}
</pre>
		</code>
		<p>Array structure:</p>
		<code>
<pre>
$myArray: (
  'element-1': 20px,
  'element-2': 40px,
  'element-3': (
    'key-1': 2em,
    'key-2': 4em
	)
);
</pre>
		</code>
		<p>You can now call for any value within the array structure using:</p>
		<code>
<pre>
MyFunction($myArray, 'element-1')	    // 20px
MyFunction($myArray, 'element-2')	    // 40px
MyFunction($myArray, 'element-3', 'key-1')  // 2em
MyFunction($myArray, 'element-3', 'key-1')  // 4em
</pre>
		</code>
	</div>
	<div class="col-2"></div>
</div>

<?php include('./components/footer.html'); ?>

</body>