<?php
$servername = "localhost";
$username = "1";
$password = "1";
$dbname = "mybd";

// Создание соединения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}
?>

  <?php
include 'db_connect.php';

$sql = "SELECT * FROM lec";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<li><a href='#'>". $row["lec 1"]. "</a></li>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
