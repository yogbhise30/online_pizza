<?php

$url = 'pizzas.json'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data); // decode the JSON feed
?>


<!DOCTYPE html>
<html>
<head>
<title>Online Pizza</title>
<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
<link type="text/css" rel="stylesheet" href="css/style.css"/>
<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
  <nav>
   <div class="header">
    <div class="container">
     <div class="row">
      <div class="col m12">
   		 <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="index.php">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
     </div>
     </div>
     </div>
    </div>
   </div>
  </nav>
  
  <div class="container">
    <div class="row">
     <div class="col m8">
       <div class="pizza-list ordersummary">
         <ul>
         <?php foreach ($characters as $character) : if($character->id == $_GET['id']){?>
           <li>
             <img src="<?php echo $characters[($_GET['id'] - 1)]->image; ?>" class="responsive-img">
             <h5><?php echo $characters[($_GET['id'] - 1)]->title; ?></h5>
             <p><?php echo $characters[($_GET['id'] - 1)]->ingredient; ?></p>
             <span>&#2352; <?php echo $characters[($_GET['id'] - 1)]->price; ?></span>
           </li>
           <?php } endforeach;?>
         </ul>
       </div>
     </div>
     <div class="col m4">
      <div class="order-summary">
       <strong>Order Summary</strong>
       <ul>
         <li>Price <span>&#2352; <?php echo $characters[($_GET['id'] - 1)]->price; ?></span></li>
         <li class="total">Total <span>&#2352; <?php echo $characters[($_GET['id'] - 1)]->price; ?></span></li>
       </ul>
       <a class="btn waves-effect waves-light red lighten-2 modal-trigger"  href="#popup1">Confirm Order</a> <!--href="#modal1"-->
       </div>
     </div>
    </div>
  </div>
 
  <div class="footer">
    <div class="container">
      <div class="col m12">
        <h6>Online Pizza &copy; 2018</h6>
      </div>
    </div>
  </div>
  
  <div id="popup1" class="overlay">
	<div class="popup">
		<h6>Congrats!!!</h6>
		<a class="close" href="#">x</a>
		<div class="content">
			Your order will be delivered in 40 minutes.
		</div>
	</div>
	</div>
  
 
<script type="text/javascript" src="js/materialize.min.js"></script>
<!--<script>
$(document).ready(function(){
    $('.modal').modal();
  });
</script>-->
</body>
</html>