<?php
include('../includes/connection.php');

$book=$_POST['book'];
$stud=$_POST['stud'];
$issue_date=$_POST['issue_date'];
$due_date=$_POST['due_date'];

$sqlinsert="insert into issue(book_id, stud_id, issue_date, due_date, return_date, status) 
values('".$book."' , '".$stud."', '".$issue_date."', '".$due_date."', '0', '0')";

$sqlinsert1="UPDATE books SET available_copies = available_copies - 1  WHERE id='".$book."'" ;


$res=mysql_query($sqlinsert);
$res1=mysql_query($sqlinsert1);

        
if($res) {
        echo "0";
        }
else{
        echo "1";
}
?>