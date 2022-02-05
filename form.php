<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
    <style>
        table,th,td {
            border: 0.5px solid black;
        }
        </style>

</head>
<body>
    

<?php
$fullname = $number = $email = $message = "";

$fullname = $_POST['name'];
$number = $_POST['number'];
$email = $_POST['email'];
$message = $_POST['message'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
 {
  die("Connection failed: " . $conn->connect_error);
}
else
{
    $stmt = $conn->prepare("insert into customer(name,number,email,message) values(?,?,?,?)");
    $stmt->bind_param("siss",$fullname,$number,$email,$message);
    $stmt->execute();
    echo "suces";
    $stmt->close();
}
$conn->close();
?>
</body>
</html>