<?php


session_start();
$theapifunction="xyz123";
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




//Validation 



$sessionpass = test_input($_SESSION["pass@"]);



//Checking whether it is there or not 

//accessing the database and value from auth.php and db.php

include 'adauth.php';







//code continued  



if ($allowauthencity==1){




	
	







?>
   <?php
   
  
//db pass admin 
   include 'db.php';
$sql = "SELECT id, pass, memo FROM control WHERE id='"."admin"."' ";

$result = $con->query($sql);

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {

	$apass=$row["pass"];
    $amemo=$row["memo"];

}
  }
 else {

}
$con->close();

//continued code



 //db pass fandf
   include 'db.php';
$sql = "SELECT id, pass, memo FROM control WHERE id='"."fandf"."' ";

$result = $con->query($sql);

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {

	$fpass=$row["pass"];
    $fmemo=$row["memo"];

}
  }
 else {

}
$con->close();

//continued code


 //db pass investor
   include 'db.php';
$sql = "SELECT id, pass, memo FROM control WHERE id='"."investor"."' ";

$result = $con->query($sql);

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {

	$ipass=$row["pass"];
    $imemo=$row["memo"];

}
  }
 else {

}
$con->close();

//continued code

 //db pass vc
   include 'db.php';
$sql = "SELECT id, pass, memo FROM control WHERE id='"."vc"."' ";

$result = $con->query($sql);

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {

	$vcpass=$row["pass"];
    $vcmemo=$row["memo"];

}
  }
 else {

}
$con->close();

//continued code

   
   
   
//db progressbar    
   include 'db.php';
$sql = "SELECT value, id, date FROM Settings WHERE Name='"."progressbar"."' ";

$result = $con->query($sql);

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {

	$progressbar=$row["value"];
	
	
	$progressbar1= explode(",",$progressbar);
    $pbachieved=$progressbar1[0];
    $pbfrom=$progressbar1[1];
  
}
  }
 else {

}
$con->close();
//continued code


//db admin
   include 'db.php';
$sql = "SELECT value, id, date FROM Settings WHERE Name='"."content"."' ";

$result = $con->query($sql);

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {

	$newcontent=$row["value"];

}
  }
 else {

}
$con->close();

//continued code


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







//db content
   include 'db.php';
$sql = "SELECT value, id, date FROM Settings WHERE Name='"."content"."' ";

$result = $con->query($sql);

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {

	$newcontent=$row["value"];

}
  }
 else {

}
$con->close();
//continued code


//db pack backer  
include 'db.php';
$sql = "SELECT serial, packcontent, packprice, packprice2, packprice3, color FROM packages WHERE packname='"."Backer"."' ";

$result = $con->query($sql);

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {

$bpackcontent=$row["packcontent"];
$bpackprice=$row["packprice"];
$bpackprice2=$row["packprice2"];
$bpackprice3=$row["packprice3"];
$bcolor=$row["color"];

}
  }
 else {

}
$con->close();
//continued code

//db pack Supporter
include 'db.php';
$sql = "SELECT serial, packcontent, packprice, packprice2, packprice3, color FROM packages WHERE packname='"."Supporter"."' ";

$result = $con->query($sql);

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {

$spackcontent=$row["packcontent"];
$spackprice=$row["packprice"];
$spackprice2=$row["packprice2"];
$spackprice3=$row["packprice3"];
$scolor=$row["color"];

}
  }
 else {

}
$con->close();
//continued code



//db Pioneer
include 'db.php';
$sql = "SELECT serial, packcontent, packprice, packprice2, packprice3, color FROM packages WHERE packname='"."Pioneer"."' ";

$result = $con->query($sql);

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {

$ppackcontent=$row["packcontent"];
$ppackprice=$row["packprice"];
$ppackprice2=$row["packprice2"];
$ppackprice3=$row["packprice3"];
$pcolor=$row["color"];

}
  }
 else {

}
$con->close();
//continued code


//db Pack Planeteer
include 'db.php';
$sql = "SELECT serial, packcontent, packprice, packprice2, packprice3, color FROM packages WHERE packname='"."Planeteer"."' ";

