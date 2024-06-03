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

// Query to get the count of each artwork type
$sql_counts = "
    SELECT 'Sculpture' AS type, COUNT(*) AS count FROM sculptures
    UNION ALL
    SELECT 'Painting' AS type, COUNT(*) AS count FROM painting
    UNION ALL
    SELECT 'Book' AS type, COUNT(*) AS count FROM books
    UNION ALL
    SELECT 'Photograph' AS type, COUNT(*) AS count FROM photograph
";

$result_counts = $conn->query($sql_counts);

$art_counts = [];
if ($result_counts->num_rows > 0) {
    while($row = $result_counts->fetch_assoc()) {
        $art_counts[] = $row;
    }
} else {
    echo "No data found";
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artwork Counts Graph</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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

        <div class="container">
            <h1>Artwork Counts by Type</h1>
            <canvas id="artworkChart"></canvas>
        </div>

        <script>
            const ctx = document.getElementById('artworkChart').getContext('2d');
            const artworkChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: <?php echo json_encode(array_column($art_counts, 'type')); ?>,
                    datasets: [{
                        label: '# of Artworks',
                        data: <?php echo json_encode(array_column($art_counts, 'count')); ?>,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
    </section>
</body>
</html>
