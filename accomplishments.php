<?php
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $courses = $_POST['courses']; // This is an array
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Graduate Application 3/5</title>
</head>
<body>
    <h2>Personal Accomplishments</h2>
    <p>Hello, <?php echo $firstname; ?>. Please describe your accomplishments.</p>
    
    <form action="confirmation.php" method="post">
        <label for="accomplishments">Essay:</label><br>
        <textarea id="accomplishments" name="accomplishments" rows="10" cols="50" required></textarea>
        <br><br>
        
        <input type="hidden" name="firstname" value="<?php echo $firstname; ?>">
        <input type="hidden" name="lastname" value="<?php echo $lastname; ?>">
        <input type="hidden" name="total_courses" value="<?php echo $total_courses; ?>">
        
        <?php
          // 3. Loop through the courses array to pass it
          foreach ($courses as $course) {
            echo '<input type="hidden" name="courses[]" value="' . ($course) . '">';
          }
        ?>
        
        <input type="submit" value="Review Application">
    </form>
</body>
</html>