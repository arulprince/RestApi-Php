<?php
require_once('database.php');
$student_name=$_GET['sname'];
$student_mark=$_GET['smark'];
$insert_student="INSERT INTO students(student_name,student_mark) VALUES('$sname','$smark')";
$qry=mysqli_query($dbconn,$insert_student) or die(mysqli_error());
if($qry){
    $response['status']=true;
    $response['message']="inserted sucessfully";
}
else
{
    $response['status']=false;
    $response['message']="inserting failed";
}
header('Content-Type:application/json;charset=UTF-8');
echo json_encode($response);
?>
