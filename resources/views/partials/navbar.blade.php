<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top">
	<div class="container justify-content-between" id="navbar-full">
		<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
			<i class="fas fa-bars fs-1"></i>
		</button>
		<a href="" class="navbar-brand">
			<img src="image/assets/images/PNG-horison-hitam 1.png">
		</a>
		<div id="navbar" class="navbar-collapse collapse text-center">
			<ul class="navbar-nav mx-auto">
				<li class="nav-item"> <!--Artikel Page -->
				  <a href="artikel" class="nav-link" onclick="alert('Halaman Artikel akan Segera Hadir! Ikuti Kami untuk Update Informasinya')">Artikel</a>
				</li>
				<li class="nav-item"> <!--Diskusi Page -->
				  <a href="diskusi" class="nav-link" onclick="alert('Halaman Diskusi akan Segera Hadir! Ikuti Kami untuk Update Informasinya')">Diskusi</a>
				</li>
				<li class="nav-item"> <!--Karir Page-->
				  <a href="karir" class="nav-link">Karir</a>
				</li>
				<li class="nav-item dropdown">
				  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					Tentang Kami
				  </a>
				  <ul class="dropdown-menu">
					<li><a class="dropdown-item" href="profil_company">Profil Perusahaan</a></li> <!--Profil Perusahaan-->
					<li><a class="dropdown-item" onclick="alert('Halaman Profil Tutor akan Segera Hadir! Ikuti Kami untuk Update Informasinya')" href="profil_tutor">Profil Tutor</a></li> <!--Profil Tutor-->
					<li><a class="dropdown-item" href="http://linktr.ee/goalsacademyid">Media Sosial</a></li> <!--Media Sosial-->
				  </ul>
				  </li>
			  </ul>
			</div>
			<a class="btn btn-login" id="step-login">Login</a> <!--Button Login-->
	</div>
</nav>
<!-- End Navbar -->

<!-- Pop Up Login/Register -->
<div class="modal-container" id="modal-login-register">
<div class="login-register-content">
	<div class="welcome-login-register">
		<h1>Selamat Datang di</h1>
		<div class="photo-login">
		<img alt="" src="image\assets\icons\LOGO PRIMARY_PUTIH.png" width="320px" height="185px" style="margin: auto;">
		</div>
	</div>
	<div class="card-login-register">
		<h3>Login/Register</h3>
	<div class="form-login-register">
		<form action="" method="GET">
			<div class="form-group" style="margin-top: 10px;">
			<label for="email">Email</label>
			<input type="email" class="form-control" id="email" required>
			</div>
			<div class="form-button">
			<button type="submit" class="btn btn-center" id="next-submit">Lanjutkan</button>
			<p>Lupa Password?</p>
			</div>
		</form>
		<h5>atau gunakan</h5>
		<div class="card-button">
			<button type="submit" id="google-login"> <!--Login/Regist Google-->
				<img alt="" src="image/assets/images/login/icons8-google-48.png" width="25px" height="25px"/> 
				<p>Google</p>
			</button>
			<button type="submit" id="facebook-login"> <!--Login/Regist Facebook-->
				<img alt="" src="image/assets/images/login/icons8-facebook-48.png" width="25px" height="25px"/>
				<p>Facebook</p>
			</button>
		</div>
	</div>
	</div>	
</div>
</div>

<!-- PopUp Login -->
<div class="modal-container" id="modal-login">
<div class="login-content">
	<div class="welcome-login-register">
		<h1>Selamat Datang di</h1>

		<div class="photo-login">
		<img alt="" src="image\assets\icons\LOGO PRIMARY_PUTIH.png" width="320px" height="185px" style="margin: auto;">
		</div>
	</div>
<div class="card-login">
	<h3>Login/Register</h3>
<div class="form-login">
	<form action="" method="GET">
		<div class="form-group" style="margin-top: 10px;">
		<label for="email">Email</label>
		<input type="email" class="form-control" id="email" required/>
		</div>
		<div class="form-group">
		<label for="password">Password</label>
		<input type="password" class="form-control" id="password" required/>
		</div>
		<div class="form-button">
		<button type="submit" class="btn btn-center" id="submit-login">Login</button>
		<p><a href="lupa-password">Lupa Password?</a></p>
		</div>
	</form>
	<h5>atau gunakan</h5>
	<div class="card-button">
		<button type="submit" id="google-login">
			<img alt="" src="image/assets/images/login/icons8-google-48.png" width="25px" height="25px"/>
			<p>Google</p>
		</button>
		<button type="submit" id="facebook-login">
			<img alt="" src="image/assets/images/login/icons8-facebook-48.png" width="25px" height="25px"/>
			<p>Facebook</p>
		</button>
	</div>
	<p class="text-center" style="font-size: 12px; color: #363434;">Belum punya akun? <span class="fw-bold text-decoration-none" id="next-register" style="cursor: pointer">Daftar</p>
</div>
</div>
</div>
</div>

<!-- PopUp Register -->
<div class="modal-container" id="modal-register">
<div class="register-content">
	<div class="text-register">
		<h3 >Register Sekarang di</h3>
		<img src="image\assets\icons\LOGO_SECONDARY_ORANGE.png" alt="" width="256" height="38" />
	</div>
<div class="card-register">
<form action="" method="GET">
<div class="form-register">
		<div class="form-left">
		<div class="form-group" style="margin-top: 10px;">
		<label for="nama_lengkap">Nama Lengkap</label>
		<input type="text" class="form-control" id="nama_lengkap" required/>
		</div>
		<div class="form-group">
		<label for="email">Email</label>
		<input type="email" class="form-control" id="email-regist" required/>
		</div>
		<div class="form-group">
		<label for="universitas">Universitas</label>
		<input type="text" class="form-control" id="universitas" required/>
		</div>
	</div>
	<div class="form-right">
		<div class="form-group">
			<label for="no_telp">No. Telp</label>
			<input type="text" class="form-control" id="no_telp"required/>
			</div>
		<div class="form-group">
		<label for="password">Password* (Minimal 8 Karakter)</label>
		<input type="password" class="form-control" id="password-regist" required/>
		</div>
		<div class="form-group">
			<label for="jurusan">Jurusan</label>
			<input type="text" class="form-control" id="jurusan"required>
			</div>
		<div class="form-button">
		<button type="submit" class="btn btn-center" id="submit-register">Register</button>
		</div>
	</div>
	</form>
</div>
</div>
</div>
</div>