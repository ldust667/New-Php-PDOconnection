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

//printing as a test, output notworking from loop
echo "hello";
 foreach($conn->query('SELECT * from prices') as $row) {
        print "<p>" . $row . "</p>";
    }

}

catch (PDOException $e) {
	//display an error message if connection fails
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}


/*mysql_select_db('prices')
or die('Could not select a database.');
// build query:
$sql = "SELECT name, price_usd_lb FROM metals";
// execute query:
$result = mysql_query($sql)
or die('A error occurred: ' . mysql_error());
// get result count:
$count = mysql_num_rows($result);
print "<h3>$count metal prices available</h3>";
print "<table>";
print "<tr><th>Name</th><th>Price (USD/lb)</th></tr>";
// fetch results:
while ($row = mysql_fetch_assoc($result)) {
$name = $row['name'];
$price = $row['price_usd_lb'];
print "<tr><td><strong>$name</strong></td><td>$price</td></tr>";
}
print "</table>";
*/
?>

</body>

</html>
