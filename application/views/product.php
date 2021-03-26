<?php
$this->load->view('header');
?>

<!--Navigation Bar-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<a href="#">
				<img class="navbar-brand" href="#" src="assets/images/logo.png">
			</a>
		</div>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-contents">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbar-contents">
			<form class="form-inline my-2 my-lg-0" action="action_page.php" id="search-bar">
				<input class="form-control no-glow" type="text" placeholder="Search for products or names...">
				<button class="btn rounded-circle" type="button">
					<i class="fa fa-search"></i>
				</button>
			</form>
			<ul class="nav justify-content-end ml-auto" id="login-btn">
				<li class="nav-item mr-2 mt-1">
					<a href="../login/login.html">Login</a>
				</li>
				<li class="nav-item">
					<a href="../register/register.php">
						<button class="btn btn-block" type="button" id="sign-up-btn">Sign Up</button>
					</a>
				</li>
			</ul>
		</div>
	</div>
</nav>

