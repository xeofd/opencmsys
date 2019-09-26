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

        <div class="container-large">

            <div class="split">

                <div class="container-small">

                    <h2>Current client devices</h2>

                    <table>
                        <tr id="current_devices_title">
                            <td>Date</td>
                            <td>Company</td>
                            <td>Model</td>
                            <td>Link</td>
                        </tr>
                        <tr>
                            <td>24/09/19</td>
                            <td>Glacier</td>
                            <td>Dell Insperion</td>
                            <td><a href="#">Goto</a></td>
                        </tr>
                    </table>

                </div>

                <div class="container-small">

                    <h2>Recent licenses</h2>

                    <table>
                        <tr id="recent_license_title">
                            <td>Date</td>
                            <td>Software</td>
                            <td>Company</td>
                            <td>Link</td>
                        </tr>
                        <tr>
                            <td>24/09/19</td>
                            <td>Office 2010</td>
                            <td>Palmers</td>
                            <td><a href="#">Goto</a></td>
                        </tr>
                    </table>

                </div>

            </div>


        </div>

        <?php require("scripts/footer.php"); ?>

    </body>

</html>