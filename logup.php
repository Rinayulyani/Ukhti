<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Handlee' rel='stylesheet' type='text/css'>
</head>
<body>
	<div id="wrapper">
		<div class="out-logup">
			<div class="out-logup1">
				<div id="daftar-logup">
					<div class="cinta">Nama Lengkap</div>
					<div class="cinta">Username</div>
					<div class="cinta">Tempat tanggal lahir</div>
					<div class="cinta">Jenis Kelamin</div>
					<div class="cinta">Status</div>
					<div class="cinta">Email</div>
					<div class="cinta">Alternatif Email</div>
					<div class="cinta">Password</div>
					<div class="cinta">Konfirmasi Password</div>
				</div>
				<div id="titikdua">
					<div class="titik">:</div>
					<div class="titik">:</div>
					<div class="titik">:</div>
					<div class="titik">:</div>
					<div class="titik">:</div>
					<div class="titik">:</div>
					<div class="titik">:</div>
					<div class="titik">:</div>
					<div class="titik">:</div>
				</div>
				<div id="kolom-logup">
					<form>
						<input type="text" name="fnama" placeholder="Nama Lengkap" class="nama-logup"></input>
						<input type="text" name="username" placeholder="Username" class="nama-logup"></input>
						<input type="text" name="tempat" placeholder="Tempat" class="tempat"></input>
						<input type="date" name="tgllahir"  class="date"></input>
						<input type="radio" name="jk" value="Perempuan" class="radiojk">Perempuan</input>
						<input type="radio" name="jk" value="Laki-laki" class="radiojk">Laki-laki</input>
						<select name="status" class="nama-logup1">
							<option value="lajang">Lajang</option>
							<option value="menikah">Menikah</option>
						</select>
						<input type="email" name="email" placeholder="Email" class="nama-logup1"></input>
						<input type="email" name="alternatifemail" placeholder="Alternatif Email" class="nama-logup1"></input>
						<input type="password" name="password" placeholder="Password" class="nama-logup1"></input>
						<input type="password" name="alterpassword" placeholder="Konfirmasi Password" class="nama-logup1"></input>
						<input type="submit" name="daftar" value="Daftar" class="daftar"></input>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>