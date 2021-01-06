<!DOCTYPE html>
<html lang="en">
<head>
	<title>Layout | LearnSite</title>
	<?php require('components/head-content.html');?>
</head>
<body>

<?php include('components/header.html'); ?>

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
		<div class="codeBlock">&#64;function&#32;MyFunction&#40;&#36;array&#44;&#32;&#36;element&#44;&#32;&#36;key&#58;&#32;null&#41;&#32;&#123;<br><span style="margin-left:2rem;">&#64;if&#32;&#36;key&#32;&#123;</span><br><span style="margin-left:4rem;">&#64;return&#32;map&#45;get&#40;map&#45;get&#40;&#36;array&#44;&#32;&#36;element&#41;&#44;&#32;&#36;key&#41;&#59;</span><br><span style="margin-left:2rem;">&#125;&#32;&#64;else&#32;&#123;</span><br><span style="margin-left:4rem;">&#64;return&#32;map&#45;get&#40;&#36;array&#44;&#32;&#36;element&#41;&#59;</span><br><span style="margin-left:2rem;">&#125;</span><br>&#125;</div>

		<p>Array structure:</p>
		<div class="codeBlock">&#36;myArray&#58;&#32;&#40;<br><span style="margin-left:2rem;">&#39;element&#45;1&#39;&#58;&#32;20px&#44;</span><br><span style="margin-left:2rem;">&#39;element&#45;2&#39;&#58;&#32;40px&#44;</span><br><span style="margin-left:2rem;">&#39;element&#45;3&#39;&#58;&#32;&#40;</span><br><span style="margin-left:4rem;">&#39;key&#45;1&#39;&#58;&#32;2em&#44;</span><br><span style="margin-left:4rem;">&#39;key&#45;2&#39;&#58;&#32;4em</span><br><span style="margin-left:2rem;">&#41;</span><br>&#41;&#59;</div>

		<p>You can now call for any value within the array structure using:</p>
		<div class="codeBlock">
			MyFunction&#40;&#36;myArray&#44;&#32;&#39;element&#45;1&#39;&#41;<span style="margin-left:7.3rem;">&#47;&#47;&#32;20px</span><br>
			MyFunction&#40;&#36;myArray&#44;&#32;&#39;element&#45;2&#39;&#41;<span style="margin-left:7.3rem;">&#47;&#47;&#32;40px</span><br>
			MyFunction&#40;&#36;myArray&#44;&#32;&#39;element&#45;3&#39;&#44;&#32;&#39;key&#45;1&#39;&#41;<span style="margin-left:2rem;">&#47;&#47;&#32;2em</span><br>
			MyFunction&#40;&#36;myArray&#44;&#32;&#39;element&#45;3&#39;&#44;&#32;&#39;key&#45;1&#39;&#41;<span style="margin-left:2rem;">&#47;&#47;&#32;4em</span>
		</div>
	</div>
	<div class="col-2"></div>
</div>

<?php include('components/footer.html'); ?>

</body>