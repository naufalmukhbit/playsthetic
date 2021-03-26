<?php
$this->load->view('header');
?>
	<body>
		<?php
		$this->load->view('navbar');
		?>
		
		<!--Image Carousel-->
		<div id="banner-images" class="carousel slide mb-5" data-ride="carousel">
			<ul class="carousel-indicators">
    			<li data-target="#banner-images" data-slide-to="0" class="active"></li>
    			<li data-target="#banner-images" data-slide-to="1"></li>
    			<li data-target="#banner-images" data-slide-to="2"></li>
    			<li data-target="#banner-images" data-slide-to="3"></li>
    			<li data-target="#banner-images" data-slide-to="4"></li>
  			</ul>
  			<div class="carousel-inner">
	    		<div class="carousel-item active">
    				<img class="d-block" src="<?php echo base_url(); ?>assets/images/banner-image-1.jpg" alt="Banner 1">
    			</div>
    			<div class="carousel-item">
      				<img class="d-block" src="<?php echo base_url(); ?>assets/images/banner-image-2.jpg" alt="Banner 2">
    			</div>
    			<div class="carousel-item">
	    			<img class="d-block" src="<?php echo base_url(); ?>assets/images/banner-image-3.jpg" alt="Banner 3">
    			</div>
    			<div class="carousel-item">
      				<img class="d-block" src="<?php echo base_url(); ?>assets/images/banner-image-4.jpg" alt="Banner 4">
    			</div>
    			<div class="carousel-item">
      				<img class="d-block" src="<?php echo base_url(); ?>assets/images/banner-image-5.jpg" alt="Banner 5">
    			</div>
  			</div>
  			<a class="carousel-control-prev" href="#banner-images" data-slide="prev">
	    		<span class="carousel-image-prev"></span>
  			</a>
  			<a class="carousel-control-next" href="#banner-images" data-slide="next">
    			<span class="carousel-image-next"></span>
  			</a>
		</div>	

		<!--Category Buttons-->
		<div class="container mt-5 text-center categories">
			<div class="row">
				<div class="col-sm-2">
					<a href="#">
						<div class="card">
							<img class="card-img-top" src="<?php echo base_url(); ?>assets/images/img-not-available-sq.jpg">
							<span class="my-2">
								T-Shirt
							</span>
						</div>
					</a>
				</div>
				<div class="col-sm-2">
					<a href="#">
						<div class="card">
							<img class="card-img-top" src="<?php echo base_url(); ?>assets/images/img-not-available-sq.jpg">
							<span class="my-2">
								Shirt
							</span>
						</div>
					</a>
				</div>
				<div class="col-sm-2">
					<a href="#">
						<div class="card">
							<img class="card-img-top" src="<?php echo base_url(); ?>assets/images/img-not-available-sq.jpg">
							<span class="my-2">
								Pants
							</span>
						</div>
					</a>
				</div>
				<div class="col-sm-2">
					<a href="#">
						<div class="card">
							<img class="card-img-top" src="<?php echo base_url(); ?>assets/images/img-not-available-sq.jpg">
							<span class="my-2">
								Dress
							</span>
						</div>
					</a>
				</div>
				<div class="col-sm-2">
					<a href="#">
						<div class="card">
							<img class="card-img-top" src="<?php echo base_url(); ?>assets/images/img-not-available-sq.jpg">
							<span class="my-2">
								Accessories
							</span>
						</div>
					</a>
				</div>
				<div class="col-sm-2">
					<a href="#">
						<div class="card">
							<img class="card-img-top" src="<?php echo base_url(); ?>assets/images/img-not-available-sq.jpg">
							<span class="my-2">
								Others
							</span>
						</div>
					</a>
				</div>
			</div>
		</div>
		
		<!--Contents-->
		<div class="container site-content">
			<div class="row">
				<div class="col-lg-8">
					<button class="btn btn-block btn-design">
						SUBMIT YOUR OWN DESIGN
					</button>
					<ul class="nav">
  						<li class="nav-item">
    						<a class="nav-link active" data-toggle="pill" href="#content1">FEATURED</a>
  						</li>
  						<li class="nav-item">
    						<a class="nav-link" data-toggle="pill" href="#content2">WHAT'S NEW</a>
  						</li>
  						<li class="nav-item">
    						<a class="nav-link" data-toggle="pill" href="#content3">BEST SELLERS</a>
  						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active container" id="content1">
							<div class="container-fluid">
								<div class="row">
									<?php
									foreach ($products as $prod) { ?>
									<div class="col-md-4 content-item">
										<div class="card">
  											<img class="card-img-top product-picture" src="<?php echo base_url(); ?>docs/product-pictures/<?php echo $prod->img_src; ?>">
  											<!--400x500 image-->
											<div class="card-body">
												<a href="#">
													<h4 class="card-title"><?php echo $prod->prod_name; ?></h4>
												</a>
												<h6 class="card-text">by <?php echo $prod->name; ?></h6>
								    			<!--<span class="card-text old-price">
								    				<span>Rp. </span>
								    				<span>79999</span>
								    			</span><br>-->
								    			<span class="card-text new-price">
								    				<span>Rp </span>
								    				<span class="fixed-price"><?php echo $prod->price; ?></span>
								    			</span>
								    			<a href="#" class="btn btn-block">ADD TO CART</a>
											</div>
										</div>
									</div>
									<?php }	?>
								</div>
							</div>
						</div>
  						<div class="tab-pane container" id="content2">
  							<div class="container-fluid">
								<div class="row">
									<div class="col-md-4 content-item">
										<div class="card">
  											<img class="card-img-top" src="<?php echo base_url(); ?>assets/images/img-not-available.jpg">
											<div class="card-body">
												<a href="#">
													<h4 class="card-title">Product name</h4>
												</a>
												<h6 class="card-text">by Creator</h6>
								    			<span class="card-text old-price">Rp 199.999</span><br>
								    			<span class="card-text new-price">Rp 79.999</span>
								    			<a href="#" class="btn btn-block">ADD TO CART</a>
											</div>
										</div>
									</div>
									<div class="col-md-4 content-item">
										<div class="card">
  											<img class="card-img-top" src="<?php echo base_url(); ?>assets/images/img-not-available.jpg">
											<div class="card-body">
												<a href="#">
													<h4 class="card-title">Product name</h4>
												</a>
												<h6 class="card-text">by Creator</h6>
								    			<span class="card-text old-price">Rp 199.999</span><br>
								    			<span class="card-text new-price">Rp 79.999</span>
								    			<a href="#" class="btn btn-block">ADD TO CART</a>
											</div>
										</div>
									</div>
									<div class="col-md-4 content-item">
										<div class="card">
  											<img class="card-img-top" src="<?php echo base_url(); ?>assets/images/img-not-available.jpg">
											<div class="card-body">
												<a href="#">
													<h4 class="card-title">Product name</h4>
												</a>
												<h6 class="card-text">by Creator</h6>
								    			<span class="card-text old-price">Rp 199.999</span><br>
								    			<span class="card-text new-price">Rp 79.999</span>
								    			<a href="#" class="btn btn-block">ADD TO CART</a>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 content-item">
										<div class="card">
  											<img class="card-img-top" src="<?php echo base_url(); ?>assets/images/img-not-available.jpg">
											<div class="card-body">
												<a href="#">
													<h4 class="card-title">Product name</h4>
												</a>
												<h6 class="card-text">by Creator</h6>
								    			<span class="card-text old-price">Rp 199.999</span><br>
								    			<span class="card-text new-price">Rp 79.999</span>
								    			<a href="#" class="btn btn-block">ADD TO CART</a>
											</div>
										</div>
									</div>
									<div class="col-md-4 content-item">
										<div class="card">
  											<img class="card-img-top" src="<?php echo base_url(); ?>assets/images/img-not-available.jpg">
											<div class="card-body">
												<a href="#">
													<h4 class="card-title">Product name</h4>
												</a>
												<h6 class="card-text">by Creator</h6>
								    			<span class="card-text old-price">Rp 199.999</span><br>
								    			<span class="card-text new-price">Rp 79.999</span>
								    			<a href="#" class="btn btn-block">ADD TO CART</a>
											</div>
										</div>
									</div>
									<div class="col-md-4 content-item">
										<div class="card">
  											<img class="card-img-top" src="<?php echo base_url(); ?>assets/images/img-not-available.jpg">
											<div class="card-body">
												<a href="#">
													<h4 class="card-title">Product name</h4>
												</a>
												<h6 class="card-text">by Creator</h6>
								    			<span class="card-text old-price">Rp 199.999</span><br>
								    			<span class="card-text new-price">Rp 79.999</span>
								    			<a href="#" class="btn btn-block">ADD TO CART</a>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 content-item">
										<div class="card">
  											<img class="card-img-top" src="<?php echo base_url(); ?>assets/images/img-not-available.jpg">
											<div class="card-body">
												<a href="#">
													<h4 class="card-title">Product name</h4>
												</a>
												<h6 class="card-text">by Creator</h6>
								    			<span class="card-text old-price">Rp 199.999</span><br>
								    			<span class="card-text new-price">Rp 79.999</span>
								    			<a href="#" class="btn btn-block">ADD TO CART</a>
											</div>
										</div>
									</div>
									<div class="col-md-4 content-item">
									</div>
									<div class="col-md-4 content-item">
									</div>
								</div>
							</div>
  						</div>
  						<div class="tab-pane container" id="content3">
  							
  						</div>
					</div>
				</div>
				<div class="col-lg-4 card pt-3">
					<div class="slidecontainer">
						<label for="min-price">Minimum Price : </label>
						<span id="min-price-info"></span><br>
  						<input type="range" min="0" max="2000000" value="0" class="slider w-100" id="min-price">
					</div>
					<div class="slidecontainer">
						<label for="min-price">Maximum Price : </label>
						<span id="max-price-info"></span><br>
  						<input type="range" min="0" max="2000000" value="20000000" class="slider w-100" id="max-price">
					</div>
				</div>
			</div>
		</div>

		<!--Footer-->
		<div class="container-fluid bg-dark" id="main-footer">
			<div class="row mx-5 py-3">
				<div class="col-xs-4 w-50 text-right pr-3">
					<a href="#">
						About us
					</a>
				</div>
				<div class="col-xs-6 w-50">
					&copy; Playsthetic 2018. All rights reserved.
				</div>
			</div>
		</div>
<?php
$this->load->view('footer');
?>