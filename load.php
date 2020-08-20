

	


<?php

 include ("connection.php");

$q1="SELECT * FROM `message`";
$r1=mysqli_query($conn,$q1);
while($row = mysqli_fetch_assoc($r1)){

$message = $row['message'];
$user_name = $row['user_name'];

echo '<h4 style="color:#4295F9;">'.$user_name.'</h4>';

// this is div tag for ...


echo '<p>'.$message.'</p>';


}






?>

 	
