<?php
include('../conn/conn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $location = $_POST['location'];
    $date = $_POST['date'];
    $moments = $_POST['moments'];
    
    // Handle image upload
    $target_dir = "../images/";
    $image = basename($_FILES["image"]["name"]);
    $target_file = $target_dir . $image;
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

    // Insert journal entry into the database
    $stmt = $conn->prepare("INSERT INTO tbl_journal (image, date, moments, location) VALUES (?, ?, ?, ?)");
    $stmt->execute([$image, $date, $moments, $location]);

    header("Location: ../index.php");  // Redirect back to home page
    exit();
}
?>
