<?php
    include '../includes/session.php';
    include '../includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD OPERATION</title>
</head>
<body>
    <section>
        <!-- Image and text -->
        <div class="container">
            <nav class="navbar navbar-light bg-dark">
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#logout"><i class="fa fa-sign-out mr-2"></i>Logout </button>
            </nav>
            <div class="card-body">
                <?php
                    $sql = "SELECT * FROM tblstudents";
                    $query = mysqli_query($conn, $sql);
                    $row = $query->fetch_assoc();
                ?>

            <h4>Welcome <?php $row['firstname'].' '.$row['lastname']?> </h4>
            </div>
        </div>
    </section>
    <?php include '../includes/scripts.php';
    include '../includes/modals.php';
    ?>
</body>
</html>