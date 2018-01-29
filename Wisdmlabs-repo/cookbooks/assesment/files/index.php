<?php
$servername = "localhost";
$username = "root";
$password = "root";

try {
    $conn = new PDO("mysql:host=$servername;dbname=counter", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$user_ip=$_SERVER['REMOTE_ADDR'];
	$sql ="select userip from pageview where page='52.66.11.183' and userip='$user_ip'";
	$insert = "insert into pageview(page,userip) values('52.66.11.183','$user_ip')";
	$stmt = $conn->prepare($sql);
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

if (sizeOf($stmt->fetchAll() ) > 0) {
   
} else {
    $conn->exec($insert);
}
$sql ="select userip from pageview";
$stmt = $conn->prepare($sql);
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
	echo "You are vistor: ".sizeOf($stmt->fetchAll() );
$conn = null;
	
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>

