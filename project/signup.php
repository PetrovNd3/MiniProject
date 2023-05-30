
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $db = new mysqli('localhost', 'root', '', 'book');

    $query = "insert into user_login(name, username, password) values ('$name', '$username', '$password')";

    if ($db->query($query) === TRUE) {
        echo "Sign up successful!";
        echo "<script>location.replace('movies.php')</script>";
    } else {
        echo "Username repeated.";
    }
    $db->close();
}
?>