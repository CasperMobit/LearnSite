<?php require('components/stdBOF.html');?>
<title>Home</title>
<?php require('components/stdMOF.html');?>

<header>
    <p class="title">LearnSite</p>
</header>

<div class="wrapper">
    <h1>HTML</h1>
    <h2>1 Structure</h2>

    <div class="codeBlock html">
        <code>
            <ul>
                <li>
                    <span class="tag">
                        &lt;!<span class="name">DOCTYPE</span> <span class="attr">html</span>&gt;
                    </span>
                </li>
                <li>
                    <span class="tag">
                        &lt;<span class="name">html</span> <span class="attr">lang</span>=<span class="string">"en-US"</span>&gt;
                    </span>
                    <ul>
                        <li>
                            <span class="tag">
                                &lt;<span class="name">head</span>&gt;
                            </span>
                            <ul>
                                <li>
                                    <span class="tag">
                                        &lt;<span class="name">title</span>&gt;
                                    </span>
                                    PageName
                                    <span class="tag">
                                        &lt;/<span class="name">title</span>&gt;
                                    </span>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <span class="tag">
                                &lt;/<span class="name">head</span>&gt;
                            </span>
                        </li>
                        <li>
                            <span class="tag">
                                &lt;<span class="name">body</span>&gt;
                            </span>
                            <ul>
                                <li>
                                    <span class="tag">
                                        &lt;<span class="name">h1</span>&gt;
                                    </span>
                                    Heading 1
                                    <span class="tag">
                                        &lt;/<span class="name">h1</span>&gt;
                                    </span>
                                </li>
                                <li>
                                    <span class="tag">
                                        &lt;<span class="name">p</span>&gt;
                                    </span>
                                    Body text
                                    <span class="tag">
                                        &lt;/<span class="name">p</span>&gt;
                                    </span>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <span class="tag">
                                &lt;/<span class="name">body</span>&gt;
                            </span>
                        </li>
                    </ul>
                </li>
                <li>
                    <span class="tag">
                        &lt;/<span class="name">html</span>&gt;
                    </span>
                </li>
            </ul>
        </code>
    </div>

    <h1>CSS</h1>
    <h2>Selectors</h2>
    <table id="CSS-Selectors">
        <tr>
            <th>Selector</th>
            <th>Meaning</th>
            <th>Example</th>
        </tr>
        <tr>
            <td>Universal selector</td>
            <td>Applies to all elements in the document</td>
            <td>
                <code>
                    <p>* { }</p>
                </code>
                <p>Targets all elements on the page</p>
            </td>
        </tr>
        <tr>
            <td>Type selector</td>
            <td>Matches element names</td>
            <td>
                <code>
                    <p>h1, h2, h3 { }</p>
                </code>
                <p>Targets the &lt;h1&gt;, &lt;h2&gt; and &lt;h3&gt; elements</p>
            </td>
        </tr>
        <tr>
            <td>Class selector</td>
            <td>Matches an element whose class attribute has a value that matches the one specified after the period (or full stop) symbol</td>
            <td>
                <code>
                    <p>.note { }</p>
                </code>
                <p>Targets any element whose class attribute has a value of note</p>
                <code>
                    <p>p.note { }</p>
                </code>
                <p>Targets only &lt;p&gt; elements whose class attribute has a value of note</p>
            </td>
        </tr>
    </table>
</div>

<?php require('components/stdEOF.html'); ?>