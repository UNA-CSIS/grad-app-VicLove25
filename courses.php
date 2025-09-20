<?php
session_start();
if (isset($_POST['firstname']) && isset($_POST['lastname'])) {
    $_SESSION['firstname'] = $_POST['firstname'];
    $_SESSION['lastname'] = $_POST['lastname'];
    }

    $all_courses = [
    "Object-oriented programming",
    "Systems analysis & design",
    "Advanced programming",
    "Introduction to Networking",
    "Introduction to Computer Security"
    ];
    $_SESSION['total_courses'] = count($all_courses);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Graduate Application 2/5</title>
</head>
<body>
    <h2>Welcome, <?php echo ($_SESSION['firstname']) . ' ' . ($_SESSION['lastname']); ?>!</h2>
    <p>Select the courses you have completed:</p>

    <form action="accomplishments.php" method="post">
        <?php
        foreach ($all_courses as $course) {
            echo '<input type="checkbox" name="courses[]" value="' . ($course) . '"> ' . $course . '<br>';
        }
        ?>
        <br>
        
        <input type="submit" value="Next: Accomplishments">
    </form>
</body>
</html>