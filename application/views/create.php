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
	<?php include 'template/footer.php'?>


	</body>
</html>

