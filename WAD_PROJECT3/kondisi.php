<?php
$conn = mysqli_connect("localhost:3306", "root", "", "wad_project3");
$result = mysqli_query($conn, "SELECT*FROM student ");
while($data = mysqli_fetch_object($result))
?>