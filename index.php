 
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
<!-- start-smoth-scrolling -->
</head>
	
<body>
<!-- header -->
	<?php 
		include("topbar.php"); 
	?>
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
	<?php 
		include("headertop.php");
	?>
<!-- //header -->
<!-- banner -->
	<div class="banner">
		<div>
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="w3l_banner_nav_right_banner">
								<h3>Make your <span>food</span> with Spicy.</h3>
								<div class="more">
									<a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
								</div>
							</div>
						</li>
						<li>
							<div class="w3l_banner_nav_right_banner1">
								<h3>Make your <span>food</span> with Spicy.</h3>
								<div class="more">
									<a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
								</div>
							</div>
						</li>
						<li>
							<div class="w3l_banner_nav_right_banner2">
								<h3>upto <i>50%</i> off.</h3>
								<div class="more">
									<a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</section>
			<!-- flexSlider -->
				<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  </script>
			<!-- //flexSlider -->
		</div>
		<div class="clearfix"></div>
	</div>

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

	<div class="top-brands">
		<div class="container">

			 <h3>ALL PRODUCTS</h3>			
			<div class="agile_top_brands_grids">

					<?php
  include("connection.php");
  $sql = "select * from purchases  ";
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
											<?php 
											if(empty($row['image'])){ ?>

 <a href="#" data-toggle="modal" data-target="#exampleModal_<?php echo ''.$row['id'].''?>">
 	<img width="200px" height="180px" title=" " alt=" " src="../uploads/logo.png"  /></a>	
 <?php }else{  ?>
 	 <a href="#" data-toggle="modal" data-target="#exampleModal_<?php echo ''.$row['id'].''?>">
 	<img width="200px" height="180px" title=" " alt=" " src="../uploads/<?php echo $row['image']; ?>"  /></a>	
 <?php  } ?>



				<center>	
				<p><b><?php echo $row['product_name']; ?></b></p>
				<h4><?php echo $row['original_price']; ?></h4>
				<h4>QTY: <?php echo $row['quantity']; ?></h4>
				</center>
				</div>
										<div class="snipcart-details top_brand_home_details">
											
										 
												<fieldset> 
													<input data-toggle="modal" data-target="#exampleModal_<?php echo ''.$row['id'].''?>" type="submit" name="submit" value="Add to Cart" class="button" />
												</fieldset>
										  
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
				</div>



				<div class="modal fade" id="exampleModal_<?php echo ''.$row['id'].''?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Products</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>

        </button>
      </div>
      <div class="modal-body">
        
 

<div class="column">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
            	<form action="add_stocks" method="POST">
                <div class="col-xs-6 form-group field-projects-loadoverhang">
              <?php if(empty($row['image'])){
              	?>
  <img width="100%" height="300px" title=" " alt=" " 
        src="../uploads/logo.png"  />
        		<?php
              }else{
              	?>

  <img width="100%" height="300px" title=" " alt=" " 
        src="../uploads/<?php echo ''.$row['image'].'' ?>"  />

        	<?php
              } ?>

          <p class="help-block help-block-error "></p>
                </div>
                <div class="col-xs-6 form-group field-projects-loadoverhang">
            <?php echo '<input type="hidden" name="user" value="'.$_GET['user'].'">'; ?> 
            <?php echo '<input type="hidden" name="id" value="'.$_GET['id'].'">'; ?>     	
<?php echo '<input type="hidden" value="'.$row['id'].'">'; ?>
                	 <label class="control-label" for="projects-loadoverhang"> BARCODE NUMBERS</label>
                    <input type="text" id="projects-loadoverhang" class="form-control" name="barcode_number" value="<?php echo $row['barcode_numbers']; ?>" tabindex="52" readonly>
                    <p class="help-block help-block-error "></p> 
                	 <label class="control-label" for="projects-loadoverhang"> DESCRIPTION NAME</label>
                    <input type="text" id="projects-loadoverhang" class="form-control" name="Projects[LoadOverHang]" value="<?php echo $row['desc_name']; ?>" tabindex="52" readonly>
                    <p class="help-block help-block-error "></p>

                	 <label class="control-label" for="projects-loadoverhang"> PRICE</label>
                    <input   type="text" id="projects-loadoverhang" class="form-control" name="Projects[LoadOverHang]" value="<?php echo $row['original_price']; ?>" tabindex="52" readonly>
                    <p class="help-block help-block-error "></p>


                     <label class="control-label" for="projects-loadoverhang"> QTY</label>
                    <input   type="text" id="projects-loadoverhang" class="form-control" name="qty" value="1"   tabindex="52" >
                    <p class="help-block help-block-error "></p>

                </div>
            </div>
        </div>
    </div>
</div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
   
	 	
		  <input   type="hidden" name="p_id" value="<?php echo $row['id']; ?>" >
		  <input type="submit" class="btn btn-primary" name="submit" value="Submit">
	 
	 
      </div>
    </div>

  </div>
</div>

     </form>

			<?php } ?>
	
			</div>
		 		
			</div>
		</div>







	</div>

 
 

<!-- Modal -->


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
