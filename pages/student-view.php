<?php
  require '../db_connection.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>student edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  </head>
  <body>
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK" crossorigin="anonymous"></script>
  </body>
</html>