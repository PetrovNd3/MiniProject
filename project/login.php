<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $db = new mysqli('localhost', 'root', '', 'book');

    $query = "SELECT * from user_login where username = '$username' and password = '$password'";
    $result = $db->query($query);

    if ($result->num_rows === 1) {
        echo "Login successful.";
        header('Location: movies.php');
    } else {
        echo "Invalid username or password.";
    }
    $db->close();
}
?>