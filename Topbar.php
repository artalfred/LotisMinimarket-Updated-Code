<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.notification {
  background-color: #555;
  color: white;
  text-decoration: none;
  padding: 15px 26px;
  position: relative;
  display: inline-block;
  border-radius: 2px;
}

.notification:hover {
  background: red;
}

.notification .badge {
  position: absolute;
  top: -10px;
  right: -10px;
  padding: 5px 10px;
  border-radius: 50%;
  background-color: red;
  color: red;
}

.product_list_header {
  position: absolute;
  right: 1rem;
}
</style>

<div class="agileits_header">
		<div class="w3l_offers">
			<a href="index">LOTIS MINI MART</a>
		</div> 


 

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

		

	 

		

		<div class="clearfix"> </div>

	</div>
