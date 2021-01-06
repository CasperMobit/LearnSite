const component_Header = document.getElementsByTagName('header').item(0);

component_Header.innerHTML = `
<div class="row">
    <div class="col-2"></div>
    <div class="col-8 content">
        <nav>
            <span id="Logo"><a href="http://localhost:3000/index.php">LearnSite</a></span>
            <ul class="nav-links">
                <li><a href="http://localhost:3000/index.php">Home</a></li>
                <li><a href="http://localhost:3000/layout.php">Layout</a></li>
                <li id="nav-link-js"><a href="http://localhost:3000/javascript.php">JavaScript</a>
                    <ul class="nav-sub-menu">
                        <li><a href="http://localhost:3000/apps/html-encoder.php">HTML Encoder</a></li>
                    </ul>
                </li>
                <li><a href="http://localhost:3000/api.php">API Guide</a></li>
                <button id="HamBrgBtn" onclick="ShowHamburgerMenu()">=</button>
            </ul>
        </nav>
    </div>
    <div class="col-2"></div>
</div>
`;