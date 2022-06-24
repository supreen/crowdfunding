<?php
//Database connection.

include 'db.php';

$sql = "SELECT id, memo, pass FROM control WHERE pass='".$sessionpass."' AND id='"."admin"."' ";

$result = $con->query($sql);


if ($result->num_rows > 0) {

$allowauthencity=1;
$adauthencity=1;

	
  }
 else {
$allowauthencity=0;
$adauthencity=0;

}
$con->close();




?>
