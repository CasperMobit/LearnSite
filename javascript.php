<!DOCTYPE html>
<html lang="en">
<head>
	<title>JavaScript | LearnSite</title>
	<?php require('components/headContent.html');?>
</head>
<body>

<header id="Header"></header>

<div id="wrapper">
	<div class="row">
		<div class="col-12">
			<h1 class="heroTitle">JavaScript</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-2"></div>
		<div class="col-8 content">

			<h2>Content</h2>
			<ul class="noStyle noIndent">
				<li><a href="#contCreatingModelsUsingData">Creating Models Using Data</a></li>
				<li><a href="#contVariables">Variables</a></li>
				<li><a href="#contExamples">Examples</a></li>
				<li><a href="#contResources">Resources</a></li>
			</ul>


			<h1 id="contCreatingModelsUsingData">Creating Models Using Data</h1>

			<h2>Objects &amp; Properties</h2>
			<p>In programming, each physical thing in the world can be represented as an <strong>object</strong>.<br/>There can be several <strong>instances</strong> of an object.</p>
			<p style="margin-bottom: 0;">Each object can have its own:</p>
			<ul style="margin-top: 0; padding-left: 1.1em;">
				<li>Properties</li>
				<li>Events</li>
				<li>Methods</li>
			</ul>
			<p>An object is described using <strong>properties</strong>.</p>


			<h1 id="contVariables">Variables</h1>
			<p>There are three types of variables:</p>
			<dl class="smallIndent">
				<dt><code>var</code></dt>
				<dd>Before 2015, this was the only way to store variables. However, the 2015 version of JS introduced <code>let</code> and <code>const</code> which is meant to replace <code>var</code> in the future.</dd>
				<dt><code>let</code></dt>
				<dd>Is the new keyword used to define a variable.</dd>
				<dt><code>const</code></dt>
				<dd>Lets you define a variable as a constant.</dd>
			</dl>

			<h2>Declaring a variable</h2>
			<code>var quantity = 3;</code>
			<p>You can reassign a value to a declared variable:</p>
			<code>quantity = 5;</code>

			<h2>Data types</h2>
			<dl>
				<dt class="meta">Numeric Data Types</dt>
				<dd>The numeric data type handles numbers.<br><code>0.75</code></dd>
				<dt class="meta">String Data Type</dt>
				<dd>The string data type consists of letters and other characters.<br><code>'Hi, Ivy!'</code></dd>
			</dl>


			<h1 id="contExamples">Examples</h1>

			<p>Check out my <a href="apps/html-encoder.php">HTML Encoder</a></p>

			<div id="test"></div>


			<h1 id="contResources">Resources</h1>
			<ul class="no-indent">
				<li><a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript">MDN Web Docs</a></li>
				<li><a href="https://developers.google.com/web/tools/chrome-devtools/console/javascript">Get Started with Running JavaScript in The Console</a></li>
				<li><a href="https://repl.it/">Repl.it IDE</a> - Repl.it is an online IDE for writing and running code in a number of programming languages, including JavaScript. This is helpful if you want to edit and share code right from your browser.</li>
			</ul>
		</div>
		<div class="col-2"></div>
	</div>
</div>

<!-- FOOTER -->
<?php include('components/footer.html'); ?>

<!-- Load JavaScript -->
<script src="scripts/javascript-page.js"></script>
<script src="scripts/main.js"></script>
</body>
</html>