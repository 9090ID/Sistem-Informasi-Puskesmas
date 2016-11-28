<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<title>Login Admin</title>
</head>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="navbar.css" rel="stylesheet">
		<link  href="css/bootstrap-responsive.min.css"rel="stylesheet"/> <!-- bootstrap responsive css-->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link  href="css/bootstrap-carousel.js"rel="stylesheet"  media="screen" /><!-- bootstrap css-->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<style type="text/css" id="test">
		body{background-color: #53B74B;}
#kotak{
	width: 520px;
	height: 250px;
	background:#005300;
	margin: 20px auto 90px auto;
	color:white;
	border-style: double;
}
.judul{
text-align: center;
padding-top: 40px;
color:black;
font-size:27px;
}
#atas{
color:white;
	height: 35px;
	width: 520px;
	text-align: center;
	font-size: 15pt;
	font-family:Andalus;
}
#bawah{
	height: 200px;
	width: 520px;
}
.masuk{
	width: 400px;
	height:40px;
	margin-top:10px;
	margin-left: 60px;
	font-size: 12pt;
	border: 1px solid #2ECC71;
	padding-left:10px;
	color:black;
}
.masuk:focus{
	width: 400px;
	height:40px;
	margin-top:10px;
	margin-left: 60px;
	font-size: 12pt;
	padding-left:10px;
	color:Black;
	outline: none;
	box-shadow: 0 0 5px #2ECC71;
}
#tombol{
	width: 400px;
	height:40px;
	margin-top:10px;
	margin-left: 60px;
	background:#0FB90F;
	border:none;
	color:#fff;
	font-size: 14pt;
	outline:none;
}
#box {
	background-color: lightgrey;
	width: 300px;
	padding: 25px;
	border: 25px solid navy;
	margin: 25px;
}
		</style>
		<body>
		<div class="judul">
		Sistem Informasi Puskesmas Kemantan Kab.Kerinci
		</div>
		<div id="kotak">
			<div id="atas">
				<br />LOGIN STAFF ADMIN
			</div><br />
			<div id="bawah">
				<form action="<?php echo site_url('clogin/login'); ?>" method="post" role="form">
					<input class="masuk" type="text" autocomplete="off" placeholder="Username" name="nip">
					<input class="masuk" type="password" autocomplete="off" placeholder="Password" name="password">
					<input id="tombol" type="submit" name ="login" value="Login">
				</form>
			</div>
		</div>
		<div class="container">
		</div>
