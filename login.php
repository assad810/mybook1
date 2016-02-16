<?php
session_start();
$conn=mysqli_connect("localhost","root","mybook1") or die(mysql_error());
 mysql_select_db("user");
 $user_name=$_POST['user_name'];
 $password=$_POST['password'];

user_login($conn,$user_name, $password);

function user_login($conn, $user_name,$password)
{
 $user_name = mysql_real_escape_string($user_name); 
 
 try{ 
 $sql = mysqli_query($conn,"SELECT * FROM user WHERE user_name='$user_name' AND password='$password'");
 $rows = mysqli_num_rows($sql); 
 
 if($rows<=0)
 {
   
   //echo "incorrect user name or pasword";
   

 }
 else
 {
  $_SESSION['user_name']=$user_name;
  header('Location:post.html');
 }
 }
 catch(Exception $e)
 {
  echo 'Caught exception: ',$e->getMessage();
 }
}
?>