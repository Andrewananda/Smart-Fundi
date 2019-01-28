<html>
<head>
	<link rel="stylesheet" href="/assets/css/bootstrap.css">
	<link rel="stylesheet" href="/assets/style.css">
</head>
	<body class="form_create">
	<?php include 'template/header.php'; ?>
	<h2 style="color: blue">Happy <span class="client">Client</span></h2>

	<div class="form" id="fom">
		<?php echo validation_errors(); ?>
		<?php echo form_open('show/form_create'); ?>
		<label for="name">Name</label>
		<input type="text" name="name" placeholder="Enter Your Name"><br>
		<label for="email">Email</label>
		<input type="email" name="mail" placeholder="Enter Your Email"><br>
		<label for="contact">Phone</label>
		<input type="text" name="contact" placeholder="Enter Your Phone Number"><br>
		<label for="budget">Budget</label>
		<input type="text" name="mybudget" placeholder="Enter Your Budget"><br>
		<button type="submit" name="submit" class="btn btn-info">Submit</button>

		</form>
	</div>
	<div class="footer">
		<div class="find-us">
			<h3><span class="find">Find</span> <span class="end">Us</span> </h3>

			<div class="row">
				<div class="col-md-4">
					<h3>Tell</h3>
					<p class="glyphicon glyphicon-phone"> <i>0723546707</i></p> <br>
					<p class="glyphicon glyphicon-envelope"> <i>info@smartfundi.com</i></p>

				</div>

				<div class="col-md-4">
					<h3>Locate us</h3>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8197862135635!2d36.82478251404295!3d-1.2818924359812218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f112a5b0ad4dd%3A0x39db923729dbc678!2sCity+Wall+hotel!5e0!3m2!1sen!2ske!4v1538420308836"
							width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

				</div>
				<div class="col-md-4">
					<h3>Our offices</h3>
					<p>Our offices are located <br>
						<i>off thika road
							along USIU </i></p>

				</div>

			</div>
			<p>&copy;2019 Andrew</p>

			<div class="social">
				<a href="facebook.com">	<img src="./assets/images/fb.png" alt="facebook" height="30px" width="20px">
				</a>
				<a href="twitter.com"><img src="./assets/images/tweet.png" alt="twitter" height="30px" width="20px">
				</a>

			</div>
		</div>
	</div>


	</body>
</html>

