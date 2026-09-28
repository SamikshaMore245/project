<!DOCTYPE html>
<html>

<head>
    <title>Student Feedback</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="box">

    <h1>📝 Student Feedback</h1>

    <form action="submit.php"
          method="POST"
          onsubmit="return validateForm()">

        <input type="text"
               id="name"
               name="name"
               placeholder="Your Name"
               required>

        <input type="text"
               name="course"
               placeholder="Course"
               required>

        <select name="rating" id="rating">

            <option value="">Select Rating</option>
            <option value="5">⭐⭐⭐⭐⭐</option>
            <option value="4">⭐⭐⭐⭐</option>
            <option value="3">⭐⭐⭐</option>
            <option value="2">⭐⭐</option>
            <option value="1">⭐xcvb</option>

        </select>

        <textarea name="message"
                  placeholder="Write your feedback..."
                  required></textarea>

        <button type="submit">
            Submit Feedback
        </button>

    </form>

    <a href="feedbacks.php">
        View All Feedback
    </a>

</div>

<script src="script.js"></script>

</body>
</html>
