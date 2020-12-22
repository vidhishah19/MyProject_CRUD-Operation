<?php

include './connection.php';

$id = $_GET['eid'];

$fetchq = mysqli_query($connection, "Select * From tbl_student Where st_id='{$id}'") or die(mysqli_error($connection));
$row = mysqli_fetch_array($fetchq);

if($_POST)
{
    $name = $_POST['txt1'];
    $gender = $_POST['txt2'];
    mysqli_query($connection, "Update tbl_student Set st_name'{$name}',st_gender='{$gender}' Where st_id='{$_GET['eid']}'");
    
    header("location:display.php");
}
?>
<html>
    <body>
        <form method="post">
            Name : <input type="text" value="<?php echo $row['st_name']; ?>" name="txt1">
            Gender : <select name="txt2">
                <option>Male</option>
                <option>Female</option>
            </select>
            <input type="Submit">
            
        </form>
    </body>
</html>