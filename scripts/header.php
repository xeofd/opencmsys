<?php 

$header_items = <<<EOL
<header id="header_outer" class="container-large header-outer">

<ul>

    <li class="left">

        <h1 class="orange">revoccmsys</h1>

    </li>

    <a href="/license.php" class="clear"><li class="right nav-block-head">

            <p>Licenses</p>

        </li></a>

    <a href="/components.php" class="clear"><li class="right nav-block-head">

        <p>Client devices</p>

    </li></a>

</ul>

</header>

<nav class="container-large">

<ul>

    <a href="/newcomponent.php" class="clear"><li class="left nav-block">

        <p>New client component</p>

    </li></a>

    <a href="/newlicense.php" class="clear"><li class="left nav-block">

        <p>New software license</p>

    </li></a>

    <li class="left nav-block nav-block-search">

        <form>

            <input type="search" placeholder="Search" class="nav-search" id="nav_search" name="nav_search" />

        </form>

    </li>

</ul>

</nav>
EOL;

echo($header_items);

?>