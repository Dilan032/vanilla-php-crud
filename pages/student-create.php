<?php include('../includes/header.php'); ?>

    <h1 class="text-center mt-5 mb-5">vanilla-php-crud</h1>
    <div class="container">

    <!-- Include message file -->
    <?php include('../asset/message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student add
                            <a href="javascript:history.back()" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="../controllers/s-create-controller.php" method="post">
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

    <?php include('../includes/footer.php'); ?>

