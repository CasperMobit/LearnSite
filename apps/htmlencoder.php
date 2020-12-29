<!DOCTYPE html>
<html lang="en">
<head>
	<title>HTML Encoder</title>
	<?php require('../components/headContent.html');?>
</head>
<body>

<?php include('../components/header.html'); ?>

<div class="row" id="wrapper">
    <div class="col-2"></div>
    <div class="col-8 content">

        <h1>HTML Encoder</h1>
        <p>Input the text you want to encode:</p>
        <textarea id="htmlCodeInput" rows="10">Type here...</textarea>
        <button id="submitHtmlBtn">Encode</button>

        <div style="margin-top:2em;">
            <h3>Result</h3>
            <div id="htmlEncodeResult" style="line-height:1.5;">This is the result</div>
        </div>

    </div>
    <div class="col-2"></div>
</div>

<script src="../js/html-encoder.js"></script>
</body>
</html>