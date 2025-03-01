 
<!DOCTYPE html>
<html>
<head>
<title>LOTIS MINI MART</title>
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
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
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
 
<style>
	.nav {
    display: flex;
    max-width: 100%;
    overflow-x: auto;
    white-space: nowrap;
    padding: 0 3.4rem 0 3.4rem;
    margin: 0;
}

@media (max-width: 767px) {
	.nav {
    	padding: 0 .7rem 0 .7rem;
	}
}

.nav li {
    list-style: none;
    display: inline-block;
}

.nav a {
    padding: 1rem 1rem;
    color: black;
    text-transform: uppercase;
    display: inline-block;
    text-decoration: none;
}

.nav a:hover {
    background-color: #f0f0f0; /* Add hover effect */
}

/* Custom scrollbar styles */
.nav::-webkit-scrollbar {
    height: 4px; /* Change scrollbar height for horizontal scrollbar */
}

.nav::-webkit-scrollbar-track {
    background: #f1f1f1; /* Background color of the scrollbar track */
}

.nav::-webkit-scrollbar-thumb {
    background: #888; /* Color of the scrollbar thumb */
    border-radius: 10px; /* Round the scrollbar thumb corners */
}

.nav::-webkit-scrollbar-thumb:hover {
    background: #555; /* Change color of the scrollbar thumb on hover */
}
</style>

</head> 
<body>
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
<?php 
		include("topbar.php"); 
	?>
	<?php 
		include("headertop.php");
	?>
<!-- banner -->

	<div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			
					<ul class="nav">
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

	<div class="top-brands">
		<div class="container">
				 <?php
                  include("connection.php");
                  $sql = "select * from category where id = ".$_GET['id']."";
                  $result = mysqli_query($conn, $sql);  
                  while($row = mysqli_fetch_assoc($result)) 
                  {
                  	$catname = $row['CATEGORYNAME'];
                  ?>
					<h3><?php echo $row['CATEGORYNAME']; ?></h3>
				<?php } ?>
			<div class="agile_top_brands_grids">

					<?php
  include("connection.php");
  $sql = "select * from purchases where desc_name = '".$catname."'; ";
                                    $result = mysqli_query($conn, $sql);  
                                    while($row = mysqli_fetch_assoc($result)) 
                                    {
                                  ?> 
				<div class="col-md-3 top_brand_left">
					<div class="hover14 column">
						<div class="agile_top_brand_left_grid"> 
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block" >
										<div class="snipcart-thumb">
 <a href="single.html"><img width="240px" height="180px" title=" " alt=" " src="../uploads/<?php echo $row['image']; ?>"  /></a>	
											<center>	
											<p><b><?php echo $row['product_name']; ?></b></p>
											<h4><?php echo $row['original_price']; ?></h4>
											</center>
										</div>
										<div class="snipcart-details top_brand_home_details">


											<form action="checkout" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="<?php echo $row['product_name']; ?>" />
													<input type="hidden" name="amount" value="<?php echo $row['original_price']; ?>" /> 
													<input type="hidden" name="currency_code" value="PHP" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Add to cart" class="button" />
												</fieldset>
											</form> 
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
			</div>
		</div>
	</div>
<!-- //top-brands -->


<?php 
			include("footer.php");

		?>
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

		paypal.minicart.cart.on('checkout', function (evt) {
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
