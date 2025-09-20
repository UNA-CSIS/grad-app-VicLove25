<?php
  session_start();
  if (isset($_POST['courses'])) {
    $_SESSION['courses'] = $_POST['courses'];
} else {
  
    if (!isset($_SESSION['courses'])) {
        $_SESSION['courses'] = [];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Graduate Application 3/5</title>
</head>
<body>
    <h2>Personal Accomplishments</h2>
    <p>Hello, <?php echo $_SESSION['firstname']; ?>. Please describe your accomplishments.</p>
    
    <form action="confirmation.php" method="post">
        <label for="accomplishments">Essay:</label><br>
        <textarea id="accomplishments" name="accomplishments" rows="10" cols="50" required></textarea>
        <input type="submit" value="Review Application">
    </form>
</body>
</html>