{"records":[ 
<?php
$servername = '127.0.0.1';
$username = 'root';
$password = 'Yukafaiz97';
$dbname = 'miniproject';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die('connection failed:  ' . $conn->connect_error);

}

$sql = 'SELECT email, name FROM users';
$result = $conn->query($sql);
$currentrow = 0;
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $currentrow += 1;
        echo '("Name":"' . $row['name'] . '","Email":"' . $row['email'] , '"}';
        if ($result->num_rows > $currentrow) {
            echo ',';
        }
    }
} else { echo '0 results'; }
$conn->close(); ?>

    ]}