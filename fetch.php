<?php
include 'config.php';
$sql=" SELECT * FROM users ";
$query=mysqli_query($con,$sql);
// header('Content-type:application/json');

if(mysqli_num_rows($query)>0); 
{
    while($result=mysqli_fetch_assoc($query)){
        $arr[]=$result;
// print_r($result);
echo json_encode(['data'=>$arr]);



}

}
?>