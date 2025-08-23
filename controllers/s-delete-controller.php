<?php 
    session_start();
    require '../db_connection.php';

    if (isset($_POST['student-delete'])) {
        $student_id = mysqli_real_escape_string($conn, $_POST['student-delete']);
        $query = "DELETE FROM users WHERE id='$student_id' ";
        $query_run = mysqli_query($conn, $query);

        if ($query_run) {
            $_SESSION['message'] = "Student deleted successfully";
            $_SESSION['msg_type'] = "success";
            header("Location: ../index.php?status=success");
        } else {
            $_SESSION['message'] = "Student not deleted";
            $_SESSION['msg_type'] = "danger";
            header("Location: ../index.php?status=error");
        }
    } else {
        $_SESSION['message'] = "error";
        $_SESSION['msg_type'] = "danger";
        header("Location: ../index.php?status=error");
    }
?>