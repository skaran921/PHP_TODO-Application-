// ********************LoginFormValidation*****************************
function validateLogin() {
  let email = $("#email").val();
  let password = $("#password").val();
  if (email.trim().length == 0) {
    $("#errorMessage").text("Email is required");
    $("#loginAlertBox").show();
  } else if (password.trim().length == 0) {
    $("#errorMessage").text("Password is required");
    $("#loginAlertBox").show();
  } else if (!email.includes("@") || !email.includes(".")) {
    $("#errorMessage").text("Email is not valid");
    $("#loginAlertBox").show();
  } else {
    checkAuthentication(email, password);
    $("#loginAlertBox").hide();
  }
}
// ********************LoginFormValidation*****************************

// ********************forgotPasswordValidation*****************************
function forgotPasswordValidation() {
  let email = $("#emailForForgotPassword").val();
  if (email.trim().length == 0) {
    $("#forgotPsswordAlertBoxText").text("Email is required");
    $("#forgotPsswordAlertBox").show();
  } else if (!email.includes("@") || !email.includes(".")) {
    $("#forgotPsswordAlertBoxText").text("Email is not valid");
    $("#forgotPsswordAlertBox").show();
  } else {
    $("#forgotPsswordAlertBox").hide();
  }
}
// ********************forgotPasswordValidation*****************************

// ********************createUserValidation*****************************
function createUserValidation() {
  let firstName = $("#firstName").val();
  let lastName = $("#lastName").val();
  let email = $("#emailForNewUser").val();
  let password = $("#passwordForNewUser").val();
  $("#createAccountAlertBoxForSuccess").hide();
  if (firstName.trim().length == 0) {
    $("#createAccountAlertText").text("First Name is required");
    $("#createAccountAlertBox").show();
  } else if (
    firstName.includes("0") ||
    firstName.includes("1") ||
    firstName.includes("2") ||
    firstName.includes("3") ||
    firstName.includes("4") ||
    firstName.includes("5") ||
    firstName.includes("6") ||
    firstName.includes("7") ||
    firstName.includes("8") ||
    firstName.includes("9") ||
    firstName.includes("@") ||
    firstName.includes(".") ||
    firstName.includes("#") ||
    firstName.includes("$") ||
    firstName.includes("%") ||
    firstName.includes("&") ||
    firstName.includes("*")
  ) {
    $("#createAccountAlertText").text("First Name is not valid");
    $("#createAccountAlertBox").show();
  } else if (
    lastName.includes("0") ||
    lastName.includes("1") ||
    lastName.includes("2") ||
    lastName.includes("3") ||
    lastName.includes("4") ||
    lastName.includes("5") ||
    lastName.includes("6") ||
    lastName.includes("7") ||
    lastName.includes("8") ||
    lastName.includes("9") ||
    lastName.includes("@") ||
    lastName.includes(".") ||
    lastName.includes("#") ||
    lastName.includes("$") ||
    lastName.includes("%") ||
    lastName.includes("&") ||
    lastName.includes("*")
  ) {
    $("#createAccountAlertText").text("Last Name is not valid");
    $("#createAccountAlertBox").show();
  } else if (lastName.trim().length == 0) {
    $("#createAccountAlertText").text("Last Name is required");
    $("#createAccountAlertBox").show();
  } else if (email.trim().length == 0) {
    $("#createAccountAlertText").text("Email is required");
    $("#createAccountAlertBox").show();
  } else if (!email.includes("@") || !email.includes(".")) {
    $("#createAccountAlertText").text("Email is not valid");
    $("#createAccountAlertBox").show();
  } else if (password.length == 0) {
    $("#createAccountAlertText").text("Password is required");
    $("#createAccountAlertBox").show();
  } else if (password.length < 8) {
    $("#createAccountAlertText").text(
      "Password must have at least eight characters"
    );
    $("#createAccountAlertBox").show();
  } else {
    createNewUserAccount(firstName, lastName, email, password);
    $("#createAccountAlertBox").hide();
  }
}
// ********************createUserValidation*****************************

// ******************************************createNewUserAccount*********************************
function createNewUserAccount(firstName, lastName, email, password) {
  let url = "./api/create_account.php";
  $.post(
    url,
    {
      firstName: firstName,
      lastName: lastName,
      email: email,
      password: password
    },
    data => {
      jsonParseData = JSON.parse(data);
      if (jsonParseData.result == "Success") {
        $("#createAccountAlertBox").hide();
        $("#createAccountAlertTextForSuccess").text(
          "Account has been created."
        );
        $("#createAccountAlertBoxForSuccess").show();

        $("#firstName").val("");
        $("#lastName").val("");
        $("#emailForNewUser").val("");
        $("#passwordForNewUser").val("");
      } else {
        $("#createAccountAlertBoxForSuccess").hide();
        $("#createAccountAlertText").text(`${jsonParseData.result}`);
        $("#createAccountAlertBox").show();
      }
    }
  );
}
// ******************************************createNewUserAccount end*********************************

// ******************************************checkAuthentication*********************************
function checkAuthentication(email, password) {
  let url = "./api/login.php";
  $.post(
    url,
    {
      email: email,
      password: password
    },
    data => {
      jsonData = JSON.parse(data);

      if (jsonData.result == "Success") {
        $("#loginAlertBox").hide();
        $("#loginAlertBoxTextForSuccess").text(`${jsonData.result}`);
        $("#loginAlertBoxForSuccess").show();
        window.open("./dashboard/index.php", "_self");
      } else {
        $("#loginAlertBoxForSuccess").hide();
        $("#errorMessage").text(`${jsonData.result}`);
        $("#loginAlertBox").show();
      }
    }
  );
}
// ******************************************checkAuthentication end*********************************
