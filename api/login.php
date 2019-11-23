<?php
session_start();
$email = $_POST["email"];
$password = md5($_POST["password"]);

$sql = "SELECT count(*) as rowCount, USER_ID FROM users WHERE USER_EMAIL= '$email' AND USER_PASSWORD ='$password'";
include "../db/db.php";
$result = $conn->query($sql);
if ($row = $result->fetch_assoc()) {
    if ($row["rowCount"] == 1) {
        //    ****************************account Exist***************************
        $msg = array("result" => "Success");
        echo json_encode($msg);
        //    ****************************account Exist***************************
        $_SESSION["TODO_USER_ID"] = $row["USER_ID"];
    } else {
        //    ****************************account not Exist***************************
        $msg = array("result" => "Username or password not matched!");
        echo json_encode($msg);
        //    ****************************account not Exist***************************
    }
} else {
    $msg = array("result" => "Something went wrong!");
    echo json_encode($msg);
}
