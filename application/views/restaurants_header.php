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
        <?=  anchor('/',"FoodShala",array('class' =>'page-scroll') );?>

      </div>
      <ul class="nav navbar-nav">
        <li><a href="#features" class="page-scroll">Order</a></li>
        <li><a href="#restaurant-menu" class="page-scroll">Menu</a></li>
        <li><?=  anchor('restaurant/add_new_iteam',"Add Iteam",array('class' =>'page-scroll') );?></li>
        <?php if($this->session->userdata('user_role')):?>
          <li><?=  anchor('login/logout',"logout",array('class' =>'page-scroll') );?></li>
          
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
            <h1 style="font-family: 'Modak'; font-size: 10vw;">FoodShala</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>