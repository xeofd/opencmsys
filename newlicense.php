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

            <h1>Log client equipment</h1>

            <form action="#" method="POST" id="new_component_form" name="new_component_form" class="orange">

                <ul>

                    <li class="left">

                        <ul>
                            
                            <li>
                                <p>Software</p>
                                <input type="text" name="client_software_name" id="client_software_name" class="input-text" placeholder="Software"/>                    
                            </li>

                            <li>
                                <p>Original User</p>
                                <input type="text" name="client_software_user" id="client_software_user" class="input-text" placeholder="Original user"/>
                            </li>

                            <li>
                                <p>Original PC</p>
                                <input type="text" name="client_software_pc" id="client_software_pc" class="input-text" placeholder="Original computer"/>
                            </li>

                            <li>
                                <p>Company</p>
                                <input type="text" name="client_software_company" id="client_software_company" class="input-text" placeholder="Company"/>
                            </li>

                        </ul>

                    </li>

                    <li class="left spacer"></li>

                    <li class="left">

                        <ul>
                            
                            <li>
                                <p>License Key</p>
                                <textarea name="client_software_key" id="client_software_key" class="input-text-area" placeholder="License Key"></textarea>
                            </li>

                            <li>
                                <p>First use</p>
                                <input type="date" name="client_component_first_contact" id="client_component_first_contact" class="input-text"/>
                            </li>

                            <li>
                                <input type="submit" name="client_component_submit" id="client_component_submit" class="input-button" value="Add license"/>
                            </li>

                        </ul>

                    </li>

                </ul>

            </form>

        </div>

        <?php require("scripts/footer.php"); ?>

    </body>

</html>