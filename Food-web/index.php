<!DOCTYPE html>
<html lang="en">
    <?php
  session_start();
  ?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">  
<title>Home Page</title>
<style>
#demo3
{
height:550px;
width:auto;
background:url(https://lovelytab.com/wp-content/uploads/2018/12/Mexican-Food-Wallpapers.jpg);
background-size:100% 100%;
background-repeat: no-repeat;
animation:anim2 15s infinite;
margin-top:0.5%;
margin-left:1.5%;
margin-right:1.5%;
margin-bottom:1%;}
@-webkit-keyframes anim2
{ from { background:url(https://lovelytab.com/wp-content/uploads/2018/12/Mexican-Food-Wallpapers.jpg);
background-size:100% 100%;
background-repeat: no-repeat; }
20% { background:url(https://th.bing.com/th/id/R9446bad0ca0f133ee435665005cfdadf?rik=Vlm6B7tOD7yZEg&riu=http%3a%2f%2fwallpapersdsc.net%2fwp-content%2fuploads%2f2016%2f09%2fJunk-Food-Pictures.jpg&ehk=N0OhWBolCA9pmRKEGp5f4cR%2fVfFEZfqoP%2bAcEFPkPXo%3d&risl=&pid=ImgRaw);
background-size:100% 100%; 
background-repeat: no-repeat;}
50% { background:url(https://wallpapercave.com/wp/wp1929477.jpg);
background-size:100% 100%;
background-repeat: no-repeat; }
80% { background:url(https://wallpaperforu.com/wp-content/uploads/2020/08/food-wallpaper-20080219232012.jpg);
background-size:100% 100%;
background-repeat: no-repeat; }
to { background:url(https://th.bing.com/th/id/OIP.7RDkRKj7ktTyqOtnvyCwQgHaIz?pid=ImgDet&rs=1;);
background-size:100% 100%;
background-repeat: no-repeat; }
}
.font{
  width:100%;
  position: relative;
  top:50%;
}
.font h1{
  text-align:center;
  color:#00008B;
  font-size: 76px;
  font-family:times new roman;
}
category{
  margin-left:1%;
  margin-right:1%;
}
.box1{
  border:1px solid black;
  width: 28%;
  height:350px;
  float:left;
  margin:2%;
  border-radius: 10px;
}
.responsive{
  width:100%;
  height:100%;
  border-radius:10px;
}
.float-container{
  position: relative;
}
.float-text{
  position: absolute;
  bottom: 40px;
  left: 30%;
  right:17%;
  color:#C70039 ;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">  </script>
</head>
<body>
<?php
include('global/header.php')
?>
<div id="demo3">
<div class="font">
<h1>Foodie</h1>
</div>
</div>
<section class="category" style="margin-top:5%;">
<div class="container">
<h2 style="color:red;text-align:center;font-family:airial">Food Category</h2>
<div class="box1 float-container">
<img src="https://www.vegrecipesofindia.com/wp-content/uploads/2020/01/paneer-butter-masala-1.jpg" alt="Main Food" class="responsive">
<h3 class="float-text">Main-Food</h3>
</div>

<div class="box1 float-container">
<img src="https://st2.depositphotos.com/5653638/11415/i/600/depositphotos_114151956-stock-photo-paneer-tikka-kabab-tandoori-indian.jpg" alt="Starter" class="responsive">
<h3 class="float-text">Starter-Food</h3>
</div>
<div class="box1 float-container">
<img src="https://wallpaperaccess.com/full/2592297.jpg" alt="Cold-Drink" class="responsive">
<h3 class="float-text">Cold-Drink</h3>
</div>
<div class="box1 float-container">
<img src="https://th.bing.com/th/id/OIP.QAQP5w-B5Yk2bJNdS7yZ8wHaFj?pid=ImgDet&rs=1" alt="Dessert" class="responsive">
<h3 class="float-text">Dessert</h3>
</div>
<div class="clearfix"></div>
</div>
</section>                
<?php include('global/footer.php');
?>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script> 
</body>
</html>