<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $ID = $_POST['movie_ID'];
    $db = new mysqli('localhost', 'root', '', 'book');

    $query = "delete from movie where movie_ID = '$ID'";

    if ($db->query($query) === TRUE) {
        echo "successful!";
        echo "<script>location.replace('adminHome.php')</script>";
    } else {
        echo "Unsuccessful.";
    }
    $db->close();
}
