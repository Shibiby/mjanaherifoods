<?php include 'db.php'; ?>
<?php include "header.php";  ?>

<div class="container col-md-4" id="login">
        <h1 class="text-center" style="font-weight: bold"><u>Please Login</u></h1>
        <form class="login" method="POST" action="login.php" role="form">
            <div class="form-group text-center">
                <label for="email">Email *</label>
                <input id="email" type="email" name="email" class="form-control" placeholder="Please Enter Email * " required data-error="Please Enter Email">
            </div>
            <div class="form-group text-center">
                <label for="password">Password *</label>
                <input id="password"  type="password" name="password" class="form-control" placeholder="Please Enter Password * " required data-error="Please Enter Password">
            </div>
        </form>
        <input type="submit" class="btn mfm-btn btn-block" value="Login">
        <a href="dashboard.php" class="btn mfm-btn btn-block">Dashboard</a>
    </div>




<?php include "footer.php";  ?>