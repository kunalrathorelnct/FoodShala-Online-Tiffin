<?php
if($this->session->userdata('user_role')):
     redirect('/', 'refresh');
?>
<?php else:?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>FoodShala</title>
<meta name="description" content="Foodshala is a website for odering food online ">
<meta name="author" content="Kunal Rathore">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="<?php echo base_url('assets/img/icon.png');?>" type="image/x-icon">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="<?php echo base_url('assets/css/bootstrap.css');?>">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="<?php echo base_url('assets/css/style.css');?>">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Modak" rel="stylesheet">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
   z-index:5;
}
.form1 {border: 3px solid #f1f1f1;}

input[type=text],input[type=email], input[type=password] {
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


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
        <li><?=  anchor('/',"home",array('class' =>'page-scroll') );?></li>
        <li><?=  anchor('welcome/loginlink',"Login",array('class' =>'page-scroll') );?></li>
        <li><?=  anchor('welcome/customers_signup',"Customers Signup",array('class' =>'page-scroll') );?></li>
        <li><?=  anchor('welcome/restaurants_signup',"Restaurants Signup",array('class' =>'page-scroll') );?></li>
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
          <div class="intro-text" style="padding-top: 100px; padding-bottom: 10px; ">
            <h1 style="font-size: 7em; font-family: 'Modak'">FoodShala</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<?php endif;?>
