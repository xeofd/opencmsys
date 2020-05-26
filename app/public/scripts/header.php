<?php 

$header = <<<EOL
<!DOCTYPE html>
<html>

<!DOCTYPE html>
<html>

    <head>

        <!-- Meta tags -->
        <title>openCCMSYS</title>
        <meta lang="en/gb" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Links -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
        <link href="/css/ui.css" rel="stylesheet" type="text/css" />
        <link href="/css/core.css" rel="stylesheet" type="text/css" />
        <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    </head>

    <body>

        <!-- Begin page content-->

        <header id="header_outer">
            
            <div class="ocms-container ocms-container--large ocms-container--flex" id="header_inner">

                <div class="ocms-cell--50pc">

                    <h1 class="ocms-logo">openCCMSYS</h1>

                </div>

                <div class="ocms-cell--50pc">

                    <!-- Site navigation -->

                    <nav class="ocms-container--flex ocms-container--flex-align-right">

                        <a href="/" class="ocms-nav--link"><div class="ocms-nav--block">
                            <p>Home</p>
                        </div></a>

                        <a href="/hardware" class="ocms-nav--link"><div class="ocms-nav--block">
                            <p>Hardware</p>
                        </div></a>

                        <a href="/licenses" class="ocms-nav--link"><div class="ocms-nav--block">
                            <p>Licenses</p>
                        </div></a>

                        <a href="/settings" class="ocms-nav--link"><div class="ocms-nav--block">
                            <p>Settings</p>
                        </div></a>

                    </nav>

                </div>

            </div>

        </header>

        <!-- Begin body content -->

        <main class="ocms-container ocms-container--large" id="main_outer">

EOL;

echo($header);

?>