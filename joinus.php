<?php
require "conn.php";
$name = $_POST["name"];		
$email = $_POST["email"];
$number = $_POST["number"];
$subject = $_POST["usn"];
$message = $_POST["branch"];
$message = $_POST["year"];


        
        if ( empty($name) OR empty($email) OR empty($number) OR empty($usn) OR empty($branch) OR empty($year))
        {
            
            http_response_code(400);
            echo "Please complete the Form and Try Again.";
            exit;
        }

   $sql ="INSERT INTO tech(name,email,number,usn,branch,year) VALUES ('$name','$email','$number','$usn','$branch','$year')";
$query = mysqli_query($conn,$sql);
?>
<script>
    alert(" Thank you for Contacting Us . We will reach back to you shortly");
    window.location.href = "index.html";
</script>


