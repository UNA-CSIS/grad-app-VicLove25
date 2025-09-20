<?php
    session_start();
    if (isset($_POST['accomplishments'])) {
        $_SESSION['accomplishments'] = $_POST['accomplishments'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Graduate Application 4/5</title>
</head>
<body>
    <h2>Application Confirmation</h2>
    <p>Review all your information.</p>

    <h3>Applicant Name:</h3>
    <p><?php echo $_SESSION['firstname'] . ' ' . $_SESSION['lastname']; ?></p>

    <h3>Courses Taken:</h3>
    <?php
    if (empty($_SESSION['courses'])) {
        echo "<p>No courses selected.</p>";
    } else {
        echo "<p>" . implode(", ", $_SESSION['courses']) . "</p>";
    }
    ?>

    <h3>Personal Accomplishments:</h3>
    <p><?php echo $_SESSION['accomplishments']; ?></p>
    
    <br>
    
    <form action="results.php" method="post">
        <input type="submit" value="Confirm and Submit Application">
    </form>
</body>
</html>