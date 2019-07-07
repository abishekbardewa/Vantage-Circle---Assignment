<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet"
	href="<?php echo base_url("assets")?>/css/style.css">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>

<title>Assignment Vantage Circle</title>
</head>
<script type="text/javascript">
$(function(){
	$('#registerform').submit(function(){
		$.ajax({
			type: "POST",
			url: "<?=site_url("login/register")?>",
			data: $("#registerform").serialize(),
			beforeSend: function(){
				$('#result').html('<font color="orange">Submitting your informations... Please Wait...</font>');
			},
			success: function(data){
				$('#result').empty();
				$('#result').html(data);
				
			}
		});
});
});

</script>
<body>
	<div class="container mt-5 pt-5">
		<div class="card mx-auto border-0">
			<div class="card-header border-bottom-0 bg-transparent">
				<ul class="nav nav-tabs justify-content-center pt-4" id="pills-tab"
					role="tablist">
					<li class="nav-item"><a class="nav-link active text-primary"
						id="pills-login-tab" data-toggle="pill" href="#pills-login"
						role="tab" aria-controls="pills-login" aria-selected="true">Login</a>
					</li>

					<li class="nav-item"><a class="nav-link text-primary"
						id="pills-register-tab" data-toggle="pill" href="#pills-register"
						role="tab" aria-controls="pills-register" aria-selected="false">Register</a>
					</li>
				</ul>
			</div>

			<div class="card-body pb-4">
				<div class="tab-content" id="pills-tabContent">
					<div class="tab-pane fade show active" id="pills-login"
						role="tabpanel" aria-labelledby="pills-login-tab">
						<?php 
						$error=validation_errors();
						if(isset($msg))
						    echo "<div class='alert alert-danger'>$msg</div>";
						    
						else if(!$error)
						        echo "<div class='alert alert-info'><small>Please Login with username & Password</small></div>";
						else
						     echo "<div class='alert alert-warning'>$error</div>";
						?>
						<form action="<?=site_url('login/check');?>" method="post">
							<div class="form-group">
								<input type="text" name="username" class="form-control" id="username"
									placeholder="Username">
							</div>

							<div class="form-group">
								<input type="password" name="password" class="form-control"
									id="password" id="password" placeholder="Password">
							</div>

							<div class="text-center pt-4">
								<button type="submit" class="btn btn-primary">Login</button>
							</div>

						</form>
					</div>

					<div class="tab-pane fade" id="pills-register" role="tabpanel"
						aria-labelledby="pills-register-tab">
						<?php include 'register.php'?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js""></script>
</body>
</html>