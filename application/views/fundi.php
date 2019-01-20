<html>
<head>
	<link rel="stylesheet" href="/assets/css/bootstrap.css">
	<link rel="stylesheet" href="/assets/style.css">
</head>
<body class="form_create">
<?php include 'template/header.php'; ?>

<div class="form" id="fom">
	<?php echo validation_errors(); ?>
	<?php echo form_open('show/form_fundi'); ?>
	<div class="row">
		<div class="col-sm-4">
			<label for="name">Name:
				<input type="text" name="fundi_name"  placeholder="Enter Your Name">
			</label>
		</div>
		<div class="col-sm-4">
			<label for="email">Email
				<input type="email" name="mail"  placeholder="Enter Your Email">
			</label>
		</div>
		<div class="col-md-4">
			<label for="contact">Contacts:
				<input type="text" name="phone"  placeholder="Enter Your Phone Number">
			</label>
		</div>
		<br>
		<div class="col-md-4">
			<label for="id">Id
				<input type="text" name="id"  placeholder="id-number">
			</label>
		</div>
		<div class="col-md-4">
			<label for="textarea">Tell us more about yourself
				<textarea name="textarea" id="" cols="30" rows="10">

			</textarea>
			</label>

		</div>

	</div>

	<button type="submit" name="submit" class="btn btn-info">Submit</button>

	</form>
</div>

</body>
</html>

