<?php
// 1. Get ALL data from accomplishments.php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$total_courses = $_POST['total_courses'];
$accomplishments = $_POST['accomplishments'];
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
    <p><?php echo $firstname . ' ' . $lastname; ?></p>

    <h3>Courses Taken:</h3>
    <?php
    if (empty($courses)) {
        echo "<p>No courses selected.</p>";
    } else {
        // Use implode() to turn the courses array into a string
        echo "<p>" . implode(", ", $courses) . "</p>";
    }
    ?>

    <h3>Personal Accomplishments:</h3>
    <p><?php echo $accomplishments; ?></p>
    
    <br>
    
    <form action="results.php" method="post">
        <input type="hidden" name="firstname" value="<?php echo $firstname; ?>">
        <input type="hidden" name="lastname" value="<?php echo $lastname; ?>">
        <input type="hidden" name="total_courses" value="<?php echo $total_courses; ?>">
        <input type="hidden" name="accomplishments" value="<?php echo $accomplishments; ?>">
        
        <?php
          // 5. Loop through courses array one last time
          foreach ($courses as $course) {
            echo '<input type="hidden" name="courses[]" value="' . $course . '">';
          }
        ?>
        
        <input type="submit" value="Confirm and Submit Application">
    </form>
</body>
</html>