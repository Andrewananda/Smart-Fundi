<html xmlns="http://www.w3.org/1999/html">
<head>
	<title>SMART FUNDI</title>
	<link rel="stylesheet" href="./assets/css/bootstrap.css">
	<link rel="stylesheet" href="./assets/style.css">

</head>
	<body>
<!--		navigation bar-->
			<?php include 'template/header.php'; ?>
<!--			closing navigation bar-->
<!--			container to hold app frame-->
				<div class="container-fluid">
<!--					<h4 class="welcome"><span class="come">Welcome</span> to <span class="smart">Smart</span> <span class="fundi">Fundi</span> </br>-->
<!--						<i>Find trusted contractors for your ideal home </i>-->
<!--					</h4>-->
					<div class="container-fluid">
						<img src="./assets/images/constr.jpg" alt="home" width="1500px" height="600px">
					</div>
					<div class="what-we-do">
						<h3><span class="part">What</span> we <span class="end">do!</span></h3>
						<div class="jumbotron">
						<div class="row">
							<div class="col-md-4">
								<a href="<?php echo base_url('index.php/show/form_create')?>"><h3>Construct</h3>
								<img src="./assets/images/const.jpeg" alt="constract" class="img img-rounded">
								<p>The core aim of Smart fundi is to help you <em>CONSTRUCT</em> your ideal home with our trusted
								and experienced constructors in our teams</p>
								</a>

							</div>
							<div class="col-md-4">
								<a href="fundi.php"><h3>Create Employment</h3>
								<img src="./assets/images/employ.jpeg" alt="employ" class="img img-rounded">
								<p>The smart fundi app also helps you as a <em>FUNDI</em> to find jobs as easy as possible by simply
								signing in to our system</p>
								</a>

							</div>
							<div class="col-md-4">
								<a href="#"><h3>Network</h3>
								<img src="./assets/images/networking.jpeg" alt="network" class="img img-rounded">
								<p>We also create networks for our fundis with seiners that help them share and join hands for a better
								home for you</p>
								</a>
							</div>

						</div>
						</div>

						 <div class="partners jumbotron">
							 <h3><span class="part" id="patners">Our</span> <span class="dec">partners</span> </h3>
							 <div class="row">
								 <div class="col-md-4">
									 <img src="./assets/images/scco.jpeg" alt="sacco" class="img img-circle" height="50px" width="80px">
									 <p>We partner to help our employees in saving and for loans that will help after they retire</p>

								 </div>
								 <div class="col-md-4">
									 <img src="./assets/images/sup.png" alt="constructor company" class="img img-circle" height="60px" width="80px">
									 <p>They have always helped us in construction open opportunity and shared the experience with our contructors
									 for better productivity</p>
								 </div>
								 <div class="col-md-4">
									 <img src="./assets/images/jica.jpeg" alt="school" class="img img-circle" height="50px" width="80px">
									 <p>Is where we get most of our employees</p>

								 </div>

							 </div>
							 <?php include 'template/about.php'; ?>

						 </div>
						<?php include 'template/footer.php'; ?>

					</div>


					</div>
<!--	closing container-->

	</body>
</html>
