<?php 
include_once 'header.php';
require_once('includes/dbh.inc.php');
require_once('includes/dbtext.inc.php');
?>


<?php
// Assuming you already have the database connection established

// Fetch data from the database
$sql = "SELECT * FROM course_terms";
$result = mysqli_query($conn, $sql);

// Display the data using HTML
while ($row = mysqli_fetch_assoc($result)) {
    $date = $row['datum'];
    $header = $row['info_header'];
    $text = $row['info_text'];

    // Display each course update in a div
    echo "<div class='container border border-top-0 border-left-0 border-right-0 border-primary ' style='padding-top: 7%; padding-bottom: 3%;'>";
    echo "<p>Přidáno: $date</p>";
    echo "<h2>$header</h2>";
    echo "<br>";
    echo "<p>$text</p>";
    echo "</div>";
    echo "<br>";
}

// Close the database connection
mysqli_close($conn);
?>




<?php 
include_once 'footer.php';
?>