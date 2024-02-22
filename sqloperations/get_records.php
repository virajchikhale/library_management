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

// if(isset($_POST['query'])){
    // $search = "27";
    $search = $_POST['query'];

    $sql = "SELECT * FROM issue WHERE stud_id = '".$search."'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $sql1 = "SELECT * FROM books WHERE id = '".$row['book_id']."'";
            $result1 = $conn->query($sql1);
                while($row1 = $result1->fetch_assoc()){
                    echo $row1['id'] . "|". $row1['name'] . "|" . $row1['author']. "|". $row['issue_date'] . "|". $row['due_date'] . "|". $row['return_date'] . "|". $row['status'] . "|". $row['id'] . "~";
                }
        }
    } else {
        echo "<p>No results found</p>";
    }
// }

$conn->close();
?>
