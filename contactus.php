<?php
require "conn.php";
$name = $_POST["name"];		
$email = $_POST["email"];
$number = $_POST["number"];
$subject = $_POST["usn"];
$branch = $_POST["branch"];
$year = $_POST["year"];
$message = $_POST["message"];


        
        if ( empty($name) OR empty($email) OR empty($number) OR empty($usn) OR empty($branch) OR empty($year) OR empty($message))
        {
            
            http_response_code(400);
            echo "Please complete the Form and Try Again.";
            exit;
        }

   $sql ="INSERT INTO tech(name,email,number,usn,branch,year) VALUES ('$name','$email','$number','$usn','$branch','$year')";
$query = mysqli_query($conn,$sql);
?>
<script>
    alert("Thank for Contacting Us . We will reach back to you shortly");
    window.location.href = "index.html";
</script>


