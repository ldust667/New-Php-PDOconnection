<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
  <meta name="description" content="Test database">
  <meta name="keywords" content="HTML,CSS,XML,JavaScript">
  <meta name="author" content="Dustin Leach">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP test</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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

//$result = $sqlst->fetchAll();
//print($result[0][0]);

$data = $sqlst->fetchall();

//iterate 

?>
<div class="table-responsive container">
<table class="table" style="width:1%">
<thead>
<tr>
<?php foreach($data as $row):
     print "<th>" . $row['name'] . "</th>";
 endforeach ?>
</thead>
<tbody>
</tbody>
</table>

</div>

<div class="container form-group">
  <form>
  <label for="name">Name of metal:</label>
  <input type="text" name="name"><br>
  <label for="pricelb">Price of metal per pound:</label>
  <input type="text" name="pricelb">

<div class="radio">
  <label><input type="radio" name="optradio" checked>Add a record</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio">Remove a record</label>
</div>

<input type="submit" value="Submit">
</form>

</div>

<?php
//need action for form take for method




}

catch (PDOException $e) {
	//display an error message if connection fails
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}


?>

</body>

</html>
