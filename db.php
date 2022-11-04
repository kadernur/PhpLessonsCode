<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
//$sql = "CREATE DATABASE myDB";
//if (mysqli_query($conn, $sql)) {
//    echo "Database created successfully";
//} else {
//    echo "Error creating database: " . mysqli_error($conn);
//}

// sql to create table
//$sql = "CREATE TABLE MyGuests (
//id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//firstname VARCHAR(30) NOT NULL,
//lastname VARCHAR(30) NOT NULL,
//email VARCHAR(50),
//reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//)";


//$sql = "INSERT INTO MyGuests (firstname, lastname, email)
//VALUES ('Kader Nur', 'Tekin', 'tekinkader65@gmail.com')";
//
//if (mysqli_query($conn, $sql)) {
//    echo "New record created successfully";
//} else {
//    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//}
//if (mysqli_query($conn, $sql)) {
//    $last_id = mysqli_insert_id($conn);
//    echo "Table MyGuests created successfully,Last inserted ID is: " . $last_id;;
//} else {
//    echo "Error creating table: " . mysqli_error($conn);
//}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Mary', 'Moe', 'mary@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Julie', 'Dooley', 'julie@example.com')";

if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>