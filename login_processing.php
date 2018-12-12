<?php
include 'config.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "select * from user WHERE email='" . $email . "' and password='" . $password . "'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    session_start();
    foreach($result as $res) {
        $_SESSION['email'] = $res['email'];
        $_SESSION['user'] = $res['name'];
        header("Location: index.php");
    }

}

?>