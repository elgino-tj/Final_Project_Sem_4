<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if rating is provided and within valid range
    if (isset($_POST['rating']) && $_POST['rating'] >= 1 && $_POST['rating'] <= 5) {
        // Include your database connection code here
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

        // Escape variables for security
        $rating = mysqli_real_escape_string($conn, $_POST['rating']);
        $comment = mysqli_real_escape_string($conn, $_POST['comment']);
        $userID = $_SESSION['userID']; // Adjust as per your session variable name
        $artID = $_SESSION['artID']; // Adjust as per your session variable name
        $artType = $_SESSION['artType']; // Adjust as per your session variable name

        // Insert rating and comment into the Ratings table based on the art type
        switch ($artType) {
            case 'Book':
                $sql = "INSERT INTO Ratings (UserID, BookID, RatingBook, ReviewBook) VALUES ('$userID', '$artID', '$rating', '$comment')";
                break;
            case 'Painting':
                $sql = "INSERT INTO Ratings (UserID, PaintingID, RatingPainting, ReviewPainting) VALUES ('$userID', '$artID', '$rating', '$comment')";
                break;
            case 'Photograph':
                $sql = "INSERT INTO Ratings (UserID, PhotographID, RatingPhotograph, ReviewPhotograph) VALUES ('$userID', '$artID', '$rating', '$comment')";
                break;
            case 'Sculpture':
                $sql = "INSERT INTO Ratings (UserID, SculpturesID, RatingSculpture, ReviewSculpture) VALUES ('$userID', '$artID', '$rating', '$comment')";
                break;
            default:
                echo "Invalid art type";
                exit;
        }

        if ($conn->query($sql) === TRUE) {
            // Notification message
            echo "<script>alert('Rating submitted successfully');</script>";
            // Redirect to showcase.php after 2 seconds
            echo "<script>setTimeout(function(){ window.location.href = 'showcase.php'; }, 2000);</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    } else {
        echo "Invalid rating. Please provide a rating between 1 and 5.";
    }
}
?>
