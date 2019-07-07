<br>
<div class="container">
	<h3>Welcome <?=$this->session->userdata('name');?></h3>

		<h4>Username: <?=$this->session->userdata('username');?></h4>
		<h4>Email: <?=$this->session->userdata('email');?></h4>
	<div class="col-lg-12">
        <?php include 'data.php'?>
        </div>
</div>

