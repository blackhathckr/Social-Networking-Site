<?php 
require "conn.php";
$name=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];
$gender=$_POST["gender"];
$usn=$_POST["usn"];
$phone=$_POST["phone"];
$sql="INSERT INTO USERS (name,email,password,gender,usn,password) Values ($name,$email,$password,$gender,$usn,$phone)";
$query=mysqli_query($conn,$sql);
if($query)
{
  ?>
<script>
    window.location.href="login.html";
</script>
<?php
}
?>