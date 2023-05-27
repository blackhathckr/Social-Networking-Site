<?php
require "conn.php";
$usn=$_POST["usn"];
$password=$_POST["password"];
$sql="SELECT * FROM users";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result))
{
 if($email == $row["email"] && $password == $row["password"])
 {
     header("Location:/home.html");
     session_start();
    $_SESSION["usn"]=$row["usn"];
     
     
 }   
 else{
      $count=1;
 }
}

if($count=1)
{
     ?>
<script>
    alert("Invalid Credentials");
    window.location.href="login.html";
</script>
     <?php
}
?>