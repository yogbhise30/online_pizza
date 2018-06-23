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
<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
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
     <div class="col m3">
       <div class="offer">
        <img src="images/offer.jpg" class="responsive-img">
        <img src="images/offer2.jpg" class="responsive-img">
       </div>
       <div class="category">
         <ul>
          <strong>Category</strong>
          <li><span>Veg</span> <i class="material-icons">chevron_right</i></li>
          <li><span>Non-Veg</span> <i class="material-icons">chevron_right</i></li>
         </ul>
       </div>
     </div>
     <div class="col m9">
       <div class="pizza-list">
         <ul>
           <?php foreach ($characters as $character) :?>
            <li onClick="window.location.href='order.php?id=<?=$character->id?>'">
             <img src="<?php echo $character->image; ?>" class="responsive-img">
             <h5><?php echo $character->title; ?></h5>
             <p><?php echo $character->ingredient; ?></p>
             <span>&#2352; <?php echo $character->price; ?></span>
            </li>
           <?php endforeach; ?>
           
           <!--<li>
             <img src="images/pizza2.jpg" class="responsive-img">
             <h5>Chimichurri Chorizo Pizza</h5>
             <p>Chorizo sausages, cream cheese, pizza sauce, Chimichurri sauce, mushrooms, black olives, fresh coriander</p>
             <span>&#8377; 59</span>
           </li>
           <li>
             <img src="images/pizza3.jpg" class="responsive-img">
             <h5>Fire Breather Pizza-Dominos Copycat</h5>
             <p>Mozzarella cheese, pork & fennel sausage, ground beef, pepperoni, jalapeno peppers, fresh tomatoes, red onion, chilli flakes</p>
             <span>&#8377; 79</span>
           </li>
           
           <li>
             <img src="images/pizza4.jpg" class="responsive-img">
             <h5>Egg and Bacon Pizza</h5>
             <p>Barbecue sauce, garlic, onion, leg ham, bacon, red capsicum, mushrooms, eggs,
                mozzarella</p>
             <span>&#8377; 99</span>
           </li>
           
           
           <li>
             <img src="images/pizza5.png" class="responsive-img">
             <h5>Peri Peri Chicken Pizza</h5>
             <p>Sliced chicken breast, pizza sauce, Mozzarella cheese, cherry tomatoes, baby spinach leaves, red onion, peri peri sauce</p>
             <span>&#8377; 89</span>
           </li>
           <li>
             <img src="images/pizza6.jpg" class="responsive-img">
             <h5>Pizza Hut's Original Pan Pizza</h5>
             <p>Pepperoni or ham or chopped vegetables or cooked diced sausage-meat or beef, mozzarella cheese, combination of toppings of your choice, pizza sauce</p>
             <span>&#8377; 59</span>
           </li>
           
           <li>
             <img src="images/pizza1.jpg" class="responsive-img">
             <h5>Bulgogi and Kimchi Pizza</h5>
             <p>Pizza sauce, mozzarella cheese, spinach, kimchi, bulgogi</p>
             <span>&#8377; 49</span>
           </li>
           <li>
             <img src="images/pizza2.jpg" class="responsive-img">
             <h5>Chimichurri Chorizo Pizza</h5>
             <p>Chorizo sausages, cream cheese, pizza sauce, Chimichurri sauce, mushrooms, black olives, fresh coriander</p>
             <span>&#8377; 59</span>
           </li>
           <li>
             <img src="images/pizza3.jpg" class="responsive-img">
             <h5>Fire Breather Pizza-Dominos Copycat</h5>
             <p>Mozzarella cheese, pork & fennel sausage, ground beef, pepperoni, jalapeno peppers, fresh tomatoes, red onion, chilli flakes</p>
             <span>&#8377; 79</span>
           </li>
           
           <li>
             <img src="images/pizza4.jpg" class="responsive-img">
             <h5>Egg and Bacon Pizza</h5>
             <p>Barbecue sauce, garlic, onion, leg ham, bacon, red capsicum, mushrooms, eggs,
                mozzarella</p>
             <span>&#8377; 99</span>
           </li>
           <li>
             <img src="images/pizza5.png" class="responsive-img">
             <h5>Peri Peri Chicken Pizza</h5>
             <p>Sliced chicken breast, pizza sauce, Mozzarella cheese, cherry tomatoes, baby spinach leaves, red onion, peri peri sauce</p>
             <span>&#8377; 89</span>
           </li>
           <li>
             <img src="images/pizza6.jpg" class="responsive-img">
             <h5>Pizza Hut's Original Pan Pizza</h5>
             <p>Pepperoni or ham or chopped vegetables or cooked diced sausage-meat or beef, mozzarella cheese, combination of toppings of your choice, pizza sauce</p>
             <span>&#8377; 59</span>
           </li>-->
           
         </ul>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script>
$(function() {  
 // $('#clickme').click(function() {
       $.ajax({
       url: 'order.json',
       dataType: 'json',
       success: function(data) {
          var items = [];

          $.each(data, function(key, val) {

            items.push('<li id="' + key + '">' + val + '</li>');    

          });

          $('<ul/>', {
             'class': 'interest-list',
             html: items.join('')
          }).appendTo('body');

       },
      statusCode: {
         404: function() {
           alert('There was a problem with the server.  Try again soon!');
         }
       }
    });
 /// });
});
</script>
</body>
</html>