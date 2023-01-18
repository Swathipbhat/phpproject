<?php
require_once "db.php";
$name = mysqli_real_escape_string($conn, $_POST['name']);
$age =  $_POST['age'];
$gender =  $_POST['gender'];
$mobile = $_POST['mobile'];
$std = $_POST['std'];
if(mysqli_query($conn, "INSERT INTO intern(name, age, gender,mobile,std) VALUES('$name', $age,'$gender', $mobile,$std)")) {
echo '1';
} else {
echo "Error: " . $sql . "" . mysqli_error($conn);
}
mysqli_close($conn);
?>