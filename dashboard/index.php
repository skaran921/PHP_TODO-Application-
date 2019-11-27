<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    //    include header_imports
    include "./include/header_imports.php";
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./css/index.css">
</head>

<body>

    <?php
    //    include navbar
    include "./include/navbar.php";
    ?>
    <!-- ****************************Tabs ************************** -->
    <div class="uk-padding uk-padding-remove-bottom">
        <ul class="uk-flex-center" uk-tab>
            <li class="uk-active"><a href="#"><span class="uk-badge">1</span> Todo</a></li>
            <li><a href="#"><span class="uk-badge">0</span> Notes</a></li>
            <li><a href="#"><span class="uk-badge">0</span> Links</a></li>
        </ul>
    </div>
    <!-- ****************************Tabs ************************** -->


    <!-- ****************Main**************** -->
    <div class="uk-margin uk-padding bg-lightWhite">
        <div class="uk-child-width-1-3@m uk-grid-match" uk-grid>
            <div>
                <div class="uk-card uk-card-default uk-card-body" uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                    <h3 class="uk-card-title">27 Nov, Wednesday</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body" uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                    <h3 class="uk-card-title">27 Nov, Wednesday</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body" uk-scrollspy="cls: uk-animation-slide-right; repeat: true">
                    <h3 class="uk-card-title">26 Nov, Tuesday</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <!-- *********************************1st row ************************* -->
            <div>
                <div class="uk-card uk-card-default uk-card-body" uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                    <h3 class="uk-card-title">25 Nov, Monday</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body" uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                    <h3 class="uk-card-title">25 Nov, Monday</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body" uk-scrollspy="cls: uk-animation-slide-right; repeat: true">
                    <h3 class="uk-card-title">25 Nov, Monday</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
    </div>

    </div>
    <!-- ****************Main**************** -->

    <!-- This is the addTodoModel -->
    <div id="addTodoModel" uk-modal>
        <div class="uk-modal-dialog uk-modal-body">
            <button type="button" class="uk-modal-close-default" uk-close></button>
            <h2 class="uk-modal-title">
                <span uk-icon="icon: plus-circle;ratio: 2.5" style="font-size:30px"></span>
                New Todo
            </h2>
            <p>
                <center>
                    <form action="">

                        <!-- ********************** alertBoxSuccess ************************-->
                        <div class="uk-alert-success" id="createAccountAlertBoxForSuccess" uk-alert style="display:none;">

                            <p id="createTodoAlertTextForSuccess"></p>
                        </div>
                        <!-- ********************** alertBoxSuccess ************************-->

                        <!-- ********************** alertBoxDanger ************************-->
                        <div class="uk-alert-warning" id="createAccountAlertBox" uk-alert style="display:none;">

                            <p id="createTodoAlertText"></p>
                        </div>
                        <!-- ********************** alertBoxDanger ************************-->
                        <!-- first Name input box -->
                        <div class="uk-margin">
                            <div class="uk-inline">
                                <span class="uk-form-icon" uk-icon="icon: calendar"></span>
                                <input type="text" name="date" id="date" class="uk-input myInputBox" required placeholder="Date" />
                            </div>
                        </div>
                        <!-- first Name input box -->

                        <!-- last Name input box -->
                        <div class="uk-margin">
                            <div class="uk-inline">
                                <span class="uk-form-icon" uk-icon="icon: clock"></span>
                                <input type="text" name="time" id="time" class="uk-input myInputBox" required placeholder="Last Name" />
                            </div>
                        </div>
                        <!-- last Name input box -->


                        <!-- passwod input box -->
                        <div class="uk-margin">
                            <div class="uk-inline">
                                <span class="uk-form-icon" uk-icon="icon: pencil "></span>
                                <textarea type="password" name="passwordForNewUser" id="passwordForNewUser" class="uk-input myInputBox" required placeholder="Todo"></textarea>
                            </div>
                        </div>
                        <!-- password input box -->

                        <!-- button -->
                        <div class="uk-margin">
                            <div class="uk-inline">
                                <button type="button" class="uk-button uk-button-secondary" style="background-color:#1BCA9B;color:#fff" onclick="createUserValidation()">
                                    <span class="uk-form-icon" uk-icon="icon:check; ratio:1.2 " style="color:#fff"></span>&nbsp;Save Todo
                                </button>
                            </div>
                        </div>
                        <!-- button -->
                    </form>
                </center>

            </p>
        </div>
    </div>
    <!-- ********************************Floating Action Button *********************** -->
    <div class="floatingActionButton uk-animation-scale-down" uk-toggle="target: #addTodoModel">
        <span uk-icon="icon:plus"></span>
    </div>
    <?php
    //    include header_imports
    include "./include/footer_imports.php";
    ?>
</body>

</html>