<?php

$name = $_REQUEST['txt1'];
$gender = $_REQUEST['txt2'];

echo "My name is $name and Gender is $gender.";

$connection = mysqli_connect("localhost","root","","first_database");

$query = mysqli_query($connection, "Insert Into tbl_student (st_name,st_gender) Values ('$name','$gender')") or die("Error".mysqli_error($connection));

if($query)
{
    echo "<script>alert('Record Added')</script>";
}