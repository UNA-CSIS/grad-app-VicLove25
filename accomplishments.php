<?php
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $courses = $_POST['courses']; // This is an array
?>

<form action="confirmation.php" method="post">
    <textarea name="accomplishments"></textarea>
    
    <input type="hidden" name="firstname" value="<?php echo $firstname; ?>">
    <input type="hidden" name="lastname" value="<?php echo $lastname; ?>">
    
    <?php
      // You have to loop through the array to re-create it
      foreach ($courses as $course) {
        echo '<input type="hidden" name="courses[]" value="' . htmlspecialchars($course) . '">';
      }
    ?>
    
    <input type="submit" value="Next">
</form>