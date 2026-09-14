<?php

include "db.php";

$name = $_POST['name'];
$course = $_POST['course'];
$rating = $_POST['rating'];
$message = $_POST['message'];

$sql = "INSERT INTO feedback
        (name, course, rating, message)
        VALUES
        ('$name', '$course', '$rating', '$message')";

if (mysqli_query($conn, $sql)) {

    echo "<h2>✅ Feedback Submitted!</h2>";
    echo "<a href='index.php'>Go Back</a>";

} else {

    echo "Error submitting feedback.";

}

?>
