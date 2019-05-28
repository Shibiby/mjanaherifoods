<?php
require 'db.php';
$id = $_GET['id'];
$sql = 'SELECT * FROM customers WHERE id=:id';
$statement = $connection->prepare($sql);
$statement->execute([':id' => $id ]);
$customers = $statement->fetch(PDO::FETCH_OBJ);
if (isset ($_POST['name'])  && isset($_POST['contact']) ) {
  $firstname = $_POST['name'];
  $contact = $_POST['contact'];
  $sql = 'UPDATE customers SET firstname=:name, contact=:contact WHERE id=:id';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':name' => $firstname, ':contact' => $contact, ':id' => $id])) {
    header("Location: /mjanaherifoods/customers.php");
  }



}


 ?>


<?php require 'header.php'; ?>
		<div class="customer">
		<div class="col-md-4 text-center">
				<h1>CUSTOMER EDIT</h1>


				<form id="customer_edit" method="post" role="form">
					<div class="form-group">
						<label for="name">Name *</label>
						<input  value="<?= $customers->firstname; ?>" id="name" type="text" name="name" class="form-control" placeholder="Please enter Name *" required="required" data-error="Firstname is required.">
						<div class="help-block with-errors"></div>
					</div>

					<div class="form-group mt-2">
							<label for="contact">Contact *</label>
							<input type="phonenumber" value="<?= $customers->contact; ?>" name="contact" id="contact" class="form-control" placeholder="Please enter contact *" required="required" data-error="Valid contact is required.">

							<div class="help-block with-errors"></div>
						</div>
					       
									
					<div class="col-md-12">
					<button type="submit" class="btn btn-info">Update Customer</button>
					</div>
                    <div class="container">
					<a href="index.php" class="btn btn-success">Home Page</a>
            </div>
                </div>
								
                </div>

                
                
	
            </form>
            
			</div>
		</div>

<?php require 'footer.php'; ?>