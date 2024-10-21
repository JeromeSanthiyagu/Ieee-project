<?php
include('./conn/conn.php');

if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    // Read the raw input data
    parse_str(file_get_contents("php://input"), $_DELETE);
    $journalID = $_DELETE['id'];

    // Prepare and execute the delete statement
    $stmt = $conn->prepare("DELETE FROM tbl_journal WHERE tbl_journal_id = :journalID");
    $stmt->bindParam(':journalID', $journalID);

    if ($stmt->execute()) {
        http_response_code(200); // Success
    } else {
        http_response_code(500); // Error
    }
}
?>


