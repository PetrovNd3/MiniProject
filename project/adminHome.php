<?php

$db = new mysqli('localhost', 'root', '', 'book');


$query = "SELECT * FROM movie";
$result = $db->query($query);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Movies</title>
</head>

<title>Welcome to Login page</title>
<header style="padding:20px; text-align:left; background: aqua;">
    <h1 style="text-align: center;">ADMIN LOGIN PAGE</h1>
    <a href="admin_Login.html" style=" color: black">Logout</a>
    <a href="addMovies.html" style=" color: black; text-align: right;">Add Movies</a>
    <a href="DeleteMovies.html" style=" color: black">Delete Movie</a>
</header>

<style>
    td {
        padding-right: 20px;
    }
</style>

<body>
    <h2>List of Movies</h2>

    </tr>
    <?php while ($row = $result->fetch_assoc()) : ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Rating</th>
                <th>Price</th>
                <hr>
            <tr>
                <td><?php echo $row['movie_ID']; ?></td>
                <td><?php echo $row['movie_name']; ?></td>
                <td><?php echo $row['rating']; ?></td>
                <td><?php echo $row['price']; ?></td>
            </tr>
        <?php endwhile; ?>
        </table>
        <hr>
</body>

</html>

<?php
$db->close();
?>