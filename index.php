<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    //    include header_imports
    include "./include/header_imports.php";
    ?>

    <!-- custom css -->
    <link rel="stylesheet" href="./css/index.css">
    <!-- custom css -->
    <title>TODO - Login</title>
</head>

<body>

    <!-- body content -->
    <!-- grid -->
    <div class="uk-text-center uk-grid-row-small uk-child-width-expand@s " uk-grid style="background-color:#3C40C6">
        <!-- firstHalf -->
        <div class="uk-card uk-card-default uk-card-body firstHalf ">
            <img src="./images/logo.png" />
            <h4> <span class="greyText">We are </span><b> Developer </b>
            </h4> Welcome Back, <br /> Please login to your account
            <!-- Login Form -->
            <div class="uk-padding">


                <div class="uk-card uk-card-default uk-card-body uk-card-hover">
                    <form>
                        <fieldset class="uk-fieldset">
                            <legend class="uk-legend">Login</legend>
                            <!-- ********************** alertBoxSuccess ************************-->
                            <div class="uk-alert-success" id="loginAlertBoxForSuccess" uk-alert style="display:none;">

                                <p id="loginAlertBoxTextForSuccess"></p>
                            </div>
                            <!-- ********************** alertBoxSuccess ************************-->
                            <!-- ********************** alertBox ************************-->
                            <div class="uk-alert-warning" id="loginAlertBox" uk-alert style="display:none;">

                                <p id="errorMessage">Email is required</p>
                            </div>
                            <!-- ********************** alertBox ************************-->

                            <!-- email input box -->
                            <div class="uk-margin">
                                <div class="uk-inline">
                                    <span class="uk-form-icon" uk-icon="icon: user"></span>
                                    <input type="email" name="email" id="email" class="uk-input myInputBox" required placeholder="Email" />
                                </div>

                            </div>
                            <!-- email input box -->

                            <!-- password input box -->
                            <div class="uk-margin">
                                <div class="uk-inline">
                                    <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                    <input type="password" name="password" id="password" class="uk-input myInputBox" required placeholder="Password" />
                                </div>
                            </div>
                            <!-- password input box -->

                            <!-- forgot Password -->
                            <div class="uk-margin">
                                <div class="uk-inline">
                                    <label style="float:left">
                                        <span class="uk-text-warning">Forgot Password ? </span>
                                        <span class="uk-text-success" uk-toggle="target: #forgotPasswordModal" style="cursor:pointer">
                                            click here
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <!-- forgot Password -->

                            <!-- buttons -->
                            <div class="uk-margin">
                                <div class="uk-inline">
                                    <button type="button" class="uk-button uk-button-secondary" onclick="validateLogin()">
                                        <span uk-icon="icon: sign-in"></span>
                                        Login</button>

                                    <button type="button" class="uk-button uk-button-primary" uk-toggle="target: #createNewAccountModal">
                                        <span uk-icon="icon: plus-circle"></span>
                                        Sign up
                                    </button>
                                </div>
                            </div>
                            <!-- buttons end-->

                        </fieldset>
                    </form>
                </div>

            </div>
            <!-- Login Form end -->

            <span class="uk-text-success">&copy; 2019</span>
        </div>
        <!-- firstHalf -->
        <!-- secondHalf -->
        <div class="uk-card uk-card-default uk-card-body secondHalf">
            <img src="./images/2.png" alt="">

            <div class="uk-margin bottomMessage">

                Now remember your every day task easily!

            </div>
            <img src="./images/01.png" width="70px" class="bottomLogo" />
        </div>
        <!-- secondHalf -->
    </div>


    <!-- forgot passwprd Modal -->
    <div id="forgotPasswordModal" uk-modal>
        <div class="uk-modal-dialog uk-modal-body">
            <button type="button" class="uk-modal-close-default" uk-close></button>
            <h2 class="uk-modal-title">
                Forgot Password
            </h2>
            <p>
                <center>
                    <form action="">
                        <!-- ********************** alertBox ************************-->
                        <div class="uk-alert-warning" id="forgotPsswordAlertBox" uk-alert style="display:none;">

                            <p id="forgotPsswordAlertBoxText"></p>
                        </div>
                        <!-- ********************** alertBox ************************-->
                        <!-- email input box -->
                        <div class="uk-margin">
                            <div class="uk-inline">
                                <span class="uk-form-icon" uk-icon="icon: user"></span>
                                <input type="email" name="emailForForgotPassword" id="emailForForgotPassword" class="uk-input myInputBox" required placeholder="Email" />
                            </div>
                        </div>
                        <!-- email input box -->

                        <!-- button -->
                        <div class="uk-margin">
                            <div class="uk-inline">
                                <button type="button" class="uk-button uk-button-danger" onclick="forgotPasswordValidation()">
                                    <span class="uk-form-icon" uk-icon="icon:link" style="color:#fff"></span> Send Link
                                </button>
                            </div>
                        </div>
                        <!-- button -->
                    </form>
                </center>

            </p>
        </div>

    </div>
    <!-- forgot password Modal End -->

    <!-- createNewAccountModal -->
    <div id="createNewAccountModal" uk-modal>
        <div class="uk-modal-dialog uk-modal-body">
            <button type="button" class="uk-modal-close-default" uk-close></button>
            <h2 class="uk-modal-title">
                <span uk-icon="icon: plus-circle;ratio: 2.5" style="font-size:30px"></span>
                Create Account
            </h2>
            <p>
                <center>
                    <form action="">

                        <!-- ********************** alertBoxSuccess ************************-->
                        <div class="uk-alert-success" id="createAccountAlertBoxForSuccess" uk-alert style="display:none;">

                            <p id="createAccountAlertTextForSuccess"></p>
                        </div>
                        <!-- ********************** alertBoxSuccess ************************-->

                        <!-- ********************** alertBoxDanger ************************-->
                        <div class="uk-alert-warning" id="createAccountAlertBox" uk-alert style="display:none;">

                            <p id="createAccountAlertText"></p>
                        </div>
                        <!-- ********************** alertBoxDanger ************************-->
                        <!-- first Name input box -->
                        <div class="uk-margin">
                            <div class="uk-inline">
                                <span class="uk-form-icon" uk-icon="icon: user"></span>
                                <input type="text" name="firstName" id="firstName" class="uk-input myInputBox" required placeholder="First Name" />
                            </div>
                        </div>
                        <!-- first Name input box -->

                        <!-- last Name input box -->
                        <div class="uk-margin">
                            <div class="uk-inline">
                                <span class="uk-form-icon" uk-icon="icon: user"></span>
                                <input type="test" name="lastName" id="lastName" class="uk-input myInputBox" required placeholder="Last Name" />
                            </div>
                        </div>
                        <!-- last Name input box -->

                        <!-- email input box -->
                        <div class="uk-margin">
                            <div class="uk-inline">
                                <span class="uk-form-icon" uk-icon="icon: mail  "></span>
                                <input type="email" name="emailForNewUser" id="emailForNewUser" class="uk-input myInputBox" required placeholder="Email" />
                            </div>
                        </div>
                        <!-- email input box -->

                        <!-- passwod input box -->
                        <div class="uk-margin">
                            <div class="uk-inline">
                                <span class="uk-form-icon" uk-icon="icon: lock "></span>
                                <input type="password" name="passwordForNewUser" id="passwordForNewUser" class="uk-input myInputBox" required placeholder="Password" />
                            </div>
                        </div>
                        <!-- password input box -->

                        <!-- button -->
                        <div class="uk-margin">
                            <div class="uk-inline">
                                <button type="button" class="uk-button uk-button-secondary" style="background-color:#1BCA9B;color:#fff" onclick="createUserValidation()">
                                    <span class="uk-form-icon" uk-icon="icon:check; ratio:1.2 " style="color:#fff"></span>&nbsp;Create Account
                                </button>
                            </div>
                        </div>
                        <!-- button -->
                    </form>
                </center>

            </p>
        </div>

    </div>
    <!-- createNewAccountModal End -->

    <!-- body content -->

    <?php
    //    include footer_imports
    include "./include/footer_imports.php";
    ?>
    <!-- include custom js -->
    <script src="js/validations/index.js"></script>
    <!-- include custom js -->
</body>

</html>