<!DOCTYPE html>
<html lang="en">
<head>
	<title>API | LearnSite</title>
	<?php require('components/headContent.html');?>
</head>
<body>

<?php include('components/header.html'); ?>

<div id="wrapper">
    <div class="row">
        <div class="col-12">
            <h1 class="heroTitle">API Guide</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8 content noTopMargin">
            <h1>HTML Document Setup</h1>
            <p>When setting up a new page, use the following structure.</p>
            <div class="codeBlock">&lt;&#33;DOCTYPE&#32;html&gt;<br>&lt;html&#32;lang&#61;&quot;en&quot;&gt;<br>&lt;head&gt;<br><span style="margin-left:2rem;">&lt;title&gt;PageName&#32;&#124;&#32;LearnSite&lt;&#47;title&gt;</span><br><span style="margin-left:2rem;">&lt;&#63;php&#32;require&#40;&#39;components&#47;headContent&#46;html&#39;&#41;&#59;&#63;&gt;</span><br>&lt;&#47;head&gt;<br>&lt;body&gt;<br><br><span style="margin-left:2rem;">&lt;&#33;&#45;&#45;&#32;HEADER&#32;&#45;&#45;&gt;</span><br><span style="margin-left:2rem;">&lt;&#63;php&#32;include&#40;&#39;&#46;&#47;components&#47;header&#46;html&#39;&#41;&#59;&#32;&#63;&gt;</span><br><br><span style="margin-left:2rem;">&lt;&#33;&#45;&#45;&#32;WRAPPER&#32;&#45;&#45;&gt;</span><br><span style="margin-left:2rem;">&lt;div&#32;id&#61;&quot;wrapper&quot;&gt;</span><br><span style="margin-left:4rem;">&lt;div&#32;class&#61;&quot;row&quot;&gt;</span><br><span style="margin-left:6rem;">&lt;div&#32;class&#61;&quot;col&#45;12&quot;&gt;&lt;&#47;div&gt;</span><br><span style="margin-left:4rem;">&lt;&#47;div&gt;</span><br><span style="margin-left:2rem;">&lt;&#47;div&gt;</span><br><br><span style="margin-left:2rem;">&lt;&#33;&#45;&#45;&#32;FOOTER&#32;&#45;&#45;&gt;</span><br><span style="margin-left:2rem;">&lt;&#63;php&#32;include&#40;&#39;&#46;&#47;components&#47;footer&#46;html&#39;&#41;&#59;&#32;&#63;&gt;</span><br><br>&lt;&#47;body&gt;<br>&lt;&#47;html&gt;</div>

            <h2>Adding a Hero Title</h2>
            <p>Add the following code right after the <code>#wrapper</code> div to create a hero title on the page.</p>
            <div class="codeBlock">&lt;div&#32;class&#61;&quot;row&quot;&gt;<br><span style="margin-left:2rem;">&lt;div&#32;class&#61;&quot;col&#45;12&quot;&gt;</span><br><span style="margin-left:4rem;">&lt;h1&#32;class&#61;&quot;heroTitle&quot;&gt;HERO&#32;TITLE&lt;&#47;h1&gt;</span><br><span style="margin-left:2rem;">&lt;&#47;div&gt;</span><br>&lt;&#47;div&gt;</div>

            <h1>Styling</h1>
            <p>The website is styled using <abbr title="Syntactically Awesomes Style Sheets">Sass</abbr>.</p>

            <h2>Color</h2>
            <p>Use the <code>Color()</code> function to assign colors.</p>

            <h1>Not categorized</h1>
            <h2>Code Examples</h2>
            <p>Insert inline code within the <code>&lt;code&gt;</code> and <code>&lt;&#47;code&gt;</code> tags.</p>
            <p>Insert blocks of code within the <code>&lt;div&#32;class&#61;&quot;codeBlock&quot;&gt;</code> and <code>&lt;&#47;div&gt;</code> tags.</p>
        </div>
        <div class="col-2"></div>
    </div>
</div>

<!-- FOOTER -->
<?php include('components/footer.html'); ?>

</body>
</html>