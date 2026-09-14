<?php

include "db.php";

$result = mysqli_query(
    $conn,
    "SELECT * FROM feedback ORDER BY id DESC"
);

?>

<!DOCTYPE html>
<html>

<head>

    <title>Feedbacks</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="box">

<h1>📋 Student Feedbacks</h1>

<?php while ($row = mysqli_fetch_assoc($result)) { ?>

<div class="feedback">

    <h3>
        <?php echo htmlspecialchars($row['name']); ?>
    </h3>

    <p>
        Course: <?php echo htmlspecialchars($row['course']); ?>
    </p>

    <p>
        Rating:
        <?php echo str_repeat("⭐", $row['rating']); ?>
    </p>

    <p>
        <?php echo htmlspecialchars($row['message']); ?>
    </p>

</div>

<?php } ?>

<a href="index.php">← Give Feedback</a>

</div>

</body>

</html>
