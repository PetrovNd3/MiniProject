<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $ID = $_POST['admin_ID'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $db = new mysqli('localhost', 'root', '', 'book');

    $query = "SELECT * from admin_login where admin_ID = '$ID' and username = '$username' and password = '$password'";
    $result = $db->query($query);

    if ($result->num_rows === 1) {
        echo "Login successful.";
        header('Location: movies.php');
    } else {
        echo "Invalid username or password.";
        header('Location: adminHOME.php');
    }
    $db->close();
}
