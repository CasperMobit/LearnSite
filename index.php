<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home | LearnSite</title>
	<?php require('components/headContent.html');?>
</head>
<body>

<?php include('./components/header.html'); ?>

<div id="wrapper">
	<div class="row">
		<div id="Hero-home" class="col-12">
			<img src="img/Cover-hero.svg" alt="">
		</div>
	</div>
	<div class="row">
		<div class="col-2"></div>
		<div class="col-8 content">
			<h1>Welcome to LearnSite!</h1>
			<p>Hi!<br>My name is Casper Tollefsen and I'm the author, designer, and developer of this website.</p>
			<p>Here you'll find the code I've developed while learning web-development.</p>

			<h2>Content</h2>
			<ul class="noStyle noIndent">
				<li><a href="#contHtml">HTML</a></li>
				<li><a href="#contCss">CSS</a></li>
				<li><a href="#contJavascript">JavaScript</a></li>
				<li><a href="#contAsciiTable">ASCII Table</a></li>
				<li><a href="#contAdditionalResources">Additional Resources</a></li>
			</ul>

			<h1 class="Heading_HTML" id="contHtml"></h1>
			<h2>1 Structure</h2>
			<div class="codeBlock">&lt;&#33;DOCTYPE&#32;html&gt;<br>&lt;html&gt;<br><span style="margin-left:2rem;">&lt;head&gt;</span><br><span style="margin-left:4rem;">&lt;title&gt;LearnSite&lt;&#47;title&gt;</span><br><span style="margin-left:2rem;">&lt;&#47;head&gt;</span><br><span style="margin-left:2rem;">&lt;body&gt;</span><br><span style="margin-left:4rem;">&lt;h1&gt;Welcome&#32;to&#32;LearnSite&lt;&#47;h1&gt;</span><br><span style="margin-left:2rem;">&lt;&#47;body&gt;</span><br>&lt;&#47;html&gt;</div>
			<p>The opening <code>&lt;html&gt;</code> tag indicates that anything between it and a closing <code>&lt;/html&gt;</code> tag is HTML code.</p>
			<p>The <code>&lt;body&gt;</code> tag indicates that anything between it and the closing <code>&lt;/body&gt;</code> tag should be shown inside the main browser window.</p>
			<p>Words between <code>&lt;h1&gt;</code> and <code>&lt;/h1&gt;</code> are a main heading.</p>
			<p>Words between <code>&lt;h2&gt;</code> and <code>&lt;/h2&gt;</code> form a sub-heading.</p>
			<p>A paragraph of text appears between the <code>&lt;p&gt;</code> and <code>&lt;/p&gt;</code> tags.</p>
			<p>The closing <code>&lt;/body&gt;</code> tag indicates the end of what should appear in the main browser window.</p>
			<p>The closing <code>&lt;/html&gt;</code> tag indicates that it is the end of the HTML code.</p>

			<hr>

			<h2>2 Text</h2>
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

			<h1 id="contCss">CSS</h1>
			<h2>Color Palettes</h2>
			<?php include('content/color_palettes-1.html'); ?>

			<h1 id="contJavascript">JavaScript</h1>
			<h2>Short-Circuit Evaluation</h2>
			<div class="codeBlock">let&#32;defaultName&#59;<br>if&#32;&#40;username&#41;&#32;&#123;<br><span style="margin-left:2rem;">defaultName&#32;&#61;&#32;username&#59;</span><br>&#125;&#32;else&#32;&#123;<br><span style="margin-left:2rem;">defaultName&#32;&#61;&#32;&#39;Stranger&#39;</span><br>&#125;</div>
			<p>This block can be replaced by</p>
			<div class="codeBlock">let&#32;defaultName&#32;&#61;&#32;username&#32;&#124;&#124;&#32;&#39;Stranger&#39;&#59;</div>
			<p>This concept is referred to as short-circuit evaluation.</p>

			<h2>Ternary Operator</h2>
			<p>We can use a ternary operator to simplify an "if...else" statement.</p>


			<h1 id="contAsciiTable">ASCII Table</h1>	
			<table id="AsciiTable">
				<tr>
					<td>Alpha curl</td>
					<th>&#64;</th>
					<td><code>&amp;&#35;64&#59;</code></td>
				</tr>
				<tr>
					<td>Ampersand</td>
					<th>&amp;</th>
					<td><code>&amp;amp&#59;</code></td>
				</tr>
				<tr>
					<td>Angle brackets</td>
					<th>&lt; &gt;</th>
					<td><code>&amp;lt&#59;</code> <code>&amp;gt&#59;</code></td>
				</tr>
				<tr>
					<td>Asterisk</td>
					<th>&#42;</th>
					<td><code>&amp;&#35;42&#59;</code></td>
				</tr>
				<tr>
					<td>Backslash</td>
					<th>&#92;</th>
					<td><code>&amp;&#35;92&#59;</code></td>
				</tr>
				<tr>
					<td>Colon</td>
					<th>&#58;</th>
					<td><code>&amp;&#35;58&#59;</code></td>
				</tr>
				<tr>
					<td>Comma</td>
					<th>&#44;</th>
					<td><code>&amp;&#35;44&#59;</code></td>
				</tr>
				<tr>
					<td>Copyright</td>
					<th>&copy;</th>
					<td><code>&amp;copy&#59;</code></td>
				</tr>
				<tr>
					<td>Curley brackets</td>
					<th>&#123; &#125;</th>
					<td><code>&amp;&#35;123&#59;</code> <code>&amp;&#35;125&#59;</code></td>
				</tr>
				<tr>
					<td>Degree</td>
					<th>&deg;</th>
					<td><code>&amp;deg&#59;</code></td>
				</tr>
				<tr>
					<td>Division</td>
					<th>&divide;</th>
					<td><code>&amp;divide&#59;</code></td>
				</tr>
				<tr>
					<td>Dollar</td>
					<th>&#36;</th>
					<td><code>&amp;&#35;36&#59;</code></td>
				</tr>
				<tr>
					<td>Equals</td>
					<th>&#61;</th>
					<td><code>&amp;&#35;61&#59;</code></td>
				</tr>
				<tr>
					<td>Euro</td>
					<th>&euro;</th>
					<td><code>&amp;euro&#59;</code></td>
				</tr>
				<tr>
					<td>Exclamation</td>
					<th>&#33;</th>
					<td><code>&amp;&#35;33&#59;</code></td>
				</tr>
				<tr>
					<td>Forwardslash</td>
					<th>&#47;</th>
					<td><code>&amp;&#35;47&#59;</code></td>
				</tr>
				<tr>
					<td>Hyphen</td>
					<th>&#45;</th>
					<td><code>&amp;&#35;45&#59;</code></td>
				</tr>
				<tr>
					<td>Multiplication</td>
					<th>&times;</th>
					<td><code>&amp;times&#59;</code></td>
				</tr>
				<tr>
					<td>Number</td>
					<th>&#35;</th>
					<td><code>&amp;&#35;35&#59;</code></td>
				</tr>
				<tr>
					<td>Parenthesis</td>
					<th>&#40; &#41;</th>
					<td><code>&amp;&#35;40&#59;</code> <code>&amp;&#35;41&#59;</code></td>
				</tr>
				<tr>
					<td>Percent</td>
					<th>&#37;</th>
					<td><code>&amp;&#35;37&#59;</code></td>
				</tr>
				<tr>
					<td>Per mille</td>
					<th>&permil;</th>
					<td><code>&amp;permil&#59;</code></td>
				</tr>
				<tr>
					<td>Period</td>
					<th>&#46;</th>
					<td><code>&amp;&#35;46&#59;</code></td>
				</tr>
				<tr>
					<td>Plus</td>
					<th>&#43;</th>
					<td><code>&amp;&#35;43&#59;</code></td>
				</tr>
				<tr>
					<td>Plus&#45;minus</td>
					<th>&plusmn;</th>
					<td><code>&amp;plusmn&#59;</code></td>
				</tr>
				<tr>
					<td>Pound</td>
					<th>&pound;</th>
					<td><code>&amp;pound&#59;</code></td>
				</tr>
				<tr>
					<td>Question</td>
					<th>&#63;</th>
					<td><code>&amp;&#35;63&#59;</code></td>
				</tr>
				<tr>
					<td>Quotation (double)</td>
					<th>&quot;</th>
					<td><code>&amp;quot&#59;</code></td>
				</tr>
				<tr>
					<td>Quotation (single)</td>
					<th>&#39;</th>
					<td><code>&amp;&#35;39&#59;</code></td>
				</tr>
				<tr>
					<td>Section</td>
					<th>&sect;</th>
					<td><code>&amp;sect&#59;</code></td>
				</tr>
				<tr>
					<td>Semicolon</td>
					<th>&#59;</th>
					<td><code>&amp;&#35;59&#59;</code></td>
				</tr>
				<tr>
					<td>Space</td>
					<th>&#32;</th>
					<td><code>&amp;&#35;32&#59;</code></td>
				</tr>
				<tr>
					<td>Square brackets</td>
					<th>&#91; &#93;</th>
					<td><code>&amp;&#35;91&#59;</code> <code>&amp;&#35;93&#59;</code></td>
				</tr>
				<tr>
					<td>Trademark</td>
					<th>&trade;</th>
					<td><code>&amp;trade&#59;</code></td>
				</tr>
				<tr>
					<td>Trademark (registered)</td>
					<th>&reg;</th>
					<td><code>&amp;reg&#59;</code></td>
				</tr>
				<tr>
					<td>Underscore</td>
					<th>&#95;</th>
					<td><code>&amp;&#35;95&#59;</code></td>
				</tr>
				<tr>
					<td>Vertical bar</td>
					<th>&#124;</th>
					<td><code>&amp;&#35;124&#59;</code></td>
				</tr>
				<tr>
					<td>Letter &AElig;</td>
					<th>&AElig; &aelig;</th>
					<td><code>&amp;&#35;AElig&#59;</code> <code>&amp;&#35;aelig&#59;</code></td>
				</tr>
				<tr>
					<td>Letter &Oslash;</td>
					<th>&Oslash; &oslash;</th>
					<td><code>&amp;&#35;Oslash&#59;</code> <code>&amp;&#35;oslash&#59;</code></td>
				</tr>
				<tr>
					<td>Letter &Aring;</td>
					<th>&Aring; &aring;</th>
					<td><code>&amp;&#35;Aring&#59;</code> <code>&amp;&#35;aring&#59;</code></td>
				</tr>
			</table>


			<h1 id="contAdditionalResources">Additional Resources</h1>
			<ul class="no-indent">
				<li><a href="https://discuss.codecademy.com/">CodeCademy Forums</a></li>
				<li><a href="https://developer.mozilla.org/en-US/">MDN Web Docs</a></li>
				<li><a href="https://www.w3.org/TR/CSS2/selector.html">W3</a></li>
				<li><a href="https://css-tricks.com/">CSS-Tricks</a></li>
				<li><a href="https://dev.to/">DEV Community</a></li>
				<li><a href="https://stackoverflow.com/">Stack Overflow</a></li>
				<li><a href="https://caniuse.com/">Can I use</a></li>
				<li><a href="https://repl.it/">Repl.it</a></li>
				<li><a href="https://eloquentjavascript.net/">Eloquent JavaScript</a> - a free e-book that can be used instead of or with JavaScript & JQuery</li>
		</div>
		<div class="col-2"></div>
	</div>
</div>

<?php include('./components/footer.html'); ?>

<script src="scripts/main.js"></script>

</body>
</html>