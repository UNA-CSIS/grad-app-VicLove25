<?php
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
?>

<form action="accomplishments.php" method="post">
    <h2>Welcome, <?php echo $firstname; ?>!</h2>
    
    <input type="checkbox" name="courses[]" ...>
    
    <input type="hidden" name="firstname" value="<?php echo $firstname; ?>">
    <input type="hidden" name="lastname" value="<?php echo $lastname; ?>">
    
    <input type="submit" value="Next">
</form>