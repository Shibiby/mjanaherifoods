<?php
    require 'db.php';
    $sql = 'SELECT * FROM `customers` ';

    $statement = $connection->prepare($sql);

    $statement->execute();

    $customers = $statement->fetchAll(PDO::FETCH_OBJ);

?>

<?php require 'header.php'; ?>

<div class="container">
<div class="card mt-5">
    <div class="card-header">
        <h2>All Customers</h2>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Contact</th>
            <th>Action</th>
            </tr>

    <?php foreach($customers as $customers): ?>

            <tr>
            <td><?= $customers->id; ?></td>
            <td><?= $customers->firstname; ?></td>
            <td><?= $customers->contact; ?></td>
            <td>
                <a href="customer_edit.php?id=<?= $customers->id ?>" class="btn btn-info">Edit</a>
                <a onclick="return confirm('Are you sure you want to delete this entry?')" href="customer_delete.php?id=<?= $customers->id ?>" class="btn btn-danger">Delete</a>

            </td>
            </tr>
<?php endforeach; ?>

        </table>
    </div>

</div>

<div class="container">
        <a href="index.php" class="btn btn-success">Home Page</a>
    </div>

</div>

<button onclick="myFunction()">Print this page</button>


<?php require 'footer.php'; ?>