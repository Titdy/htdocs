<?php 
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    $query_reviews = "SELECT * FROM course_reviews";
    $result_reviews = mysqli_query($conn, $query_reviews);
?>

<?php
    if (isset($_POST["submitCourse"])) {
        $userCourseReviewName = $_POST["username"];
        $userCourseReview = $_POST["courseReview"];
        $userCourseRating = $_POST["courseRating"];

        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

        // Sanitize user input
        $sanitizedCourseReviewName = htmlspecialchars($userCourseReviewName, ENT_QUOTES, 'UTF-8');
        $sanitizedCourseReview = htmlspecialchars($userCourseReview, ENT_QUOTES, 'UTF-8');

        if (emptyInputLogin($sanitizedCourseReviewName, $sanitizedCourseReview, $userCourseRating) !== false) {
            header("location: ../login.php?error=emptyinput");
            exit(); // Stop the script
        } else {
            createCourseReview($conn, $sanitizedCourseReviewName, $sanitizedCourseReview, $userCourseRating);
        }
    }
?>
