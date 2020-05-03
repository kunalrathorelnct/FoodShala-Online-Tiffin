<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>FoodShala</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->

<link rel="shortcut icon" href="<?php echo base_url('assets/img/icon.png');?>" type="image/x-icon">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="<?php echo base_url('assets/css/bootstrap.css');?>">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="<?php echo base_url('assets/css/style.css');?>">
<link href="https://fonts.googleapis.com/css?family=Modak:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Rochester" rel="stylesheet">


</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <div  class="navbar-brand">
        <a class="navbar-brand page-scroll" href="#">
            <img src="<?php echo base_url('assets/img/icon.png');?>" width="50" height="50" style="margin-top:-28px;" alt="">
        </a>
        <?=  anchor('authcontroller',"FoodShala",array('class' =>'page-scroll') );?>

      </div>
      <ul class="nav navbar-nav">
       
        <?php if($this->session->userdata('user_role')):?>
          <li><?=  anchor('login/logout',"logout",array('class' =>'page-scroll') );?></li>
          <li><?=  anchor('authcontroller',"Dashboard",array('class' =>'page-scroll') );?></li>
        <?php else: ?>
          <li><?=  anchor('welcome/loginlink',"login",array('class' =>'page-scroll') );?></li>
        <?php endif;?>
      </ul>
    </div>
    <!-- /.navbar-collapse -->

  </div>
</nav>
<!-- Header -->


<header id="header">
  <div class="intro">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="intro-text">
            <h1 style="font-family: 'Modak'; font-size: 7vh;">FoodShala</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
   z-index:5;
   margin-top: -100px;
}
.form1 {border: 3px solid #f1f1f1;}

input[type=text],input[type=email],input[type=number], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}







.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
<div class="container text-center">

<h2>Add New Iteam In Menu</h2>
<div style="color:red; font-size:20px;"><?php echo $this->session->flashdata('msg');?></div>

<form style=" margin-bottom: 115px; margin-top: 40px;" class="form1" action="<?php echo site_url('restaurant/add_food');?>" method="post">

  <div class="container">
    <div class="row form-group">
    <div class="col-md-6">
    <label for="user_name"><b>Food/Dish Name</b></label>
    <input type="text" placeholder="Enter Food/Dish Name"  name="dish_name" required>
    </div>
    <div class="col-md-6">
    <label for="restaurant_name"><b>Food/Dish Price</b></label>
    <input type="number" placeholder="Enter Food Price"  name="dish_price" required>
   </div>
    </div>
    <div class="row form-group">
    <div class="col-md-6">
    <label for="user_name"><b>Food Dish Description</b></label>
    <input type="text" placeholder="About Food"  name="dish_description" required>
    </div>
    <div class="col-md-6">
    <label for="restaurant_name"><b>Food Dish Type</b></label><br><br>
    <div class="form-group">
      <input type="radio"  value="veg" name="dish_food_type" checked >Veg
      <input type="radio"  value="non_veg" name="dish_food_type" >Non Veg
    </div>
   </div>
   <div class="col-md-6">
    <label for="user_name"><b>Food Dish Label</b></label>
    <input type="text" placeholder="Food Image URL"  name="Image_URL">
    </div>
    </div>


    <label>
    <button type="submit">Add Iteam</button>

  </div>


</form>
</div>

<?php include('footer.php'); ?>
