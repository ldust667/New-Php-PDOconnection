
<?php
/* Template Name: Budgeting */




function connect($query){

	$user = 'waagh';
	$pass = 'Norest2019';

	$conn = new PDO('mysql:host=localhost;dbname=budget', $user, $pass);
	$sqlst = $conn->prepare($query);
	$sqlst->execute();
	$data = $sqlst->fetchall();
	$sqlst= null;
	$conn= null;
	return $data;

}



//function to test input
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}





/*	if($_SERVER["REQUEST_METHOD"] == "POST"){
//echo "submit has worked";
		$conn1 = new PDO('mysql:host=localhost;dbname=budget', $user, $pass);
		$sqlst1 = $conn1->prepare("select grand_total from total where budget_num=1");
//$sqlst1 = $conn1->prepare("insert into transactions(transactions.note,transactions.amount,transactions.date,transactions.total) values( " + $_POST['note'] + ", " + $_POST['amount'] + ", CURDATE() , (total.grand_total-transactions.amount));" );
//$_POST['note'] date amount total
		$sqlst1->execute();
		$data1 = $sqlst1->fetchall();
//print "Hi" . $data1;
		foreach($data1 as $row):

			print $data1['grand_total'];
		endforeach



*/



?>



<div class="table-responsive container">
<table class="table" style="width:50%">
<thead>
<tr>
Transactions:
</thead>
<tbody>
<tr>
<?php foreach(connect("select * from withdrawals") as $row):
     print "<th>" . $row['note'] . "</th>";
     print "<th>" . $row['date'] . "</th>";
     print "<th>" . $row['amount'] . "</th>";
     print "<th>" . "</th>";
 endforeach ?>
</tr>
</tbody>
</table>

 <form  method=post>
  Note: <input type="text" name="note" alt="transaction_note_entry"><br>
  Amount Taken: <input type="text" name="amount" alt="text_entry_amount"><br>
  <input type="submit" name="add" alt="submit_feild" value="Submit">
</form> 



<?php

   /*  if($_SERVER["REQUEST_METHOD"] == "POST"){
//echo "submit has worked";
                $sqlst1 = $conn->prepare("select * from total where budget_num=1");
//$sqlst1 = $conn1->prepare("insert into transactions(transactions.note,transactions.amount,transactions.date,transactions.total) values( " + $_POST['n$
//$_POST['note'] date amount total
                $sqlst1->execute();
                $data1 = $sqlst1->fetchall();
//print "Hi" . $data1;
                foreach($data1 as $row):

                        print $data1['grand_total'];
                endforeach

*/
?>
