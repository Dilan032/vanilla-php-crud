<?php
session_start();
require '../db_connection.php';

if (isset($_POST['update_student'])) {
    // Get form data
    $student_id = $_POST['student_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $course = $_POST['course'];

    // Use prepared statement to avoid SQL injection
    $stmt = $conn->prepare("UPDATE users SET name=?, email=?, phoneNumber=?, course=? WHERE id=?");
    $stmt->bind_param("ssssi", $name, $email, $phoneNumber, $course, $student_id);

    if ($stmt->execute()) {
        $_SESSION['message'] = "Student updated successfully";
        $_SESSION['msg_type'] = "success";
        header("Location: ../index.php?status=success");
    } else {
        $_SESSION['message'] = "Student not updated". $stmt->error;
        $_SESSION['msg_type'] = "danger";
        header("Location: ../pages/student-edit.php?id=$student_id&status=error");
    }
    $stmt->close();

} else{
    $_SESSION['message'] = "error";
    $_SESSION['msg_type'] = "danger";
    header("Location: ../pages/student-edit.php?status=error");
}

?>
