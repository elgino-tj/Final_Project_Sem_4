<?php
session_start();

$username = $_SESSION['username'];


// Insert the review into the database along with the username
$insert_review_query = "INSERT INTO Ratings (Username, ArtID, Rating, Review) VALUES ('$username', '$artID', '$rating', '$review')";


// Retrieve the ID and type from the URL parameters
$id = $_GET['id'];
$type = $_GET['type'];

echo "Type: " . $type; // Debugging

// Set the session variables
$_SESSION['artID'] = $id;
$_SESSION['artType'] = $type;

echo "Session artType: " . $_SESSION['artType']; // Debugging

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
if (strcasecmp($type, 'Sculpture') === 0) {
    $sql = "SELECT * FROM sculptures WHERE SculpturesID = $id";
} elseif (strcasecmp($type, 'Painting') === 0) {
    $sql = "SELECT * FROM painting WHERE PaintingID = $id";
} elseif (strcasecmp($type, 'Book') === 0) {
    $sql = "SELECT * FROM books WHERE BookID = $id";
} elseif (strcasecmp($type, 'Photograph') === 0) {
    $sql = "SELECT * FROM photograph WHERE PhotographID = $id";
} else {
    echo "Invalid content type";
    exit;
}


$result = $conn->query($sql);

// // Retrieve ratings and reviews from the database based on the art type
// switch ($_SESSION['artType']) {
//     case 'Book':
//         $sql1 = "SELECT * FROM Ratings WHERE BookID = '{$_SESSION['artID']}'";
//         break;
//     case 'Painting':
//         $sql1 = "SELECT * FROM Ratings WHERE PaintingID = '{$_SESSION['artID']}'";
//         break;
//     case 'Photograph':
//         $sql1 = "SELECT * FROM Ratings WHERE PhotographID = '{$_SESSION['artID']}'";
//         break;
//     case 'Sculpture':
//         $sql1 = "SELECT * FROM Ratings WHERE SculpturesID = '{$_SESSION['artID']}'";
//         break;
//     default:
//         echo "Invalid art type";
//         exit;
// }

// $result1 = $conn->query($sql1);

switch ($_SESSION['artType']) {
    case 'Book':
        $sql1 = "SELECT r.*, u.Username FROM Ratings r JOIN users u ON r.UserID = u.UserID WHERE r.BookID = '{$_SESSION['artID']}'";
        break;
    case 'Painting':
        $sql1 = "SELECT r.*, u.Username FROM Ratings r JOIN users u ON r.UserID = u.UserID WHERE r.PaintingID = '{$_SESSION['artID']}'";
        break;
    case 'Photograph':
        $sql1 = "SELECT r.*, u.Username FROM Ratings r JOIN users u ON r.UserID = u.UserID WHERE r.PhotographID = '{$_SESSION['artID']}'";
        break;
    case 'Sculpture':
        $sql1 = "SELECT r.*, u.Username FROM Ratings r JOIN users u ON r.UserID = u.UserID WHERE r.SculpturesID = '{$_SESSION['artID']}'";
        break;
    default:
        echo "Invalid art type";
        exit;
}

$result1 = $conn->query($sql1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art Museum Gallery</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <section1>
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

        <div class="main" id="Home">
        <?php
            // Display content if retrieved successfully
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                ?>
                <div class="main_content">
                    <div class="main_text">
                        <h1><?php echo $row['Scultpure'] ?? $row['Painting'] ?? $row['Book Or Manuscript'] ?? $row['Photograph']; ?></h1>
                        <h2><?php echo $row['Artist'] ?? $row['Author']; ?></h2>
                        <p><?php echo $row['Description']; ?></p>
                    </div>
                    <div class="main_image">
                        <img src="<?php echo $row['Image']; ?>">
                    </div>
                </div>
                <?php
            } else {
                echo "No content found for this ID";
            }
            ?>

            <!-- Rating and comment form -->
            <form method="post" action="submit_rating.php">
                <div class="rating-css">
                    <div class="star-icon">
                    <input type="radio" name="rating" id="rating1" value="1">
            <label for="rating1" class="fa fa-star"></label>
            <input type="radio" name="rating" id="rating2" value="2">
            <label for="rating2" class="fa fa-star"></label>
            <input type="radio" name="rating" id="rating3" value="3">
            <label for="rating3" class="fa fa-star"></label>
            <input type="radio" name="rating" id="rating4" value="4">
            <label for="rating4" class="fa fa-star"></label>
            <input type="radio" name="rating" id="rating5" value="5">
            <label for="rating5" class="fa fa-star"></label>
                    </div>
                </div>

                <div class="rate">
                    <div class="form-group">
                        <label for="comment">Comment:</label>
                        <textarea id="comment" name="comment" placeholder="Put your comment here" class="main" required></textarea>
                    </div>
                </div>

                <button type="submit" class="button submit-button">Submit</button>
            </form>

        </div>

        <!-- Additional content -->

    </section1>


    <!--Review-->

    <div class="review" id="Review">
        <h1><span>Visitor's Review</span></h1>
        <div class="review_box">
        <?php
            if ($result1->num_rows > 0) {
                while ($row = $result1->fetch_assoc()) {
                    ?>
                    <div class="review_card">
                        <div class="card_top">
                            <div class="profile">
                                <div class="name">
                                <strong><?php echo $row['Username']; ?></strong>
                                    <div class="like">
                                        <!-- Display rating -->
                                        <i class="fa-solid fa-star"><?php echo $row['Rating' . $_SESSION['artType']]; ?>/5</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment">
                            <!-- Display review -->
                            <p><?php echo $row['Review' . $_SESSION['artType']]; ?></p>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "No reviews found for this art piece.";
            }
            ?>
        </div>
    </div>
        </div>
        

        
   

    <!--Footer-->

    <footer>
        <div class="footer_main">
            <div class="tag">
                <h1>Contact</h1>
                <a href="#"><i class="fa-solid fa-house"></i>123/Colombo/India</a>
                <a href="#"><i class="fa-solid fa-phone"></i>+62 821-2032-202</a>
                <a href="#"><i class="fa-solid fa-envelope"></i>contact@gmail.com</a>
            </div>

            <div class="tag">
                <h1>Follow Us</h1>
                <div class="socialmedia">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>

        </div>
    </footer>

</body>
</html>
