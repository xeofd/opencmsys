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

            <header class="stack-background--secondary stack-font--primary" id="stack_container_head">
                
                <div class="stack-container">

                    <div class="stack-cell--5">

                        <h1 class="stack-title">openCCMSYS</h1>

                    </div>

                    <div class="stack-cell--5">

                        <nav class="stack-flex">

                            <a class="stack-nav-link" href="/"><div class="stack-nav-block">
                                <p>Home</p>
                            </div></a>

                            <a class="stack-nav-link" href="/hardware"><div class="stack-nav-block">
                                <p>Client components</p>
                            </div></a>

                            <a class="stack-nav-link" href="/licenses"><div class="stack-nav-block">
                                <p>Client Licenses</p>
                            </div></a>

                        </nav>

                    </div>

                </div>

            </header>

EOL;

echo($header);

?>