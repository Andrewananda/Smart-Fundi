<html>
<head>
	<link rel="stylesheet" href="/assets/css/bootstrap.css">
	<link rel="stylesheet" href="/assets/style.css">
</head>
	<body class="form_create">
	<?php include 'template/header.php'; ?>

	<div class="form" id="fom">
		<?php echo validation_errors(); ?>
		<?php echo form_open('show/form_create'); ?>
		<label for="name">Name</label>
		<input type="text" name="name"><br>
		<label for="email">Email</label>
		<input type="email" name="mail"><br>
		<label for="contact">Phone</label>
		<input type="text" name="contact"><br>
		<label for="budget">Budget</label>
		<input type="text" name="mybudget"><br>
		<button type="submit" name="submit" class="btn btn-info">Submit</button>

		</form>
	</div>

	</body>
</html>

