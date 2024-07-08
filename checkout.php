 
<!DOCTYPE html>
<html>
<head>
<title>Lotis Minimart</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Grocery Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /> 
<!-- //font-awesome icons -->

<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

</head>
<body>

<!-- header -->
	<div class="agileits_header">
		<div class="w3l_offers">
			<a href="#">Today's special Offers !</a>
		</div>   
		<div class="w3l_header_right1">
			<div class="product_list_header">  

			<form action="checkout?id=<?php echo $_GET['id']; ?>&user=<?php echo $_GET['user']; ?>" method="post" class="last">



                <fieldset> 

                    
                       

                   <?php
                                    include("connection.php");
                                    $sql = "select sum(quantity) as adf from temp_stock_out where status_x = 'RESERVE' ";
                                    $result = mysqli_query($conn, $sql);  
                                    while($row = mysqli_fetch_assoc($result)) 
                                    {
                                  	?>

					<span class="badge" ><?php echo ''.$row['adf'].'';  ?></span>

									<?php 
											}

									?>
                    <input type="submit" name="submit"  value="View your cart" class="button" style="border: none"/>
                </fieldset>
            </form>
		</div>
		</div>
		<div class="clearfix"> </div>
	</div>


<?php 
	include("headertop.php");
?>

<!-- //header -->
<!-- products-breadcrumb -->
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="index.html">Home</a><span>|</span></li>
				<li>Checkout</li>
			</ul>
		</div>
	</div>
<!-- //products-breadcrumb -->

<!-- banner -->
	<div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			
					<ul class="nav " style="display: flex; justify-content: center">
						      <?php
                                    include("connection.php");
                                    $sql = "select * from category";
                                    $result = mysqli_query($conn, $sql);  
                                    while($row = mysqli_fetch_assoc($result)) 
                                    {
                                  ?>

						<li><a href="view_product?id=<?php echo $row['id']; ?>" style="padding: 1rem 1rem; color: black"><?php echo $row['CATEGORYNAME']; ?></a></li>
					<?php } ?>
						 
					</ul>
				
	</div>
