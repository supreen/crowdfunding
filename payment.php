<?php


session_start();

//Fuction


function test_input($data) {
	$isequal = "=";
$oneone = "1=1";
$quote ='"';
	
if ($data==$isequal or $data==$oneone or $data=="105" or $data==$quote) {
$data="";
}
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


//credentials Fetching from db
//db admin
   include 'db.php';
$sql = "SELECT value, id, date FROM Settings WHERE Name='"."clientid"."' ";

$result = $con->query($sql);

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {

	$clientid=$row["value"];

}
  }
 else {

}
$con->close();

//continued code

//credentials settings
$paypalclientid=$clientid;
$paypalvalue=test_input($_GET["value"]);
$packagename=test_input($_GET["package"]);;
$content=test_input($_GET["content2"]);;


//Validation 



$sessionpass = test_input($_SESSION["pass@"]);



//Checking whether it is there or not 

//accessing the database and value from auth.php and db.php

include 'auth.php';







//code continued  



if ($allowauthencity==1){




	
	







?>





<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="apple-touch-icon" sizes="57x57" href="Images/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="Images/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="Images/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="Images/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="Images/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="Images/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="Images/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="Images/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="Images/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="Images/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="Images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="Images/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="Images/favicon-16x16.png">
<link rel="manifest" href="Images/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="Images/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>


/* unvisited link */
a:link {
  color: white;
}

/* visited link */
a:visited {
  color: white;
}

/* mouse over link */
a:hover {
  color: white;
}
a:active {
  color: white;
}

/* selected link */





body {
 background-image: url("Images/1515114578.jpg");
    background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */
background-color: #ffffff;
  
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}



.center {
  display: block;
  margin-up: auto;
  margin-left: auto;
  margin-right: auto;
  width: 70%;
}
.panel {
 display: block;
  margin-left: auto;
  margin-right: auto;
  
	width: 100%;
	
}




</style>
</head>
<body>





<?php  
//add navbar
include "navbar.php";

 ?> 
 <br>
 <br>
 
</div> 
  
</body>
</html>
        <title>Crowdfunding</title>  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>  
    <body>  
	<div>
	</div>
        <div class="container" style="width:100%; margin-up:auto; padding: 25px 15px;">
   <br />
   
   <br />
   <div class="panel panel-default">
      <div class="panel-heading"><h1>Payment</h1></div>
    <div class="panel-body">


<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body4 {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container4 {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body4>

<p>Please use your paypal or credit card to make payment</p>
<div class="row">
  <div class="col-25">
    <div class="container4">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>1</b></span></h4>
      <p><a id="product"></a><?php echo $packagename;?><span id="price" class="price"><?php echo $paypalvalue;?></span></p>
      <p><a id="content"><?php echo $content;?></a> <span class="price"></span></p>
      <hr>
	 

      <p>Total <b><span id="totalprice" class="price" style="color:black"><?php echo $paypalvalue;?></span></b></p>
    </div>
  </div>
</div>

</body>
</html>
<br>
<br>
<!--checkout -->

<center>
<?php
//payment
echo '
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Ensures optimal rendering on mobile devices. -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- Optimal Internet Explorer compatibility -->
  </head>

  <body>
    <script src="https://www.paypal.com/sdk/js?client-id='.$paypalclientid.'&disable-funding=credit"> // Replace YOUR_CLIENT_ID with your sandbox client ID
    </script>


    <div id="paypal-button-container"></div>

    <!-- Add the checkout buttons, set up the order and approve the order -->
    <script>
      paypal.Buttons({
		  
        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{
              amount: {';
			  
echo                "value: '".$paypalvalue."'";
echo'              }
            }]
          });
        },
        onApprove: function(data, actions) {
          return actions.order.capture().then(function(details) { ';
echo "            alert('Transaction completed by ' + details.payer.name.given_name);
       
	window.location.href = 'Thankyou.php';

	
		  });
        }
      }).render('#paypal-button-container'); // Display payment options on your web page
    </script>
  </body>
</html>



";
?>
</center>
   <br>


<br>  
   
   

    </div>
   </div>
  </div>
    </body>  
<script>
document.title = "Crowdfunding | Payment";
</script>




<?php

}
else {
	
	echo '
	
	<script>
	window.location.href = "admin.php";
	</script>
	
	
	';
}

?>
