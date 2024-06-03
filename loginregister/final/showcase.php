<?php
// Establish a connection to your database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "art";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql_sculpture = "SELECT * FROM sculptures";
$result_sculpture = $conn->query($sql_sculpture);

$sql_painting = "SELECT * FROM painting";
$result_painting = $conn->query($sql_painting);

$sql_books = "SELECT * FROM books";
$result_books = $conn->query($sql_books);

$sql_photograph = "SELECT * FROM photograph";
$result_photograph = $conn->query($sql_photograph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Showcase</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <section>
    <nav>
    <div class="logo2">
        <?php
        session_start();
        if (isset($_SESSION['username'])) {
            echo "<h5>Hi, " . $_SESSION['username'] . "</h5>";
        } else {
            echo "<h5>Hi, Guest</h5>";
        }
        ?>
    </div>
    <div class="logo1">
        <h1>Art Gallery</h1>
    </div>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="showcase.php">Showcase</a></li>
        <li><a href="graph.php">Graph</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
    <div class="icons">
        <i class="fa-solid fa-heart"></i>
        <i class="fa-solid fa-cart-shopping"></i>
        <i class="fa-solid fa-user"></i>
  </div>
</nav>

        <div class="showcase">
            <h1>Collections</h1>

            <div class="filter">
                <label for="artworkFilter">Filter by type:</label>
                <select id="artworkFilter" onchange="filterArtworks()">
                    <option value="all">All</option>
                    <option value="sculpture">Sculptures</option>
                    <option value="painting">Paintings</option>
                    <option value="book">Books</option>
                    <option value="photograph">Photographs</option>
                </select>
            </div>

            <div class="box">
                <?php
                // Loop through the retrieved sculpture data and generate HTML for each card
                if ($result_sculpture->num_rows > 0) {
                    while($row = $result_sculpture->fetch_assoc()) {
                ?>
                        <div class="card sculpture">
                            <div class="image">
                                <img src="<?php echo $row["Image"]; ?>">
                            </div>
                            <div class="showcase_text">
                                <h2><?php echo $row["Scultpure"]; ?></h2>
                                <p><?php echo $row["Artist"]; ?></p>
                                <a href="review.php?type=Sculpture&id=<?php echo $row["SculpturesID"]; ?>" class="btn">Explore</a>
                            </div>
                        </div>
                <?php
                    }
                } else {
                    echo "0 sculpture results";
                }
                ?>

                <?php
                // Loop through the retrieved painting data and generate HTML for each card
                if ($result_painting->num_rows > 0) {
                    while($row = $result_painting->fetch_assoc()) {
                ?>
                        <div class="card painting">
                            <div class="image">
                                <img src="<?php echo $row["Image"]; ?>">
                            </div>
                            <div class="showcase_text">
                                <h2><?php echo $row["Painting"]; ?></h2>
                                <p><?php echo $row["Artist"]; ?></p>
                                <a href="review.php?type=Painting&id=<?php echo $row["PaintingID"]; ?>" class="btn">Explore</a>
                            </div>
                        </div>
                <?php
                    }
                } else {
                    echo "0 painting results";
                }
                ?>

                <?php
                // Loop through the retrieved books data and generate HTML for each card
                if ($result_books->num_rows > 0) {
                    while($row = $result_books->fetch_assoc()) {
                ?>
                        <div class="card book">
                            <div class="image">
                                <img src="<?php echo $row["Image"]; ?>">
                            </div>
                            <div class="showcase_text">
                                <h2><?php echo $row["Book Or Manuscript"]; ?></h2>
                                <p><?php echo $row["Author"]; ?></p>
                                <a href="review.php?type=Book&id=<?php echo $row["BookID"]; ?>" class="btn">Explore</a>
                            </div>
                        </div>
                <?php
                    }
                } else {
                    echo "0 book or manuscript results";
                }
                ?>

                <?php
                // Loop through the retrieved photograph data and generate HTML for each card
                if ($result_photograph->num_rows > 0) {
                    while($row = $result_photograph->fetch_assoc()) {
                ?>
                        <div class="card photograph">
                            <div class="image">
                                <img src="<?php echo $row["Image"]; ?>">
                            </div>
                            <div class="showcase_text">
                                <h2><?php echo $row["Photograph"]; ?></h2>
                                <p><?php echo $row["Artist"]; ?></p>
                                <a href="review.php?type=Photograph&id=<?php echo $row["PhotographID"]; ?>" class="btn">Explore</a>
                            </div>
                        </div>
                <?php
                    }
                } else {
                    echo "0 photograph results";
                }
                // Close the database connection
                $conn->close();
                ?>
            </div>
        </div>
    </section>

    <script>
        function filterArtworks() {
            const filter = document.getElementById('artworkFilter').value;
            const cards = document.querySelectorAll('.card');

            cards.forEach(card => {
                if (filter === 'all' || card.classList.contains(filter)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        // Initial filter
        filterArtworks();
    </script>
</body>
</html>
