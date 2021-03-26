<!--Navigation Bar-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<a href="#">
				<img class="navbar-brand" href="#" src="<?php echo base_url(); ?>assets/images/logo.png">
			</a>
		</div>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-contents">
			<span class="navbar-toggler-icon"></span>
		</button>

		<?php
		if($this->session->has_userdata('userid')) {
			echo '
			<!--Logged In-->
			<div class="collapse navbar-collapse" id="navbar-contents">
			<ul class="navbar-nav ml-auto">
			<li class="nav-item my-auto">
			<a href="#">
			<i class="fa fa-bell"></i>
			</a>
			</li>
			<li class="nav-item my-auto">
			<a href="#">
			<i class="fa fa-shopping-cart"></i>
			<span class="badge badge-pill" id="cart-badge"></span>
			</a>
			</li>
			<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
			<img src="'.base_url().'docs/display-pictures/default.png">
			</a>
			<div class="dropdown-menu dropdown-menu-right">
			<a class="dropdown-item" href="#">
			<i class="fa fa-user"></i>Profile
			</a>
			<a class="dropdown-item" href="#">
			<i class="fa fa-history"></i>History
			</a>
			<a class="dropdown-item" href="#">
			<i class="fa fa-star"></i>Wishlist
			</a>
			<a class="dropdown-item" href="#">
			<i class="fa fa-cog"></i>Settings
			</a>
			<a class="dropdown-item" href="'.site_url('Home/logout').'">
			<i class="fa fa-sign-out"></i>Log Out
			</a>
			</div>
			</li>
			</ul>
			</div>
			';
		} else {
			echo '
			<div class="collapse navbar-collapse" id="navbar-contents">
			<ul class="nav justify-content-end ml-auto" id="login-btn">
			<li class="nav-item mr-2 mt-1">
			<a href="'.site_url('Login/index').'">Login</a>
			</li>
			<li class="nav-item">
			<a href="'.site_url('Register/index').'">
			<button class="btn btn-block reg-btn" type="button" id="sign-up-btn">Sign Up</button>
			</a>
			</li>
			</ul>
			</div>
			';
		} ?>
	</div>
</nav>