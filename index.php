<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
	
<link rel="stylesheet" type="text/css" href="style.css">

	
</head>
<body>

   <div class="container">
   	<div class="form">
   	  <form action="" method="POST">
   	  	
   	  	<input type="text" name="name" placeholder="Name">
		<input type="email" name="email" placeholder="Email Address">
   	  	<input type="text" name="phone" placeholder="Phone">
   	  	<input type="text" name="subject" placeholder="Subject">
		<textarea name="msg" placeholder="Message"></textarea>
        <input type="submit" name="submit" value="Send" class="submit">
   	  </form>
   	  </div>
   </div>


</body>
</html>

<?php

if(isset($_POST['submit'])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$msg = $_POST['msg'];


$sql = "INSERT INTO form (name,email,phone,subject,message)
VALUES ('$name','$email','$phone','$subject','$msg')";

if (mysqli_query($conn, $sql)) {
    echo "<h3 class='success'>New record created successfully</h3>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
?>
