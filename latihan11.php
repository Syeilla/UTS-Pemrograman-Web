<?php
//membuat koneksi di db
$conn=mysqli_connect("localhost", "root","","latihanKu");

//Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
