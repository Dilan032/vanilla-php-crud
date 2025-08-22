<?php
require 'db_connection.php';

if (isset($_POST['save_student'])) {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $course = $_POST['course'];

    // Use prepared statement to avoid SQL injection
    $stmt = $conn->prepare("INSERT INTO users (name, email, phoneNumber, course) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssis", $name, $email, $phoneNumber, $course);

    if ($stmt->execute()) {
        header("Location: index.php?status=success");
    } else {
        header("Location: index.php?status=error");
    }

    $stmt->close();
} else {
    header("Location: student_create.php?status=error");
}
?>
