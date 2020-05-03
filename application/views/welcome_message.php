<?php include('header.php')?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Features Section -->
<style>
.text-light{
  color:white;
}
.menu-item-price{
  margin-left:-200px;
}
</style>
<div class="container text-center">
  <br/>
    <h2 id="restaurant-menu" class="text-center">MENU</h2>
    <hr/>
    <div class="row">
        <div class="col-md-8">
            <h4>Food</h4>
            <div class="row">
            <?php foreach ($data as $row) : ?>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <div class="caption">
                          <img width="200" src="https://media.gettyimages.com/photos/paneer-makhani-or-shahi-paneer-indian-food-picture-id670906895?k=6&m=670906895&s=612x612&w=0&h=cMfLf7l5hfzW2aR1vLH-98z9wsmlnJRgu3hjlYrG8Wk=">

                            <h4><?php echo $row->dish_name;?></h4>
                            <div class="row">
                                <div class="col-md-7">
                                    <h4><?php echo number_format($row->dish_price);?></h4>
                                    <div style="width: 200px;">
                                      <?php if($row->dish_food_type == "non_veg"){?>
                                        <p style="width:10px; height:10px; background-color:red; margin: 0 0 0px; display: inline-block;"></p>
                                        <p style="width:60px; display: inline-block;">Non-Veg</p>
                                        <p style="float: right; display: inline-block;"><?php echo $row->restaurant_name;?></p>
                                      <?php }else{?>
                                        <p style="width:10px; height:10px; background-color:green; margin: 0 0 0px; display: inline-block;"></p>
                                        <p style="width:60px; display: inline-block;">Veg</p>
                                        <p style="float: right; display: inline-block;"><?php echo $row->restaurant_name;?></p>
                                      <?php }?>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <input type="number" name="quantity" id="<?php echo $row->id;?>" value="1" class="quantity form-control">
                                </div>
                            </div>
                            <?php if($this->session->userdata('user_role') == '2'):?>
                            <button class="add_cart btn btn-success btn-block" data-productid="<?php echo $row->id;?>" data-productname="<?php echo $row->dish_name;?>" data-productprice="<?php echo $row->dish_price;?>">ORDER</button>
                          <?php else: ?>
                            <?=  anchor('welcome/loginlink',"ORDER",array('class' =>'add_cart btn btn-success btn-block') );?>
                          <?php endif;?>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>

            </div>

        </div>
        <div id="cart" class="col-md-4">
            <h4>Your Order List</h4>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Items</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Total</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="detail_cart">

                </tbody>

            </table>
        </div>
    </div>
</div>



<!-- About Section -->

<!-- Contact Section -->

<?php include('footer.php'); ?>