$result = $con->query($sql);

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {

$plpackcontent=$row["packcontent"];
$plpackprice=$row["packprice"];
$plpackprice2=$row["packprice2"];
$plpackprice3=$row["packprice3"];
$plcolor=$row["color"];

}
  }
 else {

}
$con->close();
//continued code

//db Pack Captain Planet
include 'db.php';
$sql = "SELECT serial, packcontent, packprice, packprice2, packprice3, color FROM packages WHERE packname='"."Captain Planet"."' ";

$result = $con->query($sql);

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {

$cpackcontent=$row["packcontent"];
$cpackprice=$row["packprice"];
$cpackprice2=$row["packprice2"];
$cpackprice3=$row["packprice3"];
$ccolor=$row["color"];

}
  }
 else {

}
$con->close();
//continued code

//db Pack Captain Investor
include 'db.php';
$sql = "SELECT serial, packcontent, packprice, packprice2, packprice3, color FROM packages WHERE packname='"."Investor"."' ";

$result = $con->query($sql);

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {

$ipackcontent=$row["packcontent"];
$ipackprice=$row["packprice"];
$ipackprice2=$row["packprice2"];
$ipackprice3=$row["packprice3"];
$icolor=$row["color"];

}
  }
 else {

}
$con->close();
//continued code
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
 /* demo theme styles */
    .container3 {
     
    overflow: auto;

    }	 
	 
	 #container3 {
		   overflow: auto;

}

    .site-header .logo {
      width: 100%;
    }

    .logo span,
    .logo img {
      display: block;
      float: left;
    }

    .logo span {
      padding: 10px 0 0 10px;
    }

    .site-header {
      padding: 5px 0;
      z-index: 10;
    }

    @media (max-width: 767px) {
      .site-header .logo span {
        display: block;
      }
    }


    .demo-wrapper {
      margin-bottom: 50px;
      line-height: 1.6;
    }

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

/* selected link */
a:active {
  color: white;
}

.flex2-container {
	display: inline-block;
 position: relative;
  display: flex;
  flex-direction: row;
  
}

.flex2-container > div {
	display: inline-block;
  width: 40%;
  height: 100%;  
   position: relative;
  margin: 10px;
  padding: 20px;
  font-size: 12px;
}



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


.progress-bg {
	margin: 0 auto;
	width: 65%;
	height: 78px;
	border-radius: 10px;
  text-align: center;
	-moz-box-shadow:    inset 0 0 10px #ccc;
	-webkit-box-shadow: inset 0 0 10px #ccc;
	box-shadow:         inset 0 0 10px #ccc;
}

.progress-bar {
	height: 78px;
	border-radius: 10px;
	float: left;
	width: 50%;
	/* fallback */ 
	background-color: #1c314a; 
	
	/* Safari 4-5, Chrome 1-9 */ 
	background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#1c314a), to(#27425f)); 
	
	/* Safari 5.1, Chrome 10+ */ 
	background: -webkit-linear-gradient(top, #1c314a, #27425f); 
	
	/* Firefox 3.6+ */ 
	background: -moz-linear-gradient(top, #1c314a, #27425f); 
	
	/* IE 10 */ 
	background: -ms-linear-gradient(top, #1c314a, #27425f); 
	
	/* Opera 11.10+ */ 
	background: -o-linear-gradient(top, #1c314a, #27425f);	
}

.progress-bg h3.goal, .progress-bg h3.raised {
	font-family: Arial,sans-serif;
  font-size: 2em;
  font-weight: 600;
	line-height: 78px;
	margin: 0;
	padding: 0;
	text-align: center;
	display: inline;
}


.progress-bg h3.raised {
	color: #fff;
	margin: 14px 25px 0 50px;
	padding: 0 25px 0 0;
}

.progress-bg h3.goal {
	color: #b2b2b2;
  text-align: center;
}

body .progress-bg h3.raised {
    -webkit-animation: fadein 4s; /* Safari and Chrome */
       -moz-animation: fadein 4s; /* Firefox */
        -ms-animation: fadein 4s; /* Internet Explorer */
         -o-animation: fadein 4s; /* Opera */
            animation: fadein 4s;
}

@keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}

/* Firefox */
@-moz-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}

/* Safari and Chrome */
@-webkit-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}

/* Internet Explorer */
@-ms-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}​

/* Opera */
@-o-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}​

