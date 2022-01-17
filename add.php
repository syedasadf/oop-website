<?php
  include 'customers.php';
  $customerObj = new Employee();
 
  if(isset($_POST['submit'])) {
    $customerObj->insertData($_POST);
  }
?>

<html lang="en">

<body>
<br> 
<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <h4>Insert Data</h4>
                </div>
                <div class="card-body bg-light">
                  <form action="add.php" method="POST">
                    <div class="form-group">
                      <label for="name">Name:</label>
                      <input type="text" class="form-control" name="name" placeholder="Enter name" required="">
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" name="email" placeholder="Enter email" required="">
                    </div>
                    <div class="form-group">
                      <label for="salary">Salary:</label>
                      <input type="text" class="form-control" name="salary" placeholder="Enter Salary" required="">
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary" style="float:right;" value="Submit">
                  </form>
                </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>