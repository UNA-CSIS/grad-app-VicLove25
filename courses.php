<?php
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];


    $all_courses = [
    "Object-oriented programming",
    "Systems analysis & design",
    "Advanced programming",
    "Introduction to Networking",
    "Introduction to Computer Security"
    ];
    $total_courses = count($all_courses)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Graduate Application 2/5</title>
</head>
<body>
    <h2>Welcome, <?php echo ($firstname) . ' ' . ($lastname); ?>!</h2>
    <p>Select the courses you have completed:</p>

    <form action="accomplishments.php" method="post">
        <?php
        // 4. Create the real checklist
        foreach ($all_courses as $course) {
            echo '<input type="checkbox" name="courses[]" value="' . ($course) . '">';
            echo '<label>' . ($course) . '</label><br>';
        }
        ?>
        <br>
        
        <input type="hidden" name="firstname" value="<?php echo $firstname; ?>">
        <input type="hidden" name="lastname" value="<?php echo $lastname; ?>">
        <input type="hidden" name="total_courses" value="<?php echo $total_courses; ?>">
        
        <input type="submit" value="Next: Accomplishments">
    </form>
</body>
</html>
