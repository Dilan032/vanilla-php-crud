<?php include('../includes/header.php'); ?>

    <h1 class="text-center mt-5 mb-5">vanilla-php-crud</h1>
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student view details
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
                                        <label for="name">Name</label>
                                        <p class="form-control">
                                            <?= $student['name']; ?>
                                        </p>

                                        <label for="name">Email</label>
                                        <p class="form-control">
                                            <?= $student['email']; ?>
                                        </p>

                                        <label for="name">Mobile Number</label>
                                        <p class="form-control">
                                            <?= $student['phoneNumber']; ?>
                                        </p>

                                        <label for="name">course</label>
                                        <p class="form-control">
                                            <?= $student['course']; ?>
                                        </p>

                                    <?php
                                }
                            } else {
                                echo "<h4>No user details found</h4>";
                            }
                                    
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include('../includes/footer.php'); ?>