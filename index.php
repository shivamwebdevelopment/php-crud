<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />

</head>

<body>

    <div class="container">
        <a href="create.php" class="btn btn-success my-6">Add Module</a>

        <table width="25%" border="0">
            <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Action</th>
            </thead>

            <tbody>
                <?php
                include "dbconnection.php";
                $fetch = mysqli_query($con, 'select * from crudoperation');
                $row = mysqli_num_rows($fetch);
                if ($row > 0) {
                    while ($r = mysqli_fetch_array($fetch)) {
                ?>
                        <tr>
                            <td><?php echo $r['Name'] ?></td>
                            <td><?php echo $r['Email'] ?></td>
                            <td><?php echo $r['Address'] ?></td>
                            <td class="flex gap-3">
                                <a href="update.php?id=<?php echo $r['ID'] ?>" class="btn btn-info">Edit</a>
                                <a href="delete.php?delid=<?php echo $r['ID'] ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                <?php
                    }
                }

                ?>
            </tbody>

        </table>
    </div>
</body>

</html>