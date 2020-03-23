<?php 

$header = <<<EOL
<!DOCTYPE html>
<html>

    <head>

        <!-- Meta tags -->
        <title>openCCMSYS</title>
        <!-- Links -->
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Roboto+Mono:400,700&display=swap" rel="stylesheet">
        <link href="../css/core.css" rel="stylesheet" type="text/css" />
        <!-- Scripts -->
        <script src="scripts/core.js"></script>
    
    </head>

    <body>

        <!-- Begin stack-design layout -->

        <div class="stack-full-container">

            <!-- Begin header content -->

            <header class="stack-container-head stack-background--secondary stack-font--primary" id="stack_container_head">
                
                <div class="stack-container">

                    <h1 class="stack-title">openCCMSYS</h1>

                    <div class="stack-spacer-horizontal"></div>

                    <nav class="stack-head-nav">

                        <ul>

                            <a href="/"><li class="stack-head-nav stack-nav-block">
                                <p>Home</p>
                            </li></a>

                            <a href="/hardware"><li class="stack-head-nav stack-nav-block">
                                <p>Client components</p>
                            </li></a>

                            <a href="/licenses"><li class="stack-head-nav stack-nav-block">
                                <p>Client Licenses</p>
                            </li></a>

                        </ul>

                    </nav>

                </div>

            </header>

EOL;

echo($header);

?>