<!-- about -->
		<div class="privacy about">
			<h3>Chec<span>kout</span></h3>
			
	<?php
  include("connection.php");
  $sql = "select *,sum(quantity )as TOTALAM from temp_stock_out where idno= ".$_GET['id']." and status_x='RESERVE' ";
                                    $result = mysqli_query($conn, $sql);  
                                    while($row = mysqli_fetch_assoc($result)) 
                                    {
                                    	$rrt = $row['TOTALAM'];
                                    }
                                  ?> 
	      <div class="checkout-right">
					<h4>Your shopping cart contains: <span><?php echo $rrt; ?> ITEMS</span></h4>
				<table class="timetable_sub">
					<thead>
						<tr>
							<th>PD No.</th>	
							<th>Product</th>
							<th>Quantity</th>
							<th>Product Name</th> 
							<th>Price</th>
						 
						</tr>
					</thead>
					<tbody>

	<?php
  include("connection.php");
  $sql = "select *  from temp_stock_out where idno= ".$_GET['id']." and status_x='RESERVE' GROUP BY  product_name";
                                    $result = mysqli_query($conn, $sql);  
                                    while($row = mysqli_fetch_assoc($result)) 
                                    {
                                  ?> 

						<tr class="rem1">
						<td class="invert"><?php echo $row['id']; ?></td>
						<td width="300px" class="invert-image">
							<?php if(empty($row['image'])){
								?>

								<a href="#"><img width="100px" height="110px" title=" " alt=" " src="../uploads/logo.png"  class="img-responsive" /></a>
								<?php
							}else{	
								?>
								<a href="#"><img width="100px" height="110px" title=" " alt=" " src="../uploads/<?php echo $row['image']; ?>"  class="img-responsive" /></a>

								<?php
							} ?>

							


						</td>
						<td class="invert">
							 <div class="quantity"> 
								<div class="quantity-select"> 
									 
								 <?php echo $row['quantity']; ?></span></div>
									 
								</div>
							</div>
						</td>

						<td class="invert"><?php echo $row['product_name']; ?></td> 
						<td class="invert"><?php echo $row['total_amount']; ?></td>
					 
					</tr>

				<?php } ?>

				<?php 
				$sql = "select sum(total_amount) as totalam  from temp_stock_out where idno= ".$_GET['id']." and status_x='RESERVE'  ";
                                    $result = mysqli_query($conn, $sql);  
                                    if($row = mysqli_fetch_assoc($result)) 
                                    {?>
	<td colspan="4" class="invert"><b>TOTAL PAYMENT</b></td>

                                    	<td  class="invert"><?php echo $row['totalam']; ?></td>
                                    	<?php
                                    }


                                    $sql = "select  concat(fname,' ',mname,' ',lname) as fullname from users where id= ".$_GET['id']."    ";
                                    $result = mysqli_query($conn, $sql);  
                                    if($row = mysqli_fetch_assoc($result)) 
                                    {

                                    	$fname = $row['fullname'];

                                    }

				?>



				</tbody></table>
			</div>
			<div class="checkout-left">	
				<div class="col-md-4 checkout-left-basket">
					<h4>Please Scan this QR Code for the Payment</h4>
					<ul>
						 <img width="300px" height="350px" title=" " alt=" " src="paynow.png">
					</ul>
				</div>
				<div class="col-md-8 address_form_agile">
					  <h4>Add a new Details</h4>
				<form action="order_status?id=<?php echo $_GET['id']; ?>&user=<?php echo $_GET['user']; ?>" method="post" class="creditly-card-form agileinfo_form">
				 

									<section class="creditly-wrapper wthree, w3_agileits_wrapper">
										<div class="information-wrapper">
											<div class="first-row form-group">
												<div class="controls">
													<label class="control-label">Full name: </label>
													<input class="billing-address-name form-control" type="text" name="name"  value="<?php  echo $fname; ?>" readonly>
												</div>
												<div class="w3_agileits_card_number_grids">
													<div class="w3_agileits_card_number_grid_left">
														<div class="controls">
															<label class="control-label">Mobile number:</label>
														    <input class="form-control" type="text" placeholder="Mobile number">
														</div>
													</div>
													<div class="w3_agileits_card_number_grid_right">
														<div class="controls">
															<label class="control-label">Address: </label>
														 <input class="form-control" type="text" placeholder="Address">
														</div>
													</div>
													<div class="clear"> </div>
												</div>
												<div class="controls">
													<label class="control-label">GCASH REFERence number: </label>
												 <input class="form-control" type="number" required="">
												</div>

											</div>
											<button class="submit check_out">SAVE </button>
										</div>
									</section>
								</form>
									 
					</div>
			
				<div class="clearfix"> </div>
				
			</div>

		</div>
<!-- //about -->
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->
<?php 

	include("footer.php");

?>

<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
							 <!--quantity-->
									<script>
									$('.value-plus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
										divUpd.text(newVal);
									});

									$('.value-minus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
										if(newVal>=1) divUpd.text(newVal);
									});
									</script>
								<!--quantity-->
							<script>$(document).ready(function(c) {
								$('.close1').on('click', function(c){
									$('.rem1').fadeOut('slow', function(c){
										$('.rem1').remove();
									});
									});	  
								});
						   </script>
							<script>$(document).ready(function(c) {
								$('.close2').on('click', function(c){
									$('.rem2').fadeOut('slow', function(c){
										$('.rem2').remove();
									});
									});	  
								});
						   </script>
						  	<script>$(document).ready(function(c) {
								$('.close3').on('click', function(c){
									$('.rem3').fadeOut('slow', function(c){
										$('.rem3').remove();
									});
									});	  
								});
						   </script>

<!-- //js -->
<!-- script-for sticky-nav -->
	<script>
	$(document).ready(function() {
		 var navoffeset=$(".agileits_header").offset().top;
		 $(window).scroll(function(){
			var scrollpos=$(window).scrollTop(); 
			if(scrollpos >=navoffeset){
				$(".agileits_header").addClass("fixed");
			}else{
				$(".agileits_header").removeClass("fixed");
			}
		 });
		 
	});
	</script>
<!-- //script-for sticky-nav -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="js/minicart.js"></script>
<script>
		paypal.minicart.render();

		paypal.minicart.cart.on('checkout.php', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});
	</script>
</body>
</html>
