<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/bootstrap/css/bootstrap.min.css'); ?>">
</head>
<body>
	<div class="container" style="margin-top: 30px">
		<div class="row">
			<div class="col-md-4">
				<div class="card">
					<div class="card-header bg-success">
						Login
					</div>
					<div class="card-body">
						<?php 
						if ($this->session->flashdata('msg')) {
							echo "<div class='alert-info alert'>" . $this->session->flashdata('msg') . "</div>";
						} 
						?>
						<form action="<?php echo site_url('login/proses_login') ?>" method="post">
							<div class="form-group">
								<label for="">username</label>
								<input type="username" name="username" class="form-control">
							</div>
							<div class="form-group">
								<label for="">Password</label>
								<input type="password" name="password" class="form-control">
							</div>
							<input type="submit" class="btn btn-outline-success" value="login">
							<a href="#" class="btn btn-outline-secondary">kembali</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>