.progress-bg h3.goal {
	float: right;
	display: inline;
	padding: 0 25px 0 0;
  text-align: center;
}

body .progress-bg div {
	-webkit-animation: progress-bar 2s ease forwards;
	-moz-animation: progress-bar 2s ease forwards;
	-o-animation: progress-bar 2s ease forwards;
	animation: progress-bar 2s ease forwards;
}

@-webkit-keyframes progress-bar {
    from { width: 0%; }
    to { width: 50%; }
}

@-moz-keyframes progress-bar {
    from { width: 0%; }
    to { width: 50%; }
}

@-o-keyframes progress-bar {
    from { width: 0%; }
    to { width: 50%; }
}

@keyframes progress-bar {
    from { width: 0%; }
    to { width: 50%; }
}

.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #1c314a;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #1c315a;
}

.button:hover {background-color: #476ECC}

.button:active {
  background-color: #476ECC;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
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
        <title>CROWDFUNDING</title>  
<link rel="stylesheet" type="text/css" href="pb/goalProgress.css" />
   
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>  
    <body>  
	
    



<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="sobdar.com">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <!-- Font Icon -->
    <link rel="stylesheet" href="form/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="form/vendor/nouislider/nouislider.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="form/css/style.css">
</head>

<body2>

    <div class="main">

        <div class="container2">
            <form method="POST" id="signup-form" class="signup-form" action="apupdate.php">
                <div>
				
				<h3>Password and Memo Management</h3>
                    <fieldset>
           		 <h2>Password and Memo Management</h2>
                        <p class="desc">Please enter your infomation and proceed to next step</p>
                        <p class="desc">Please Note: <b> <  > " 1=1 105 </b> and other similar characters are not allowed for security reasons</p>
                       
					   <div class="fieldset-content">
                            <div class="form-row">
                                <label class="form-label">Admin</label>
                                <div class="form-flex">
                                    <div class="form-group">
                                        <input type="text" name="apass" id="apass" value="<?php echo $apass; ?>" />
                                        <span class="text-input">Password</span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="amemo" id="amemo" value="<?php echo $amemo; ?>" />
                                        <span class="text-input">Memo</span>
                                    </div>
                                </div>
                            </div>
							 <div class="form-row">
                                <label class="form-label">Friends and Family</label>
                                <div class="form-flex">
                                    <div class="form-group">
                                        <input type="text" name="fpass" id="fpass" value="<?php echo $fpass; ?>" />
                                        <span class="text-input">Password</span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="fmemo" id="fmemo" value="<?php echo $fmemo; ?>" />
                                        <span class="text-input">Memo</span>
                                    </div>
                                </div>
                            </div>
							 <div class="form-row">
                                <label class="form-label">Investor</label>
                                <div class="form-flex">
                                    <div class="form-group">
                                        <input type="text" name="ipass" id="ipass" value="<?php echo $ipass; ?>" />
                                        <span class="text-input">Password</span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="imemo" id="imemo" value="<?php echo $imemo; ?>" />
                                        <span class="text-input">Memo</span>
                                    </div>
                                </div>
                            </div>
							 <div class="form-row">
                                <label class="form-label">VC</label>
                                <div class="form-flex">
                                    <div class="form-group">
                                        <input type="text" name="vcpass" id="vcpass" value="<?php echo $vcpass; ?>" />
                                        <span class="text-input">Password</span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="vcmemo" id="vcmemo" value="<?php echo $vcmemo; ?>" />
                                        <span class="text-input">Memo</span>
                                    </div>
                                </div>
                            </div>
							
							
							
                        </div>
							</fieldset>
				
				
        	<h3>Packages/Plans Management</h3>

              
				<fieldset>
          
				<h2>Packages/Plans Managementt</h2>
                        <p class="desc">Please enter your infomation and proceed to next step</p>
                        <p class="desc">Please Note: <b> <  > " 1=1 105 </b> and other similar characters are not allowed for security reasons</p>
                      		<div class="container3" style="height:60%;">     
					
					<div class="fieldset-content">
     
	 
							
							
							<div class="form-row">
                                <label class="form-label">&nbsp;Backer</label>
                                <div class="form-flex">
                                    <div class="form-group">
                                        <input type="text" name="bpackcontent" id="bpackcontent" value="<?php echo $bpackcontent; ?>" />
                                        <span class="text-input">&nbsp;&nbsp;Content</span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="bcolor" id="bcolor" value="<?php echo $bcolor; ?>" />
                                        <span class="text-input">Color Hex</span>
                                    </div>
                                </div>
                            </div>
							<div class="form-row">
                                <div class="form-flex">
                                    <div class="form-group">
                                        <input type="text" name="bpackprice" id="bpackprice" value="<?php echo $bpackprice; ?>" />
                                        <span class="text-input">&nbsp;&nbsp;Family and Friend Price</span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="bpackprice2" id="bpackprice2" value="<?php echo $bpackprice2; ?>" />
                                        <span class="text-input">Investor Price</span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="bpackprice3" id="bpackprice3" value="<?php echo $bpackprice3; ?>" />
                                        <span class="text-input">VC Price</span>
                                    </div>
                                </div>
                            </div>
     
	 
							
							
							<div class="form-row">
                                <label class="form-label">&nbsp;Supporter</label>
                                <div class="form-flex">
                                    <div class="form-group">
                                        <input type="text" name="spackcontent" id="spackcontent" value="<?php echo $spackcontent; ?>" />
                                        <span class="text-input">&nbsp;&nbsp;Content</span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="scolor" id="scolor" value="<?php echo $scolor; ?>" />
                                        <span class="text-input">Color Hex</span>
                                    </div>
                                </div>
                            </div>
							<div class="form-row">
                                <div class="form-flex">
                                    <div class="form-group">
                                        <input type="text" name="spackprice" id="spackprice" value="<?php echo $spackprice; ?>" />
                                        <span class="text-input">&nbsp;&nbsp;Family and Friend Price</span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="spackprice2" id="spackprice2" value="<?php echo $spackprice2; ?>" />
                                        <span class="text-input">Investor Price</span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="spackprice3" id="spackprice3" value="<?php echo $spackprice3; ?>" />
                                        <span class="text-input">VC Price</span>
                                    </div>
                                </div>
                            </div>







     
	 
							
							
							<div class="form-row">
                                <label class="form-label">&nbsp;Pioneer</label>
                                <div class="form-flex">
                                    <div class="form-group">
                                        <input type="text" name="ppackcontent" id="ppackcontent" value="<?php echo $ppackcontent; ?>" />
                                        <span class="text-input">&nbsp;&nbsp;Content</span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="pcolor" id="pcolor" value="<?php echo $pcolor; ?>" />
                                        <span class="text-input">Color Hex</span>
                                    </div>
                                </div>
                            </div>
							<div class="form-row">
                                <div class="form-flex">
                                    <div class="form-group">
                                        <input type="text" name="ppackprice" id="ppackprice" value="<?php echo $ppackprice; ?>" />
                                        <span class="text-input">&nbsp;&nbsp;Family and Friend Price</span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="ppackprice2" id="ppackprice2" value="<?php echo $ppackprice2; ?>" />
                                        <span class="text-input">Investor Price</span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="ppackprice3" id="ppackprice3" value="<?php echo $ppackprice3; ?>" />
                                        <span class="text-input">VC Price</span>
                                    </div>
                                </div>
                            </div>








     
	 
							
							
							<div class="form-row">
                                <label class="form-label">&nbsp;Planeteer</label>
                                <div class="form-flex">
                                    <div class="form-group">
                                        <input type="text" name="plpackcontent" id="plpackcontent" value="<?php echo $plpackcontent; ?>" />
                                        <span class="text-input">&nbsp;&nbsp;Content</span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="plcolor" id="plcolor" value="<?php echo $plcolor; ?>" />
                                        <span class="text-input">Color Hex</span>
                                    </div>
                                </div>
                            </div>
							<div class="form-row">
                                <div class="form-flex">
                                    <div class="form-group">
                                        <input type="text" name="plpackprice" id="plpackprice" value="<?php echo $plpackprice; ?>" />
                                        <span class="text-input">&nbsp;&nbsp;Family and Friend Price</span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="plpackprice2" id="plpackprice2" value="<?php echo $plpackprice2; ?>" />
                                        <span class="text-input">Investor Price</span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="plpackprice3" id="plpackprice3" value="<?php echo $plpackprice3; ?>" />
                                        <span class="text-input">VC Price</span>
                                    </div>
                                </div>
                            </div>








     
	 
							
							
							<div class="form-row">
                                <label class="form-label">&nbsp;Captain Planet</label>
                                <div class="form-flex">
                                    <div class="form-group">
                                        <input type="text" name="cpackcontent" id="cpackcontent" value="<?php echo $cpackcontent; ?>" />
                                        <span class="text-input">&nbsp;&nbsp;Content</span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="ccolor" id="ccolor" value="<?php echo $ccolor; ?>" />
                                        <span class="text-input">Color Hex</span>
                                    </div>
                                </div>
                            </div>
							<div class="form-row">
                                <div class="form-flex">
                                    <div class="form-group">
                                        <input type="text" name="cpackprice" id="cpackprice" value="<?php echo $cpackprice; ?>" />
                                        <span class="text-input">&nbsp;&nbsp;Family and Friend Price</span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="cpackprice2" id="cpackprice2" value="<?php echo $cpackprice2; ?>" />
                                        <span class="text-input">Investor Price</span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="cpackprice3" id="cpackprice3" value="<?php echo $cpackprice3; ?>" />
                                        <span class="text-input">VC Price</span>
                                    </div>
                                </div>
                            </div>








     
	 
							
							
							<div class="form-row">
                                <label class="form-label">&nbsp;Investor</label>
                                <div class="form-flex">
                                    <div class="form-group">
                                        <input type="text" name="ipackcontent" id="ipackcontent" value="<?php echo $ipackcontent; ?>" />
                                        <span class="text-input">&nbsp;&nbsp;Content</span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="icolor" id="icolor" value="<?php echo $icolor; ?>" />
                                        <span class="text-input">Color Hex</span>
                                    </div>
                                </div>
                            </div>
							<div class="form-row">
                                <div class="form-flex">
                                    <div class="form-group">
                                        <input type="text" name="ipackprice" id="ipackprice" value="<?php echo $ipackprice; ?>" />
                                        <span class="text-input">&nbsp;&nbsp;Family and Friend Price</span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="ipackprice2" id="ipackprice2" value="<?php echo $ipackprice2; ?>" />
                                        <span class="text-input">Investor Price</span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="ipackprice3" id="ipackprice3" value="<?php echo $ipackprice3; ?>" />
                                        <span class="text-input">VC Price</span>
                                    
									
									   
									
									<input type="hidden" name="theapifunction" id="theapifunction" value="<?php echo $theapifunction; ?>" class="form-control"/>
									</div>
                                </div>
                            </div>








					</div>		
							
							
                        </div>
							</fieldset>
				
						
					
					
					
					
					

        		<h3>General Setting </h3>
                    <fieldset>
           		 <h2>General Settings</h2>
                        <p class="desc">Please enter your infomation and proceed to next step</p>
                        <p class="desc">Please Note: <b> <  > " 1=1 105 </b> and other similar characters are not allowed for security reasons</p>
                       
					   <div class="fieldset-content">
                            <div class="form-row">
                                <label class="form-label">Paypal Client ID</label>
                               
                                    <div class="form-group">
                                        <input type="text" name="clientid" id="clientid" value="<?php echo $clientid; ?>" />
                                        <span class="text-input">Client ID</span>
                               </div>    
                             </div>
                       
                            <div class="form-row">
                                <label class="form-label">Website Content</label>
                               
                                    <div class="form-group">
                                        <input type="text" name="newcontent" id="newcontent" value="<?php echo $newcontent; ?>" />
                                        <span class="text-input">Website Content</span>
                                    </div>
					   
                              
                            </div>
							 <div class="form-row">
                                <label class="form-label">Progress Bar</label>
                               <div class="form-flex">
                                    <div class="form-group">
                                        <input type="text" name="pbachieved" id="pbachieved" value="<?php echo $pbachieved; ?>" />
                                        <span class="text-input">Raised</span>
                                    </div>
                                     <div class="form-group">
                                        <input type="text" name="pbfrom" id="pbfrom" value="<?php echo $pbfrom; ?>" />
                                        <span class="text-input">Goal</span>
                                    </div>
					   
                              </div>
                            </div>

                        </div>
							</fieldset>
				
					
					
					
					
					
                </div>
				
				
				
				
				
            </form>
        </div>

    </div>

    <!-- JS -->
    <script src="form/vendor/jquery/jquery.min.js"></script>
    <script src="form/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="form/vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="form/vendor/jquery-steps/jquery.steps.min.js"></script>
    <script src="form/vendor/minimalist-picker/dobpicker.js"></script>
    <script src="form/vendor/nouislider/nouislider.min.js"></script>
    <script src="form/vendor/wnumb/wNumb.js"></script>
    <script src="form/js/main.js"></script>
</body2>

</html>



  




  </div>


<script>
document.title = "Crowdfunding | Admin Panel";
</script>

<script>
// This is the initial GravityForms binding, it will be lost upon a page change with next/previous
// Thus we make a bind on gform_page_loaded event also
 if( jQuery('.custom-form').length > 0 ) {
	jQuery('.gfield_radio input[type=radio]').bind("click", function() {
		//console.log('Clicked: ' + jQuery( this ).closest('.gform_page').find('.gform_page_footer .gform_next_button.button') );
		jQuery(this).closest('.gform_page').find('.gform_page_footer .gform_next_button.button').click();
	});
}

jQuery(document).bind('gform_page_loaded', function(event, form_id, current_page){
      // code to be trigger when next/previous page is loaded
      if( jQuery('.custom-form').length > 0 ) {
		jQuery('.gfield_radio input[type=radio]').bind("click", function() {
			//console.log('Clicked: ' + jQuery( this ).closest('.gform_page').find('.gform_page_footer .gform_next_button.button') );
			jQuery(this).closest('.gform_page').find('.gform_page_footer .gform_next_button.button').click();
		});
	}
  });
  
 // This is the initial GravityForms binding, it will be lost upon a page change with next/previous
// Thus we make a bind on gform_page_loaded event also
 if( jQuery('.custom-form').length > 0 ) {
	jQuery('.gfield_radio input[type=radio]').bind("click", function() {
		//console.log('Clicked: ' + jQuery( this ).closest('.gform_page').find('.gform_page_footer .gform_next_button.button') );
		jQuery(this).closest('.gform_page').find('.gform_page_footer .gform_next_button.button').click();
	});
}

jQuery(document).bind('gform_page_loaded', function(event, form_id, current_page){
      // code to be trigger when next/previous page is loaded
      if( jQuery('.custom-form').length > 0 ) {
		jQuery('.gfield_radio input[type=radio]').bind("click", function() {
			//console.log('Clicked: ' + jQuery( this ).closest('.gform_page').find('.gform_page_footer .gform_next_button.button') );
			jQuery(this).closest('.gform_page').find('.gform_page_footer .gform_next_button.button').click();
		});
	}
  }); 
  
// This is the initial GravityForms binding, it will be lost upon a page change with next/previous
// Thus we make a bind on gform_page_loaded event also
 if( jQuery('.custom-form').length > 0 ) {
	jQuery('.gfield_radio input[type=radio]').bind("click", function() {
		//console.log('Clicked: ' + jQuery( this ).closest('.gform_page').find('.gform_page_footer .gform_next_button.button') );
		jQuery(this).closest('.gform_page').find('.gform_page_footer .gform_next_button.button').click();
	});
}

onStepChanging: function(event, currentIndex, newIndex) {
            if (currentIndex === 0) {
                form.parent().parent().parent().append('<div class="footer footer-' + currentIndex + '"></div>');
            }
            if (currentIndex === 1) {
                form.parent().parent().parent().find('.footer').removeClass('footer-0').addClass('footer-' + currentIndex + '');
            }
            if (currentIndex === 2) {
                form.parent().parent().parent().find('.footer').removeClass('footer-1').addClass('footer-' + currentIndex + '');
            }
            if (currentIndex === 3) {
                form.parent().parent().parent().find('.footer').removeClass('footer-2').addClass('footer-' + currentIndex + '');
            }
            // if(currentIndex === 4) {
            //     form.parent().parent().parent().append('<div class="footer" style="height:752px;"></div>');
            // }
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
</script>
<?php

}
else {
	
	echo '
	
	<script>
	window.location.href = "login.php";
	</script>
	
	
	';
}

?>
