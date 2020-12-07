<?php require('components/stdBOF.html');?>
<title>Home</title>
<?php require('components/stdMOF.html');?>

<div class="wrapper">

	<div class="ColorPaletteWrapper">
		<div class="ColorPalette">
			<div class="ColorPaletteSwatches">
				<div class="ColorPaletteShade hasDarkText" style="background-color: #F9FAFB;">
					<span class="ColorPaletteLabel">Lighter</span>
					<div class="ColorPaletteValue">#F9FAFB</div>
				</div>
				<div class="ColorPaletteShade hasDarkText" style="background-color: #F4F6F8;">
					<span class="ColorPaletteLabel">Light</span>
					<div class="ColorPaletteValue">#F4F6F8</div>
				</div>
				<div class="ColorPaletteShade hasDarkText isExpanded" style="background-color: #DFE3E8;">
					<span class="ColorPaletteLabel">Sky</span>
					<div class="ColorPaletteValue">#DFE3E8</div>
				</div>
				<div class="ColorPaletteShade hasDarkText" style="background-color: #C4CDD5;">
					<span class="ColorPaletteLabel">Dark</span>
					<div class="ColorPaletteValue">#C4CDD5</div>
				</div>
			</div>
		</div>
		<div class="ColorPalette">
			<div class="ColorPaletteSwatches">
				<div class="ColorPaletteShade hasDarkText" style="background-color: #919EAB;">
					<span class="ColorPaletteLabel">Lightest</span>
					<div class="ColorPaletteValue">#919EAB</div>
				</div>
				<div class="ColorPaletteShade" style="background-color: #637381;">
					<span class="ColorPaletteLabel">Lighter</span>
					<div class="ColorPaletteValue">#637381</div>
				</div>
				<div class="ColorPaletteShade" style="background-color: #454F5B;">
					<span class="ColorPaletteLabel">Light</span>
					<div class="ColorPaletteValue">#454F5B</div>
				</div>
				<div class="ColorPaletteShade isExpanded" style="background-color: #212B36;">
					<span class="ColorPaletteLabel">Ink</span>
					<div class="ColorPaletteValue">#212B36</div>
				</div>
			</div>
		</div>
		<div class="ColorPalette">
			<div class="ColorPaletteSwatches">
				<div class="ColorPaletteShade hasDarkText" style="background-color: #B3B5CB;">
					<span class="ColorPaletteLabel">Light</span>
					<div class="ColorPaletteValue">#B3B5CB</div>
				</div>
				<div class="ColorPaletteShade isExpanded" style="background-color: #43467F;">
					<span class="ColorPaletteLabel">Title bar</span>
					<div class="ColorPaletteValue">#43467F</div>
				</div>
				<div class="ColorPaletteShade" style="background-color: #1C2260;">
					<span class="ColorPaletteLabel">Dark</span>
					<div class="ColorPaletteValue">#1C2260</div>
				</div>
				<div class="ColorPaletteShade" style="background-color: #00044C;">
					<span class="ColorPaletteLabel">Darker</span>
					<div class="ColorPaletteValue">#00044C</div>
				</div>
			</div>
		</div>
		<div class="ColorPalette">
			<div class="ColorPaletteSwatches">
				<div class="ColorPaletteShade hasDarkText" style="background-color: #F6F0FD;">
					<span class="ColorPaletteLabel">Lighter</span>
					<div class="ColorPaletteValue">#F6F0FD</div>
				</div>
				<div class="ColorPaletteShade hasDarkText" style="background-color: #E3D0FF;">
					<span class="ColorPaletteLabel">Light</span>
					<div class="ColorPaletteValue">#E3D0FF</div>
				</div>
				<div class="ColorPaletteShade isExpanded" style="background-color: #9C6ADE;">
					<span class="ColorPaletteLabel">Purple</span>
					<div class="ColorPaletteValue">#9C6ADE</div>
				</div>
				<div class="ColorPaletteShade" style="background-color: #50248F;">
					<span class="ColorPaletteLabel">Dark</span>
					<div class="ColorPaletteValue">#50248F</div>
				</div>
				<div class="ColorPaletteShade" style="background-color: #230051;">
					<span class="ColorPaletteLabel">Darker</span>
					<div class="ColorPaletteValue">#230051</div>
				</div>
				<div class="ColorPaletteShade hasDarkText">
					<span class="ColorPaletteLabel">Text</span>
					<div class="ColorPaletteValue">#50495A</div>
				</div>
			</div>
		</div>
	</div>

	<h1>HTML</h1>
	<h2>1 Structure</h2>

	<?php include('content/html_structure_example-1.html'); ?>

	<p>The opening <code>&lt;html&gt;</code> tag indicates that anything between it and a closing <code>&lt;/html&gt;</code> tag is HTML code.</p>
	<p>The <code>&lt;body&gt;</code> tag indicates that anything between it and the closing <code>&lt;/body&gt;</code> tag should be shown inside the main browser window.</p>
	<p>Words between <code>&lt;h1&gt;</code> and <code>&lt;/h1&gt;</code> are a main heading.</p>
	<p>Words between <code>&lt;h2&gt;</code> and <code>&lt;/h2&gt;</code> form a sub-heading.</p>
	<p>A paragraph of text appears between the <code>&lt;p&gt;</code> and <code>&lt;/p&gt;</code> tags.</p>
	<p>The closing <code>&lt;/body&gt;</code> tag indicates the end of what should appear in the main browser window.</p>
	<p>The closing <code>&lt;/html&gt;</code> tag indicates that it is the end of the HTML code.</p>

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

	<h2>3 Lists</h2>

	<h2>4 Links</h2>

	<h2>5 Images</h2>

	<h2>6 Tables</h2>
	<h3>HTML</h3>
	<h3>CSS</h3>
	

	<h2>7 Forms</h2>

	<h1>CSS</h1>
	<h2>Selectors</h2>
	<?php include('content/css_selectors_table-1.html'); ?>


	<h1>Additional Resources</h1>
	<ul style="font-size:1.6rem; list-style: none;">
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

<?php require('components/stdEOF.html'); ?>