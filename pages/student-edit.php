<?php include('../includes/header.php'); ?>

    <h1 class="text-center mt-5 mb-5">vanilla-php-crud</h1>
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student edit
                            <a href="javascript:history.back()" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php 
                            if (isset($_GET['id'])) {
                                $student_id = mysqli_real_escape_string($conn, $_GET['id']);
                                $query = "SELECT * FROM users WHERE id='$student_id' ";
                                $query_run = mysqli_query($conn, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    $student = mysqli_fetch_array($query_run);
                                    // echo "<h4>Student id: $student_id</h4>";
                                    ?>

                                    <form action="../controllers/s-edit-controller.php" method="post">

                                        <input type="hidden" name="student_id" value="<?=$student['id']; ?>">

                                        <div class="mb-3">
                                            <label for="name">Student Name</label>
                                            <input type="text" name="name" value="<?=$student['name']; ?>" class="form-control" required>
                                        </div>  
                                        <div class="mb-3">
                                            <label for="email">Student email</label>
                                            <input type="email" name="email" value="<?=$student['email']; ?>" class="form-control" required>
                                        </div>  
                                        <div class="mb-3">
                                            <label for="phoneNumber">Student phone Number</label>
                                            <input type="tel" name="phoneNumber" value="<?=$student['phoneNumber']; ?>" maxlength="10" class="form-control" required>
                                        </div>  
                                        <div class="mb-3">
                                            <label for="course">Student course</label>
                                            <input type="text" name="course" value="<?=$student['course']; ?>" class="form-control" required>
                                        </div>  
                                        <div class="mb-3">
                                            <button type="submit" name="update_student" class="btn btn-primary">update Student</button>
                                        </div>  
                                        </form>

                                    <?php
                                }
                            } else {
                                echo "<h4>No id found</h4>";
                            }
                                    
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include('../includes/footer.php'); ?>