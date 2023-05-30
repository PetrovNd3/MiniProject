<?php
$db = new mysqli('localhost', 'root', '', 'book');

if ($db->connect_error)
    die("Connect failed: " . $db->connect_error);

$query = "select * from movie";
$result = $db->query($query);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Movies available</title>
</head>
<header style="padding:20px; text-align:center; background: aqua;">
<a href= "index.html"> Logout</a>
    <h2>Movies</h2>
</header>
<style>
    .card h4 {
        display: inline-block;
    }

    body {
        margin: 0;
    }

    .grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-gap: 30px;
        padding: 30px;
    }

    .card {
        background-color: white;
        padding: 20px;
        text-align: center;
        box-shadow: 0 4px 8px 0 rgba(2, 2, 2, 0.2);
        transition: all 2s ease-in-out;
    }

    .visi {
        content-visibility: hidden;
    }
</style>

<body>
    <div class="grid">
        <?php while ($row = $result->fetch_assoc()) : ?>
            <div class="card">
                <div class="visi">
                    <p>
                    <h4>Movie: </h4> <?php echo $row['movie_id']; ?></P>
                </div>

                <p>
                <h4>Movie: </h4> <?php echo $row['movie_name']; ?></P>
                <p>
                <h4>Rating: </h4> <?php echo $row['rating']; ?></p>
                <p>
                <h4>Price: </h4> <?php echo $row['price']; ?></p>

                <form method="post" action="booking.php">
                    <input type="hidden" name="movie_id" value="<?php echo $row['movie_id']; ?>">
                    <input type="hidden" name="price" value="<?php echo $row['price']; ?>">
                    <label for="username"> Username</label>
                    <input type="text" id="username" name="username">
                    <br><br><label for="seats"> Book Seats</label>
                    <input type="Number" id="seats_booked" name="seats_booked">
                    <br><br><input type="Submit" id="submit" name="submit">
            </div>
        <?php endwhile; ?>
    </div>
    </table>

</body>

</html>
<?php
$db->close();
?>