<?php 
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$user_name=$_POST['user_name'];
$password=$_POST['password'];
$conn=new mysqli("localhost","root","pass123","mybook1") or die(mysql_error());
$sql="INSERT INTO user(first_name,last_name,user_name,password)
VALUES('$first_name','$last_name','$user_name','$password')";
if($conn->query($sql)===TRUE) {
 
 echo "new record entered";
}
else {
 
 echo "not entered";
}

?>