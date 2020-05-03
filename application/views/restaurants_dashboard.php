<?php include('restaurants_header.php')?>
<style>
body{
  margin-top:-100px;
}
.text-light{
  color:white;
}
.float-right{
  float:right;
  margin-right:10px;
}
.border{
  padding:10px;
  border:1px solid green;
}
.name{
  font-weight: 400;
  font-size: 20px;
color: #444;
margin-bottom: 10px;
}
.price{
    font-weight: 200;
    color: #555;
    margin-top: 10px;
}
</style>
<div style="color:green; font-size:30px; text-align: center;"><?php echo $this->session->flashdata('msg');?></div>

<!-- Features Section -->
<div id="features" class="restaurant-menu" class="text-center">

  <div class="container">
  <div class="section-title text-center">
      <h2>Recently Got Order</h2>
    </div>
    <div class="row">
      <div  class="col-xs-12 col-sm-6">
        <div class="menu-section">
          <h2 class="menu-section-title">Veg Order</h2>
          <?php
            foreach($data1 as $row)
            {
             if($row->dish_food_type == "veg")
            {
            echo "<div class='menu-item border'>";
            echo "<div class='btn btn-success float-right'><a class='text-light' href='#'>Accept</a></div>";
            echo "<div class='name'> ".$row->dish_name."</div><br>";
            echo "<div class='price'>RS.".$row->dish_price."</div>";
            echo "<div class='menu-item-description'> <b>Quantity:</b> ".$row->quantity."</div>";
            echo "<div class='menu-item-description'> <b>Address:</b>  XXXXXXX </div>";
            echo "</div><br><br>";
            }
           }

             ?>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="menu-section">
          <h2 class="menu-section-title">Non Veg Order</h2>
          <?php
            foreach($data1 as $row)
            {
             if($row->dish_food_type == "non_veg")
            {
            echo "<div class='menu-item border'>";
            echo "<div class='btn btn-success float-right'><a class='text-light' href='#'>Accept</a></div>";
            echo "<div class='name'> ".$row->dish_name."</div><br>";
            echo "<div class='price'>RS.".$row->dish_price."</div>";
            echo "<div class='menu-item-description'> <b>Quantity:</b> ".$row->quantity."</div>";
            echo "<div class='menu-item-description'> <b>Address:</b>  XXXXXXX </div>";
            echo "</div><br><br>";
            }
           }
             ?>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Restaurant Menu Section -->
<div id="restaurant-menu">
  <div class="container text-center">
    <div class="section-title text-center">
      <h2>Your Restaurant Menu</h2>
      <div class="btn btn-primary" style="color:white; width:200px; height:50px; font-size:20px;"><?=  anchor('restaurant/add_new_iteam',"Add Iteam",array('class' =>'text-light') );?></div>
    </div>

    <div class="row">
      <div class="col-xs-12 col-sm-6">
        <div class="menu-section">
          <h2 class="menu-section-title">Veg.</h2>
          <?php
            foreach($data as $row)
            {
             if($row->dish_food_type == "veg")
            {
            echo "<div class='menu-item'>";
            echo "<div class='menu-item-img'><img src='https://media.gettyimages.com/photos/paneer-makhani-or-shahi-paneer-indian-food-picture-id670906895?k=6&m=670906895&s=612x612&w=0&h=cMfLf7l5hfzW2aR1vLH-98z9wsmlnJRgu3hjlYrG8Wk='></div>";
            echo "<div class='menu-item-name'> ".$row->dish_name."</div><br>";
            echo "<div class='menu-item-price'>RS.".$row->dish_price."</div>";
            echo "<div class='menu-item-description'>".$row->dish_description."</div>";
            echo "</div>";
            }
           }
             ?>


        </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="menu-section">
          <h2 class="menu-section-title">Non Veg</h2>
          <?php
            foreach($data as $row)
            {
            if($row->dish_food_type == "non_veg")
            {
            echo "<div class='menu-item'>";
            echo "<div class='menu-item-img'><img src='https://media.gettyimages.com/photos/paneer-makhani-or-shahi-paneer-indian-food-picture-id670906895?k=6&m=670906895&s=612x612&w=0&h=cMfLf7l5hfzW2aR1vLH-98z9wsmlnJRgu3hjlYrG8Wk='></div>";
            echo "<div class='menu-item-name'> ".$row->dish_name."</div><br>";
            echo "<div class='menu-item-price'>RS.".$row->dish_price."</div>";
            echo "<div class='menu-item-description'>".$row->dish_description."</div>";
            echo "</div>";
            }
            }
             ?>
        </div>
      </div>
    </div>
    
  </div>
</div>


<?php include('footer.php'); ?>
