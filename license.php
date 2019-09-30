<!DOCTYPE html>
<html>

    <head>
        <!-- Meta tags -->
        <title>revoccmsys</title>
        <!-- Links -->
        <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:400,500&display=swap" rel="stylesheet"> 
        <link type="text/css" rel="stylesheet" href="css/core.css" />
        <!-- Scripts -->
    </head>

    <body>

        <?php require("scripts/header.php"); ?>

        <div class="container-medium">

            <ul>

                <li class="left">

                    <h2>Client devices</h2>

                </li>

                <li class="left nav-block-list">

                    <a href="#"><p>Current</p></a>

                </li>

                <li class="left nav-block-list">

                    <a href="#"><p>Completed</p></a>
                    
                </li>

            </ul>

            <table>
                <tr id="current_devices_title">
                    <td>Software</td>
                    <td>Company</td>
                    <td>Original user</td>
                    <td>First use</td>
                    <td>More info</td>
                </tr>
                <tr>
                    <td>MS Office 2010</td>
                    <td>Palmers</td>
                    <td>Phill</td>
                    <td>30/09/19</td>
                    <td><a href="">See full license</a></td>
                </tr>
            </table>

        </div>

        <?php require("scripts/footer.php"); ?>

    </body>

</html>