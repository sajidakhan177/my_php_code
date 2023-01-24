<html>
<body>
<?php

$name=$_POST["name"];
$emailid=$_POST["email"];

$user = "root";
$password = "";
$database = "test_database";
$conn= new mysqli('localhost', $user, $password, $database);
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(name, email) values(?,?)");
		$stmt->bind_param("ss", $name, $emailid);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
    ?>
    </body>
    </html>
