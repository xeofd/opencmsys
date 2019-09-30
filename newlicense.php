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
                                <input type="text" name="client_component" id="client_component" class="input-text" placeholder="Computer model"/>                    
                            </li>

                            <li>
                                <p>Original User</p>
                                <input type="text" name="client_component_user" id="client_component_user" class="input-text" placeholder="User"/>
                            </li>

                            <li>
                                <p>Company</p>
                                <input type="text" name="client_component_company" id="client_component_company" class="input-text" placeholder="Company"/>
                            </li>

                            <li>
                                <p>Company Contact</p>
                                <input type="text" name="client_company_contact" id="client_company_contact" class="input-text" placeholder="Company contact"/>
                            </li>

                        </ul>

                    </li>

                    <li class="left spacer"></li>

                    <li class="left">

                        <ul>
                            
                            <li>
                                <p>Description of problem</p>
                                <textarea name="client_problem_description" id="client_problem_description" class="input-text-area" placeholder="Clients problem"></textarea>
                            </li>

                            <li>
                                <p>First contact</p>
                                <input type="date" name="client_component_first_contact" id="client_component_first_contact" class="input-text"/>
                            </li>

                            <li>
                                <p>Collection Date</p>
                                <input type="date" name="client_component_first_contact" id="client_component_first_contact" class="input-text"/>
                            </li>

                            <li>
                                <p>Drop off date</p>
                                <input type="date" name="client_component_first_contact" id="client_component_first_contact" class="input-text"/>
                            </li>

                            <li>
                                <input type="submit" name="client_component_submit" id="client_component_submit" class="input-button" value="Add component"/>
                            </li>

                        </ul>

                    </li>

                </ul>

            </form>

        </div>

        <?php require("scripts/footer.php"); ?>

    </body>

</html>