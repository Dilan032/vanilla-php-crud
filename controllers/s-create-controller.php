<?php
session_start();
require '../db_connection.php';

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
        $_SESSION['message'] = "Student created successfully";
        $_SESSION['msg_type'] = "success";
        header("Location: ../pages/student-create.php?status=success");
    } else {
        $_SESSION['message'] = "Student not created";
        $_SESSION['msg_type'] = "danger";
        header("Location: ../index.php?status=error");
    }
    $stmt->close();

} else {
    header("Location: ../pages/student-create.php?status=error");
}

?>