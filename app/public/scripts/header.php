<?php 

$header = <<<EOL
<!-- Begin header content -->

<header class="stack-container-head stack-background--secondary stack-font--primary" id="stack_container_head">
    
    <div class="stack-container">

        <h1 class="stack-title">openCCMSYS</h1>

        <div class="stack-spacer-horizontal"></div>

        <nav class="stack-head-nav">

            <ul>

                <a href="index.php"><li class="stack-head-nav stack-nav-block">
                    <p>Home</p>
                </li></a>

                <a href="client-hardware.php"><li class="stack-head-nav stack-nav-block">
                    <p>Client components</p>
                </li></a>

                <a href="client-licenses.php"><li class="stack-head-nav stack-nav-block">
                    <p>Client Licenses</p>
                </li></a>

            </ul>

        </nav>

    </div>

</header>

EOL;

echo($header);

?>