<?php
  session_start();
  require 'db_connection.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>vanilla-php-crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mt-5 mb-5">vanilla-php-crud</h1>
    <div class="container">

        <!-- Include message file -->
        <?php include('./asset/message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Studet Details
                            <a href="./pages/student-create.php" class="btn btn-primary float-end">Add student</a>
                        </h4>
                    </div>
                    <div class="card-body table-responsive">
                       <table class="table table-bordered table-striped">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Student Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Coruse</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php 
                                $query = "SELECT * FROM users";
                                $query_run = mysqli_query($conn, $query);
                                if (mysqli_num_rows($query_run) > 0) 
                                  {
                                    foreach ($query_run as $student) 
                                    {
                                      ?>
                                      <tr style="vertical-align: middle;">
                                        <td><?= $student['id']; ?></td>
                                        <td><?= $student['name']; ?></td>
                                        <td><?= $student['email']; ?></td>
                                        <td><?= $student['phoneNumber']; ?></td>
                                        <td><?= $student['course']; ?></td>
                                        <td>
                                          <div class="d-flex justify-content-center gap-2">
                                            <a href="./pages/student-view.php?id=<?= $student['id']; ?>" class="btn btn-info btn-sm px-3">View</a>
                                            <a href="./pages/student-edit.php?id=<?= $student['id']; ?>" class="btn btn-success btn-sm px-3">Edit</a>

                                            <form action="./controllers/s-delete-controller.php" method="post">
                                              <button type="submit" name="student-delete" value="<?= $student['id']; ?>" class="btn btn-danger btn-sm">Delete</button>
                                            </form>

                                          </div>
                                        </td>
                                      </tr>
                                      <?php
                                    }
                                  } else {
                                    echo "<h5> No Record Found </h5>";
                                  }
                              ?>
                            </tbody>
                       </table>
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