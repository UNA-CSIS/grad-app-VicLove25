<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Graduate Application 4/5</title>
</head>
<body>

    <h2>Application Confirmation</h2>
    <p>Please review all your information before submitting.</p>

    <h3>Applicant Name:</h3>
    <p><?php echo $_POST['firstname'] . ' ' . $_POST['lastname']; ?></p>

    <h3>Courses Taken:</h3>
    <?php
    if (empty($_SESSION['courses'])) {
        echo "<p>No courses selected.</p>";
    } else {
        // Use implode() to turn the courses array into a comma-separated string
        echo "<p>" . htmlspecialchars(implode(", ", $_SESSION['courses'])) . "</p>";
    }
    ?>

    <h3>Personal Accomplishments:</h3>
    <p><?php echo nl2br(htmlspecialchars($_SESSION['accomplishments'])); ?></p>

    <br>
    
    <form action="results.php" method="post">
        <input type="submit" value="Confirm and Submit Application">
    </form>

</body>
</html>