<?php


$con = mysqli_connect("localhost", "root", "", "crud_tutorial");

if (mysqli_connect_errno()) {
    echo "Connection Failed" . mysqli_connect_error();
}
