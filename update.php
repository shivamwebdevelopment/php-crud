<?php
include "dbconnection.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_GET['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $query = mysqli_query($con, "update crudoperation set Name='$name', Email='$email', Address='$address' where ID='$id' ");

    if ($query) {
        echo "<script>alert('data updated successful')</script>";
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
    <title>update user</title>
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
                        <h5 class="">Update Form </h5>
                    </div>

                    <?php
                    include "dbconnection.php";
                    $id = $_GET['id'];
                    $query = mysqli_query($con, "select * from crudoperation where ID = '$id' ");
                    while ($row = mysqli_fetch_array($query)) {


                    ?>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Name</span>
                            <input type="text" value="<?php echo $row['Name'] ?>" name="name" class="form-control" required>
                        </div>


                        <div class="input-group mb-3">
                            <span class="input-group-text">Email</span>
                            <input type="text" value="<?php echo $row['Email'] ?>" name="email" class="form-control" required>
                        </div>


                        <div class="input-group mb-3">
                            <span class="input-group-text">Address</span>
                            <input type="text" value="<?php echo $row['Address'] ?>" name="address" class="form-control" required>
                        </div>
                    <?php    } ?>


                    <button type="submit" class="btn btn-secondary">Update</button>






                </div>
            </form>
        </div>
    </div>
</body>

</html>