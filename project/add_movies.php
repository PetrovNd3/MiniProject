<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['movie_name'];
    $rating = $_POST['rating'];
    $price = $_POST['price'];
    $db = new mysqli('localhost', 'root', '', 'book');

    $query = "insert into movie(movie_name, rating, price) values ('$name', '$rating', '$price')";

    if ($db->query($query) === TRUE) {
        echo "successful!";
        echo "<script>location.replace('adminHome.php')</script>";
    } else {
        echo "Unsuccessful.";
    }
    $db->close();
}
?>