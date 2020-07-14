<?php

session_start();
//connect to database
$conn = new mysqli($servername, $username, $passwd, $dbname);

$action = isset($_GET['action']) ? $_GET['action'] : '';

//delete button
if ($action == 'delete') {
    $uId = ($_GET['btnDelete']);
    $sql = "DELETE FROM tb_user WHERE id = $uId";
    $conn->query($sql);
    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";
    header("Location: index.php");
}

//submit button
if (isset($_POST['btnSubmit'])) {
    $fname = $_POST['input_Fname'];
    $lname = $_POST['input_Lname'];
    $gender = $_POST['input_Gender'];
    $address = $_POST['input_Address'];
    $sql = "INSERT INTO tb_user (first_name, last_name, gender, place) VALUES ('$fname','$lname','$gender','$address')";
    $conn->query($sql);
    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "success";
    header("Location: index.php");
}


