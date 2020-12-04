<?php require('components/stdBOF.html');?>
<title>Home</title>
<?php require('components/stdMOF.html');?>

<header>
    <div class="siteName">LearnSite</div>
    <nav>
        <ul>
            <li>Home</li>
        </ul>
    </nav>
</header>

<div class="wrapper">

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
    
</div>

<?php require('components/stdEOF.html'); ?>