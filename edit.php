<?php
  

  include 'customers.php';
  $customerObj = new Employee();
 
  if(isset($_GET['editId']) && !empty($_GET['editId'])) {
    $editId = $_GET['editId'];
    $customer = $customerObj->displyaRecordById($editId);
  }

  if(isset($_POST['update'])) {
    $customerObj->updateRecord($_POST);
  }  
    
?>
<html lang="en">

<body>
 
<div class="container">
    
                <div class="card-header bg-primary">
                    <h4 class="text-white">Update Records</h4>
                </div>
              
                  <form action="edit.php" method="POST">
                    <div class="form-group">
                      <label for="name">Name:</label>
                      <input type="text" class="form-control" name="uname" value="<?php echo $customer['name']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" name="uemail" value="<?php echo $customer['email']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="salary">Salary:</label>
                      <input type="text" class="form-control" name="usalary" value="<?php echo $customer['salary']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <input type="hidden" name="id" value="<?php echo $customer['id']; ?>">
                      <input type="submit" name="update" class="btn btn-primary" style="float:right;" value="Update">
                    </div>
                  </form>
                </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>