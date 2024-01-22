<?php
include('../includes/connection.php');

$book_id=$_POST['book_id'];
$amount=$_POST['amount'];
$book=$_POST['book'];
$date=date("Y-m-d");

$sqlinsert="UPDATE issue SET return_date ='".$date."', fine ='".$amount."', status ='1'  WHERE id='".$book_id."'";

$sqlinsert1="UPDATE books SET available_copies = available_copies + 1  WHERE id='".$book."'" ;


$res=mysql_query($sqlinsert);
$res1=mysql_query($sqlinsert1);

        
if($res) {
        echo "0";
        }
else{
        echo "1";
}
?>