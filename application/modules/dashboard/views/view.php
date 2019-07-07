<br>
<div class="container">
	<div class="col-md-6 offset-md-3">
		<div class="card text-center">
			<div class="card-body">
				<h3>Welcome, <small><?=$this->session->userdata('name');?></small></h3>
				<p><b>Username:</b> <?=$this->session->userdata('username');?></p>
				<p><b>Email:</b> <?=$this->session->userdata('email');?></p>
			</div>
		</div>
	</div>
	<div class="col-md-12">
        <?php include 'data.php'?>
        </div>
</div>

