<?php
  session_start();
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
    <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student add
                            <a href="index.php" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="post">
                          <div class="mb-3">
                            <label for="name">Student Name</label>
                            <input type="text" name="name" class="form-control" required>
                          </div>  
                          <div class="mb-3">
                            <label for="email">Student email</label>
                            <input type="email" name="email" class="form-control" required>
                          </div>  
                          <div class="mb-3">
                            <label for="phoneNumber">Student phone Number</label>
                            <input type="tel" name="phoneNumber" maxlength="10" class="form-control" required>
                          </div>  
                          <div class="mb-3">
                            <label for="course">Student course</label>
                            <input type="text" name="course" class="form-control" required>
                          </div>  
                          <div class="mb-3">
                            <button type="submit" name="save_student" class="btn btn-primary">Save Student</button>
                          </div>  
                        </form>
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