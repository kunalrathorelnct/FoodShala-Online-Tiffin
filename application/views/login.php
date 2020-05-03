<?php include('loginheader.php'); ?>



  
<div style="color:red;" class="text-center"><?php echo $this->session->flashdata('msg');?></div>


<form style="margin-bottom: 12em;" action="<?php echo site_url('login/auth');?>"  method="post">

  <div class="container">
          <h2 class="text-center">Login</h2>
          <div class="form-group">
              <div class="col-md-6 col-md-offset-3">
              <label for="email"><b>Email</b></label>
              <input type="email" placeholder="Enter Email" name="email" required>

              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="password" required>

              <button type="submit">Login</button>
              <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
              </label>
            </div>
      </div>
</div>
  <div class="container" >
        <div class="form-group" >
            <div class="col-md-6 col-md-offset-3">
              
               <div class="#"><?= anchor('welcome/customers_signup', "Singup", array('class'=>'btn-lg btn-success'));?><span class="psw" style="padding-top: 0px;">Forgot <a href="#">password?</a></span></div>
            </div>
      </div>
</div>
</form>



<?php include('footer.php');?>
