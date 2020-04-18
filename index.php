<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
	
<link rel="stylesheet" type="text/css" href="style.css">

	<style type="text/css">
		body {
background: url("https://previews.123rf.com/images/stori/stori1810/stori181000063/109735138-abstract-blue-background.jpg");
background-repeat: no-repeat;
background-size: 100%;

}

.container {

   background: #000000;
   width: 400px;
   height: 380px;
   margin: 0 auto;
   margin-top: 100px;
   border-radius: 2px;
   opacity: 0.8;
		}

.form {
	margin: 0 auto;
	width: 80%;

}		

input, textarea {
	width: 100%;
   background: #000000;
   padding: 15PX;
   border: none;
   border-bottom: 1px solid #39b7dd;
   color: #39b7dd;
  margin-bottom: 10px;
}	

::-webkit-input-placeholder { /* Edge */
  color: #39b7dd;
}

:-ms-input-placeholder { /* Internet Explorer */
  color: #39b7dd;
}

::placeholder {
  color: #39b7dd;
}	

.submit {
	border:none;
	background: #39b7dd;
	color: #fff;
	margin-top: 10px;
}

.success {
	text-align: center;
	background:#000;
	color: #39b7dd;
	font-family: arial;

}
	
	</style>
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
<pre>
     <xmp><!-- your html code --></xmp>
</pre>


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
