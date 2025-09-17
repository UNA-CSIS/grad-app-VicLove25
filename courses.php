<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Graduate Application</title>
</head>
<body>

    <h2>Welcome, <?php echo $_POST['firstname'] . ' ' . $_POST['lastname']; ?>!</h2>
    <p>Select the courses you have completed:</p>

    <form action="accomplishments.php" method="post">
 

        
        <input type="submit" value="Next: Accomplishments">
    </form>

</body>
</html>