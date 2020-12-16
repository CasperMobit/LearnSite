<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<?php require('components/headContent.html');?>
	<link href="./css/layout-test.css" type="text/css" rel="stylesheet" />
</head>
<body>

<?php include('./components/header.html'); ?>

<div class="row" id="wrapper">
	<div class="col-3"></div>
	<div class="col-6 content">
		<div class="row">
			<div class="col-1"></div>
			<div class="col-10">
				<h1 class="Heading_HTML"></h1>
				<h2>1 Structure</h2>
			</div>
			<div class="col-1"></div>
		</div>
		<div class="row">
			<div class="col-1"></div>
			<div class="col-4">
				<p>The opening <code>&lt;html&gt;</code> tag indicates that anything between it and a closing <code>&lt;/html&gt;</code> tag is HTML code.</p>
				<p>The <code>&lt;body&gt;</code> tag indicates that anything between it and the closing <code>&lt;/body&gt;</code> tag should be shown inside the main browser window.</p>
				<p>Words between <code>&lt;h1&gt;</code> and <code>&lt;/h1&gt;</code> are a main heading.</p>
				<p>Words between <code>&lt;h2&gt;</code> and <code>&lt;/h2&gt;</code> form a sub-heading.</p>
				<p>A paragraph of text appears between the <code>&lt;p&gt;</code> and <code>&lt;/p&gt;</code> tags.</p>
				<p>The closing <code>&lt;/body&gt;</code> tag indicates the end of what should appear in the main browser window.</p>
				<p>The closing <code>&lt;/html&gt;</code> tag indicates that it is the end of the HTML code.</p>
			</div>
			<div class="col-1"></div>
			<div class="col-5">
				<?php include('./content/html_structure_example-1.html'); ?>
			</div>
			<div class="col-1"></div>
		</div>
		<div class="row">
			<div class="col-1"></div>
			<div class="col-10">
				<hr>
				<h2>2 Text</h2>
			</div>
			<div class="col-1"></div>
		</div>
		<div class="row">
			<div class="col-1"></div>
			<div class="col-10">
				<table>
					<tr>
						<th><code>&lt;h1&gt;</code></th>
						<td>is used for main headings</td>
					</tr>
					<tr>
						<th><code>&lt;h2&gt;</code></th>
						<td>is used for sub-headings</td>
					</tr>
					<tr>
						<th><code>&lt;h3&gt;</code> - <code>&lt;h6&gt;</code></th>
						<td>is used for further sub-headings</td>
					</tr>
				</table>
			</div>
			<div class="col-1"></div>
		</div>
		<div class="row">
			<div class="col-1"></div>
			<div class="col-10">
				<h1>CSS</h1>
				<h2>Color Palettes</h2>
				<?php include('content/color_palettes-1.html'); ?>
				<h2>Selectors</h2>
				<?php include('content/css_selectors_table-1.html'); ?>
			</div>
			<div class="col-1"></div>
		</div>
		<div class="row">
			<div class="col-1"></div>
			<div class="col-10">
				<h1>JavaScript</h1>
				<h2>Resources</h2>
				<ul>
					<li><a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript">MDN Web Docs</a></li>
					<li><a href="https://developers.google.com/web/tools/chrome-devtools/console/javascript">Get Started with Running JavaScript in The Console</a></li>
					<li><a href="https://repl.it/">Repl.it IDE</a> - Repl.it is an online IDE for writing and running code in a number of programming languages, including JavaScript. This is helpful if you want to edit and share code right from your browser.</li>
				</ul>
			</div>
			<div class="col-1"></div>
		</div>
		<div class="row">
			<div class="col-1"></div>
			<div class="col-10">
				<h1>Additional Resources</h1>
				<ul>
					<li><a href="https://discuss.codecademy.com/">CodeCademy Forums</a></li>
					<li><a href="https://developer.mozilla.org/en-US/">MDN Web Docs</a></li>
					<li><a href="https://www.w3.org/TR/CSS2/selector.html">W3</a></li>
					<li><a href="https://css-tricks.com/">CSS-Tricks</a></li>
					<li><a href="https://dev.to/">DEV Community</a></li>
					<li><a href="https://stackoverflow.com/">Stack Overflow</a></li>
					<li><a href="https://caniuse.com/">Can I use</a></li>
					<li><a href="https://repl.it/">Repl.it</a></li>
					<li><a href="https://eloquentjavascript.net/">Eloquent JavaScript</a> - a free e-book that can be used instead of or with JavaScript & JQuery</li>
				</ul>
			</div>
			<div class="col-1"></div>
		</div>
	</div>
	<div class="col-3"></div>
</div>

<script src="scripts/main.js"></script>

</body>
</html>