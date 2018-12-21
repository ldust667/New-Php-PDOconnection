<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
  <meta name="description" content="Test database">
  <meta name="keywords" content="HTML,CSS,XML,JavaScript">
  <meta name="author" content="Dustin Leach">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP test</title>
</head>


<body>



<?php

$user = 'dleach';
$pass = 'newpass';







try{
//connecting to the database
$conn = new PDO('mysql:host=localhost;dbname=prices', $user, $pass);



//$sqlst = $conn->prepare("select count(*) from metals");
//$sqlst->execute();
//print $sqlst;


//select query for output
$sqlst = $conn->prepare("select name from metals");
$sqlst->execute();

$result = $sqlst->fetchAll();


print($result[0][0]); 



}

catch (PDOException $e) {
	//display an error message if connection fails
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}


?>

</body>

</html>
