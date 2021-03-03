<?php 
include('connection.php');
$oid=$_GET['order_id'];
$q=mysqli_query($con,"update room_booking_details set status='accepted' where id='$oid' ");
if($q)
{
header('location:order.php');
}
?>