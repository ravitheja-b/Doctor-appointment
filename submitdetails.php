<html>
<body>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hellodoctor";


$link = mysqli_connect($servername, $username, $password, $dbname);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$location = $_POST['location'];
 
// Attempt insert query execution
$sql = "INSERT INTO users (name, email, phone, location) VALUES ('$name','$email','$phone','$location')";

if(mysqli_query($link, $sql)){
    echo "Your appointment is booked!. Our experts will get in touch with your shortly";
} else{
    echo "Unable to submit $sql" . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>



</body>
</html>