<?php 

$header = <<<EOL
<!DOCTYPE html>
<html>

    <head>
        <!-- META TAGS -->
        <title>openCCMSYS - Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- LINKS -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
        <link href="../../css/root.css" rel="stylesheet" />
        <link href="../../css/core.css" rel="stylesheet" />
        <link href="../../css/ui.css" rel="stylesheet" />
    </head>

    <body>

        <!-- START HEADER -->
        <header id="bloc_app_header_outer">

            <div class="bloc-container bloc-container--large bloc-container--flex" id="bloc_app_header_inner">

                <div class="bloc-cell--50pc" id="bloc_app_logo">

                    <h1>openCCMSYS</h1>

                </div>

                <nav class="bloc-cell--50pc bloc-container--flex bloc-container--justify-right" id="bloc_app_navigation">

                    <a href="/" class="bloc-navigation--block"><div>
                        <p>Home</p>
                    </div></a>

                    <a href="/hardware" class="bloc-navigation--block"><div>
                        <p>Hardware</p>
                    </div></a>

                    <a href="/software" class="bloc-navigation--block"><div>
                        <p>Software</p>
                    </div></a>

                    <a href="/settings" class="bloc-navigation--block"><div>
                        <p>Settings</p>
                    </div></a>

                    <a href="/accounts/signout" class="bloc-navigation--block"><div>
                        <p>Sign Out</p>
                    </div></a>

                </nav>

            </div>

        </header>

        <!-- END HEADER -->
EOL;

echo($header);

?>