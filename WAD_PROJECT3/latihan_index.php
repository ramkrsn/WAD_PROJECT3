<?php
$conn = mysqli_connect("localhost:3306", "root", "", "wad_project3");
$result = mysqli_query($conn, "SELECT*FROM student ");
// $data = mysqli_fetch_object($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LATIHAN DATA</title>

</head>
<body>

<h1>STRUKTUR DATA </h1>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>NIM</th>
            <th>Address</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while($data = mysqli_fetch_object($result)) {
            echo "<tr>";
            echo "<td>" . $data-> id . "</td>";
            echo "<td>" . $data-> name . "</td>";
            echo "<td>" . $data-> nim . "</td>";
            echo "<td>" . $data-> address . "</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>




</thead>
</body>
</html>