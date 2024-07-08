<style>
	.main_header {
		display: flex;
		align-items: center;
		justify-content: space-between;
		padding: 0 4rem;
	}

	@media (max-width: 768px) { 
		.main_header {
		padding: 0 1rem;
		}

		.header_navigations {
			display: flex;
  			gap: 1.4rem !important;  
		}

		.logo_products {
    		padding: 1rem 0 1em;
		}

	}

	.header_navigations {
		list-style: none;
 		display: flex;
  		gap: 3rem; 
	}

	.header_navigations li a {
		color: #000;
		font-size: 16px
	}


</style>

<div class="logo_products">
		<div class="main_header">
			<div>
				<a href="index"><img src="./images/LONTIS.png" alt="Lotis Minimarket" style="max-height: 70px;"></a>
			</div>
			
			<div style="margin-top: 0">
				<ul class="header_navigations"> 
					<li><a href="index?id=<?php echo ''.$_GET['id'].'' ?>&user=<?php echo ''.$_GET['user'].'' ?>">Home</a></li>
					<li><a href="about?id=<?php echo ''.$_GET['id'].'' ?>&user=<?php echo ''.$_GET['user'].'' ?>">About Us</a></li>
					<li><a href="tel:+09452758364">Contact Us</a></li>
					<li><a href="../index">Logout</a></li>
				</ul>
			</div>
</div>
	</div>
