<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $seats_booked = $_POST['seats_booked'];
    $price = $_POST['price'];
    $movie_id = $_POST['movie_id'];

    $db = new mysqli('localhost', 'root', '', 'book');

    $Total_bill = $price * $seats_booked;

    $query = "insert into booking(movie_id, username, seats_booked, Total_bill) values('$movie_id', '$username', '$seats_booked', '$Total_bill')";
    $result = $db->query($query);

    if ($result->num_rows === 1) {
        echo "Booking successful.";
        header('Location: movies.php');
    } else {
        echo "Booking successful";
        header('Location: movies.php');
    }
    $db->close();
}
