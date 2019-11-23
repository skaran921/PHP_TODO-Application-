<?php

$firstName = $_POST["firstName"];
$lastName = $_POST['lastName'];
$email = $_POST["email"];
$password = md5($_POST["password"]);

include "../db/db.php";

$sqlForAccountAlreadyExistOrNot = "SELECT USER_ID from users WHERE USER_EMAIL='$email'";
$result1 = $conn->query($sqlForAccountAlreadyExistOrNot);

//* determine number of rows result set */

$rowCount = $result1->num_rows;
if ($rowCount > 0) {
    // ************************************if account already exist ***********************
    $msg = array("result" => "Sorry Account already exist.");
    echo json_encode($msg);
    // ************************************if account already exist end***********************
} else {
    // ************************************if account already not exist***********************
    $sql = "INSERT INTO users(USER_FIRST_NAME,USER_LAST_NAME,USER_EMAIL,USER_PASSWORD)VALUES('$firstName','$lastName','$email','$password')";
    $result = $conn->query(($sql));
    if ($result == TRUE) {
        $msg = array("result" => "Success");
        echo json_encode($msg);
    } else {
        $msg = array("result" => "Something went wrong!");
        echo json_encode($msg);
    }
    // ************************************if account already not exist end***********************
}

//* close connection */

$conn->close();
