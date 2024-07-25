<?php
include "dbconnection.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $query = mysqli_query($con, "insert into crudoperation (Name, Email, Address) Value ('$name', '$email', '$address' )");

    if ($query) {
        echo "<script>alert('Successfully created record')</script>";
        echo "<script type='text/javascript'>document.location = 'index.php'; </script>";
    } else {
        echo "<script>alert('There are error')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>skhubs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />

</head>

<body class="bg-dark">
    <div>
        <div class="container">
            <form method="POST">
                <div class="modal-content mt-10">
                    <div class="modal-header">
                        <h5 class="">Create Form </h5>
                    </div>
                    <div class="modal-body">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Name</span>
                            <input type="text" name="name" class="form-control" required>
                        </div>


                        <div class="input-group mb-3">
                            <span class="input-group-text">Email</span>
                            <input type="text" name="email" class="form-control" required>
                        </div>


                        <div class="input-group mb-3">
                            <span class="input-group-text">Address</span>
                            <input type="text" name="address" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-secondary">Create</button>


                    </div>



                </div>
            </form>
        </div>
    </div>
</body>

</html>