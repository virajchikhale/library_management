<?php
include('../includes/connection.php');

$name=$_POST['name'];
$roll=$_POST['roll'];
$enroll=$_POST['enroll'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$department=$_POST['department'];
$year=$_POST['year'];
$table=$_POST['table'];


if($table=="student"){
        // $i="select * from hod_reg where department_id='".$department."'";
        // $x=mysql_fetch_array(mysql_query($i));
        $sqlinsert="insert into student(roll, enroll, name, phone, email, year, department) 
        values('".$roll."' , '".$enroll."', '".$name."', '".$phone."', '".$email."', '".$year."', '".$department."')";

}

$res=mysql_query($sqlinsert);

        
if($res) {
        echo "0";
        }
else{
        echo "1";
}
?>