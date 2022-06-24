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
        <title>Crowdfunding</title>  
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
            <form method="GET" id="signup-form" class="signup-form" action="payment.php">
                <div>
				
				<h3>Welcome</h3>
                    <fieldset>
                        <h2>Welcome</h2>
                        <p class="desc">Support us with these rewards. Early birds gets the discount.</p>
 <?php



//checking session data and matching it with the type of id that it can be used later for selecting the right price

include 'db.php';
$sql = "SELECT id FROM control WHERE pass='".$sessionpass."' ";

$result = $con->query($sql);

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {

	$thesessionid=$row["id"];

}
  }
 else {

}
$con->close();


//checking session data ends here



//db progress bar data fetching 
//db progressbar    
   include 'db.php';
$sql = "SELECT value, id, date FROM Settings WHERE Name='"."progressbar"."' ";

$result = $con->query($sql);

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {

	$progressbar=$row["value"];
	
	
	$progressbar1= explode(",",$progressbar);
    $pbraised=$progressbar1[0];
    $pbgoal=$progressbar1[1];
  
}
  }
 else {

}
$con->close();
//continued code


?>



    <script type="text/javascript" src="pb/goalProgress.js"></script>

  
  
  <script type="text/javascript">
  
  $(document).ready(function () {
      $('#progress').goalProgress({
        goalAmount: <?php echo $pbgoal; ?>,
        currentAmount: <?php echo $pbraised; ?>,
        textBefore: '$',
   <?php echo     "textAfter: ' raised.'"; ?>
      });
    });
  </script>
  </head>
    </body>  


 <div id="progress"></div>



<p class="your-money">           

  Our Goal to reach is:
  <span class="money">$<?php echo $pbgoal; ?></span>
                                    </p>
                    
					<br>  
   
   
   <?php
   
   //access and authencity from database
include 'db.php';
$sql = "SELECT id, memo, pass FROM control WHERE pass='".$sessionpass."' ";

$result = $con->query($sql);

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {

	$newmemo=$row["memo"];

}
  }
 else {

}
$con->close();
//continued code

echo "<p class='your-money'>".$newmemo."</p>";

   ?>

					
					</fieldset>
				
				
                    <h3>Content</h3>
                    <fieldset>
                        <h2>Content</h2>
                        <br>
						<?php
   
   //access and authencity from database
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

echo "<center><p class='desc'>".$newcontent."</p</center>";



   ?>

						
                    </fieldset>
					
					
					
					
					
					

                    <h3>Choose a Package</h3>
                    <fieldset>
                        <h2>Choose a Package</h2>
                        <p class="desc">Please choose the package the suites your needs.</p>
                      
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
  box-sizing: border-box;
}

.columns {
  float: left;
  width: 33.3%;
  padding: 8px;
}

.price {
  list-style-type: none;
  border: 1px solid #eee;
  margin: 0;
  padding: 0;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}

.price:hover {
  box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
}

.price .header {
  background-color: #111;
  color: white;
  font-size: 25px;
}

.price li {
  border-bottom: 1px solid #eee;
  padding: 20px;
  text-align: center;
}

.price .grey {
  background-color: #eee;
  font-size: 20px;
}

.button {
  background-color: #04AA6D;
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  font-size: 18px;
}

@media only screen and (max-width: 600px) {
  .columns {
    width: 100%;
  }
}
</style>
</head>
<body>


					  
					<?php



//first line of the packages

   //access and authencity from database
      
   
   
   echo '
<div class="container3" style="width:99%; height:80%;">
<div class="container3 style="width:45%; height:100%;">
';

include 'db.php';
$sql = "SELECT serial, packname, packcontent, packprice, packprice2, packprice3, color FROM packages";

$result = $con->query($sql);

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {



    $newid=$row["serial"];
    $newpackname=$row["packname"];
    $newpackcontent=$row["packcontent"];
    $newpackcolor=$row["color"];

	if($thesessionid=="fandf" or $thesessionid=="admin"){
	$newpackprice=$row["packprice"];
	}

	if($thesessionid=="investor"){
	$newpackprice=$row["packprice2"];
	}

if($thesessionid=="vc"){
	$newpackprice=$row["packprice3"];
	}

//placing upto 3 in one row and other in 2nd row

if($newid>0){ 

//ends
	

echo'
<div class="columns">
  <ul class="price">
    <li class="header" style="background-color:'.$newpackcolor.'">'.$newpackname.'</li>
    <li class="grey">$ '.$newpackprice.'</li>
    <li>'.$newpackcontent.'</li>

   
   
   
';
	
if($newid==1){
echo ' <input type="radio" name="choose_package" id="'.$newpackname.'" value="'.$newpackname.'-'.$newpackprice.'-'.$newpackcontent.'" onclick="displayRadioValue()" checked/></div>
<script>
displayRadioValue();
</script>
 ';
}else{
echo ' <input type="radio" name="choose_package" id="'.$newpackname.'" value="'.$newpackname.'-'.$newpackprice.'-'.$newpackcontent.'" onclick="displayRadioValue()"/></div>
';

}	
	
	
	
//radio content fetching code
echo '
  <script async>
        function displayRadioValue() {
            var ele = document.getElementsByName';
			
echo  "('choose_package');";
              
echo '            for(i = 0; i < ele.length; i++) {
                if(ele[i].checked){
             				
				document.getElementById("product").innerHTML
                        =ele[i].value.split("-")[0];
				document.getElementById("price").innerHTML
                        ="$ "+ele[i].value.split("-")[1];
				document.getElementById("totalprice").innerHTML
                        ="$ "+ele[i].value.split("-")[1];
			    document.getElementById("content").innerHTML
                        =ele[i].value.split("-")[2];
				document.getElementById("package").value
                        =ele[i].value.split("-")[0];
				document.getElementById("value").value
                        =ele[i].value.split("-")[1];
		        document.getElementById("content2").value
                        =ele[i].value.split("-")[2]; 
			let element = document.querySelectorAll("a[href='."'#finish']".'");

              element.innerHTML = '."`".'<input type="submit" value="Checkout">'."`;".'
 
				
			
				
				
				}
						
							
            }
        }
  </script>
';






}else{
	
	
	
	
}	



}
  }
 else {

}
$con->close();

echo '</div>

';

//end of first line of packages



   ?>


 






							
						
                    </fieldset>

                    <h3>Checkout</h3>
                    <fieldset>
                        <h2>Checkout</h2>
                        <p class="desc">Please review your check out and click on finish for payment</p>
                        <!-- Contenedor -->
<!--checkout -->
<!DOCTYPE html>
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


<div class="row">
  <div class="col-25">
    <div class="container4">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>1</b></span></h4>
      <p><a id="product"></a><span id="price" class="price"></span></p>
      <p><a id="content"></a> <span class="price"></span></p>
      <hr>
      <p>Total <b><span id="totalprice" class="price" style="color:black"></span></b></p>
    </div>
  </div>
</div>
<input type="hidden" id="package" name="package" value="">
<input type="hidden" id="content2" name="content2" value="">
<input type="hidden" id="value" name="value" value="">
</body>
</html>
<!--checkout -->


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
document.title = "Crowd funding";
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
