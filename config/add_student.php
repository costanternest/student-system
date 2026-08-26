<?php
include "database.php";

if (isset($_POST['submit'])) {

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $registration_number = $_POST['registration_number'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO students 
            (first_name, last_name, registration_number, email, phone)
            VALUES 
            ('$first_name', '$last_name', '$registration_number', '$email', '$phone')";

    if (mysqli_query($conn, $sql)) {
        echo "Student registered successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
</head>
<body>

<h1>Student Registration</h1>

<form method="POST">

    <label>First Name:</label><br>
    <input type="text" name="first_name" required><br><br>

    <label>Last Name:</label><br>
    <input type="text" name="last_name" required><br><br>

    <label>Registration Number:</label><br>
    <input type="text" name="registration_number" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Phone:</label><br>
    <input type="text" name="phone"><br><br>

    <button type="submit" name="submit">Register Student</button>

</form>

</body>
</html>