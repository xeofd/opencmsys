<!DOCTYPE html>
<html>

    <head>
        <?php require('scripts/tags.php') ?>
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
                            <td>Description</td>
                            <td>Link</td>
                        </tr>
                        <tr>
                            <td name="client_collection_date">24/09/19</td>
                            <td name="client_id">Glacier</td>
                            <td name="client_component">Dell Insperion</td>
                            <td name="client_problem_description">Network port broken</td>
                            <td name="component_link"><a href="#">Goto</a></td>
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