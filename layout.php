<?php require('modules/stdSoF.html');?>
<title>Layout</title>
<style type="text/css">
    .margin {
        height: 100%;
        width: 200pt;

        background-color: #F5EB93;

        text-align: center;}
    .padding {
        height: 150pt;
        width: 150pt;
        margin: auto;

        border-color: #FF7939;
        border-style: solid;
        border-width: 6pt;

        background-color: #FFB2AE;}
</style>
<?php require('modules/stdHead.html');?>
<?php include('modules/header.html');?>

<div class="wrapper">
    <div class="margin">
        margin
        <div class="padding"></div>
    </div>
</div>

<?php require('modules/stdEoF.html'); ?>