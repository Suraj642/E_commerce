<?php

include 'layout/linke.php';
include 'layout/header.php';
if(!isset($_SESSION['email'])){
    echo "<script>
       window.location.href='login.php';
       </script>";
}
 $user_s_id=$_SESSION['id'];
 $add="SELECT * FROM cart_item inner join product on cart_item.product_id=product.id WHERE user_id='$user_s_id'";

$result_a=mysqli_query($con,$add);

?>

<style>
i {
	margin-right: 10px;
}

/*------------------------*/
input:focus,
button:focus,
.form-control:focus{
	outline: none;
	box-shadow: none;
}
.form-control:disabled, .form-control[readonly]{
	background-color: #fff;
}
.table tr,
.table tr td{
	vertical-align: middle;
}
.button-container{
	display: flex;
	align-items: center;
}
.button-container .form-control{
	max-width: 80px;
	text-align: center;
	display: inline-block;
	margin: 0px 5px;
}
#myTable .form-control{
	width: auto;
	display: inline-block;
}
.cart-qty-plus,
.cart-qty-minus{
	width: 38px;
	height: 38px;
	background-color: #fff;
	border: 1px solid #ced4da;
    border-radius: .25rem;
}
.cart-qty-plus:hover,
.cart-qty-minus:hover{
	background-color: #5161ce;
	color: #fff;
}
.img-prdct{
	width: 50px;
	height: 50px;
/* 	background-color: #5161ce; */
	border-radius: 4px;
}
.img-prdct img{
  width: 100%;
}</style>

<div class="container-fluid mt-5">
        <h2 class="mb-5 text-center">Shopping Cart</h2>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="table-responsive">
                    <table id="myTable" class="table">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Name</th>
                                <th>Qty</th>
                                <th>Price</th>
                                <th class="text-right"><span id="amount" class="amount">Amount</span> </th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while($show_a=mysqli_fetch_assoc($result_a)){
                            
                            
                                
                            ?>
                            <tr>
                                <td>
                                    <div class="product-img">
                                        <div class="img-prdct"><img src="../admin/product/product_image/<?php echo $show_a['image'];?>"></div>
                                    </div>
                                </td>
                                <td>
                                    <p><?php echo $show_a['name'];?></p>
                                </td>
                                <td>
                                    <div class="button-container">
                                       
                                            
                                        <button class="cart-qty-plus" type="button" value="+">+</button>
                                        <input type="text" name="qty" min="0" class="qty form-control" value="<?php echo $show_a['qunitity'];?>"/>
                                        <button class="cart-qty-minus" type="button" value="-">-</button>

                                        
                                    </div>
                                </td>
                                <td>
                                    <input type="text" value="<?php echo $show_a['price']?>" class="price form-control" disabled>
                                </td>
                                <td align="right">$ <span id="amount" class="amount">0</span></td>
                                <td> <a href="remove.php?user_id=<?php echo $show_a['user_id']?>&&p_id=<?php echo $show_a['product_id']?>">Remove</a></td>
                            </tr>
                            <?php } ?> 
                                
                               
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="4"></td><td align="right"><strong>TOTAL = $  <span id="total" class="total">0</span></strong></td>
                                <td><a href="order.php">ChackOut</a></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
    <!-- -----------------for-Shopping-cart------------- -->
    <script>
$(document).ready(function(){
  	update_amounts();
  	$('.qty, .price').on('keyup keypress blur change', function(e) {
	  	update_amounts();
  	});
});
function update_amounts(){
	var sum = 0.0;
	  	$('#myTable > tbody  > tr').each(function() {
			var qty = $(this).find('.qty').val();
		  	var price = $(this).find('.price').val();
		  	var amount = (qty*price)
		  	sum+=amount;
		  	$(this).find('.amount').text(''+amount);
	  	});
	$('.total').text(sum);
}



//----------------for quantity-increment-or-decrement-------
var incrementQty;
var decrementQty;
var plusBtn  = $(".cart-qty-plus");
var minusBtn = $(".cart-qty-minus");
var incrementQty = plusBtn.click(function() {
	var $n = $(this)
		.parent(".button-container")
		.find(".qty");
	$n.val(Number($n.val())+1 );
	update_amounts();
});

var decrementQty = minusBtn.click(function() {
		var $n = $(this)
		.parent(".button-container")
		.find(".qty");
	var QtyVal = Number($n.val());
	if (QtyVal > 0) {
		$n.val(QtyVal-1);
	}
	update_amounts();
});</script>