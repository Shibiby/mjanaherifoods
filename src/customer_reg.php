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
		<div class="col-lg-6 text-center" id="customer-reg">
				<h1>CUSTOMER REGISTRATION</h1>
				<div class="alert alert-success">
				<?php if(!empty($message)); ?>
					<?php echo $message; ?>
				</div>

				<form class="login" id="customer_reg" method="post" action="customer_reg.php" role="form">
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
							<input type="submit" class="btn btn-success" value="Register Customer">
					</div>
                    <div class="container">
					<a href="customers.php" class="btn mfm-btn">Home Page</a>
            </div>
                </div>
								
                </div>

                
                
	
            </form>
            
			</div>

<?php require 'footer.php'; ?>