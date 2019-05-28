<?php
	require 'db.php';
	$message = '';

    if (isset ($_POST['name']) && isset ($_POST['contact'])){
		$firstname = $_POST['name'];
		$contact = $_POST['contact'];

		$sql = 'INSERT INTO `customers`(`firstname`, `contact`) VALUES (:firstname, :contact)';
		$statement = $connection->prepare($sql);

		if ($statement->execute([':firstname' => $firstname, ':contact' => $contact])) {
			$message = 'Customer Registered Successfully';
		}

    }
?>

<?php require 'header.php'; ?>
		<div class="customer">
		<div class="col-md-4 text-center">
				<h1>CUSTOMER REGISTRATION</h1>
				<div class="alert alert-success">
				<?php if(!empty($message)); ?>
					<?php echo $message; ?>
				</div>

				<form id="customer_reg" method="post" action="customer_reg.php" role="form">
					<div class="form-group">
						<label for="name">Name *</label>
						<input id="name" type="text" name="name" class="form-control" placeholder="Please enter Name *" required="required" data-error="Firstname is required.">
						<div class="help-block with-errors"></div>
					</div>

					<div class="form-group mt-2">
							<label for="contact">Contact *</label>
							<input id="contact" type="phonenumber" name="contact" class="form-control" placeholder="Please enter contact *" required="required" data-error="Valid contact is required.">
							<div class="help-block with-errors"></div>
						</div>
					       
									
					<div class="col-md-12">
							<input type="submit" class="btn btn-success" value="submit">
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