<nav class="navbar navbar-default">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">RM Anugrah</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
			<li><a href="<?php echo app_base.'home' ?>">Home</a></li>
			<li><a href="<?php echo app_base.'lihat_menu' ?>">Pesan Makanan</a></li>
			<li><a href="<?php echo app_base.'daftar_pemesanan' ?>">Daftar Pemesanan</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo (!empty($_SESSION)) ? $_SESSION['nama_lengkap'] : '' ?> <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Ubah Profil</a></li>
						<li><a href="#">Ubah Password</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo app_base.'logout' ?>">Log Out</a></li>
					</ul>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>