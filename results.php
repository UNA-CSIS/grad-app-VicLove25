<?php
session_start();

function evaluateApp($accomplishments, $totalCourses, $takenCourses) {
    
    $hasPHP = str_contains($accomplishments, "PHP");
    
    $metCourseRequirement = false;
    if ($totalCourses > 0) {
        $percentage = $takenCourses / $totalCourses;
        if ($percentage >= 0.5) {
            $metCourseRequirement = true;
        }
    }

    return ($hasPHP && $metCourseRequirement);
}

$accomplishments_text = $_SESSION['accomplishments'];
$courses_taken_array = $_SESSION['courses'];
$num_taken_courses = count($courses_taken_array);
$num_courses_listed = $_SESSION['total_courses']; 

$accepted = evaluateApp($accomplishments_text, $num_courses_listed, $num_taken_courses);
if ($accepted) {
    $result_message = "Congratulations! You are accepted for a phone interview.";
} else {
    $result_message = "We are sorry, but your application was rejected.";
}

session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Graduate Application - Results</title>
</head>
<body>

    <h2>Application Results</h2>
    
    <h3><?php echo $result_message; ?></h3>

    <p>Thank you for applying.</p>
    <a href="index.php">Homepage</a>

</body>
</html>