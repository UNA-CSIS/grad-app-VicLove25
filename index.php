<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Graduate Application</title>
</head>
<body>

    <h2>Graduate School Application</h2>
    <p>Please enter your name to begin.</p>

    <form action="courses.php" method="post">
        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname" required>
        <br><br>
        <label for="lastname">Last Name:</label>
        <input type="text" id="lastname" name="lastname" required>
        <br><br>
        <input type="submit" value="Start Application">
    </form>

</body>
</html>