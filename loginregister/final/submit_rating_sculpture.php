<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if rating is provided and within valid range
    if (isset($_POST['rating']) && $_POST['rating'] >= 1 && $_POST['rating'] <= 5) {
        // Include your database connection code here
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "finall";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Escape variables for security
        $rating = mysqli_real_escape_string($conn, $_POST['rating']);
        $comment = mysqli_real_escape_string($conn, $_POST['comment']);

        // Assuming you have UserID and SculpturesID, adjust the values accordingly
        $userID = $_SESSION['userID']; // Adjust as per your session variable name
        $sculpturesID = $_SESSION['sculpturesID']; // Adjust as per your session variable name

        // Insert rating and comment into the Ratings table
        $sql = "INSERT INTO Ratings (UserID, SculpturesID, RatingSculpture, ReviewSculpture) VALUES ('$userID', '$sculpturesID', '$rating', '$comment')";

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