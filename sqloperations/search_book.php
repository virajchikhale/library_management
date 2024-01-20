<?php
// Include your database connection code here
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library_management";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['query'])){
    $search = $_POST['query'];

    $sql = "SELECT * FROM books WHERE name LIKE '%$search%' OR author LIKE '%$search%' OR id LIKE '%$search%'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo $row['name'] . "|" . $row['author'] . "|". $row['id'] . "~";
        }
    } else {
        echo "<p>No results found</p>";
    }
}

$conn->close();
?>
