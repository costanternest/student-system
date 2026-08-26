<?php
include("database.php");

$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
</head>
<body>

<h2>Registered Students</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Registration Number</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['first_name']; ?></td>
            <td><?php echo $row['last_name']; ?></td>
            <td><?php echo $row['registration_number']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phone']; ?></td>
        </tr>
    <?php } ?>

</table>

</body>
</html>