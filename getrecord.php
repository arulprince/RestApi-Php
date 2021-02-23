<?php
require_once('database.php');

$get_record="SELECT * FROM students";
$qry=mysqli_query($dbconn,$insert_student) or die(mysqli_error());

if(mysqli_num_rows($qry)>'0')
{
    $i=0;
    while($val=mysqli_fetch_assoc($qry))
    {
        $student[$i]['id']=$val['id'];
        $student[$i]['studentname']=$val['student_name'];
        $student[$i]['studentmark']=$val['student_mark'];
        $i=$i+1;
        
    }
    $response['status']=true;
    $response['message']=" sucess";
    $response['data']=$student;
}
else
{
    $response['status']=false;
    $response['message']=" failed";
}
header('Content-Type:application/json;charset=UTF-8');
echo json_encode($response);
?>
