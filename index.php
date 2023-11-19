<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "assignment3";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $comment = $_POST['comment'];

    $sql = "INSERT INTO contact (name, phone, email, password, comment) VALUES ('$name', '$phone', '$email', '$password', '$comment')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: ");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
