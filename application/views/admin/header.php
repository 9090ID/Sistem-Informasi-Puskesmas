<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<title>Administrator&nbsp|&nbsp<?php echo $judul?></title>
		<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet"/>
		<link href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.css" rel="stylesheet"/>
		<style type="text/css">
body {
	background:#00A5A5;
	font-size: 0.8em;
}
.utama {width: 100%;}
.bersih  {clear: both;}
h1, p {text-align: justify;}
a, a:hover, a:link, a:active {text-decoration: none;}
.menu {
	width: 100%;
	margin: 0;
	padding: 0;
	list-style: none;
	background: #333;
	background: -moz-linear-gradient(#444, #333);
	background: linear-gradient(#444, #333);
	border-radius: 10px;
	box-shadow: 0 2px 1px #9c9c9c;
	transition: 1s ease-in-out;
	-moz-transition: 1s ease-in-out;
}
.menu li {
	float: left;
	padding: 0;
	position: relative;
}
.menu a {
	float: left;
	padding: 10px 20px 7px 20px;
	color: white;
	text-transform: uppercase;
	text-decoration: none;
	text-shadow: 0 1px 0 #000;
	font-family:arial;
	font-size:12px;
}
.menu li:hover > a {color: #eee;}
.menu li:hover > ul {display: block;}
.menu:after {
	visibility: hidden;
	display: block;
	font-size: 0;
	content: " ";
	clear: both;
	height: 0;
}
.menu ul {
	list-style: none;
	margin: 0;
	padding: 0;
	display: none;
	position: absolute;
	top: 35px;
	left: 0;
	z-index: 9999;
	background: #333;
	background: -moz-linear-gradient(#444, #333);
	background: linear-gradient(#444, #333);
	border-radius: 10px;
	box-shadow: 0 2px 1px #9c9c9c;
}
.menu ul li {
	float: none;
	margin: 0;
	padding: 0;
	display: block;
	box-shadow: 0 1px 0 #111, 0 2px 0 #777;
}
.menu ul a {
	padding: 10px;
	height: auto;
	display: block;
	white-space: nowrap;
	float: none;
	text-transform: none;
}
.menu ul a:hover {
	background: #0186ba;
	background: -moz-linear-gradient(#04acec, #0186ba);
	background: linear-gradient(#04acec, #0186ba);
}
.menu ul li:first-child a {border-radius: 5px 5px 0 0;}
.menu ul li:first-child a:after {
	content: " ";
	position: absolute;
	left: 30px;
	top: -8px;
	width: 0;
	height: 0;
	border-left: 5px solid transparent;
	border-right: 5px solid transparent;
	border-bottom: 8px solid #333;
}
.menu ul li:first-child a:hover:after {border-bottom-color: #04acec;}
.menu ul li:last-child {box-shadow: none;}
.menu ul li:last-child a {border-radius: 0 0 5px 5px;}
</style>

</head>
<body>

<div class="container">
	<article class="utama">
	<h3>WELCOME DI HAK AKSES ADMINISTRATOR WEBSITE PUSKESMAS KEMANTAN...</h3>
	<ul class="menu">
		<li><a href="<?php echo site_url('admin/index') ?>"><b class="icon-home icon-white"></b>&nbspHome</a></li>
		<li><a href="<?php echo site_url('admin/dataartikel') ?>"><b class="icon-book icon-white"></b>&nbspData Artikel</a></li>
		<li><a  href="#"><i class="fa fa-camera"></i><b class="icon-book icon-white"></b>DATA MASTER PUSKESMAS</a>
 		<ul class="sub-menu">
			<li><a href="<?php echo site_url('admin/datapuskesmas') ?>">DATA PUSKESMAS</a></li>
  		 	<li><a href="<?php echo site_url('admin/dataprofil') ?>">Kata Sambutan Kepala Puskesmas</a></li>
   			<li><a href="<?php echo site_url('admin/datasejarah') ?>">Sejarah Puskesmas</a></li>
  			<li><a href="<?php echo site_url('admin/datavisi') ?>">Visi Dan Misi</a></li>
   			<li><a href="<?php echo site_url('admin/datastruktur') ?>">Struktur</a></li>
			 <li><a href="<?php echo site_url('admin/dataagenda') ?>">Agenda Puskesmas</a></li>
			<li><a href="<?php echo site_url('admin/dokter') ?>">Data Dokter</a></li>
		</ul>
 	    </li>
		<li><a  href="#"><i class="fa fa-camera"></i><b class="icon-book icon-white"></b>Data Fasilitas Dan Layanan</a>
		<ul class="sub-menu">
  			 <li><a href="<?php echo site_url('admin/subfasilitas') ?>">Sub Fasilitas</a></li>
  			 <li><a href="<?php echo site_url('admin/fasilitas') ?>">Fasilitas</a></li>
  	   </ul>
       </li>
	   <li><a  href="#"><i class="fa fa-camera"></i><b class="icon-book icon-white"></b>DATA INFORMASI</a>
 	   <ul class="sub-menu">
 			 <li><a href="<?php echo site_url('admin/datainfo') ?>">Artikel Informasi</a></li>
  			
   			 <li><a href="<?php echo site_url('admin/header') ?>">Gambar Carousel</a></li>
			 <li><a href="<?php echo site_url('admin/datagalleri') ?>">Gambar Gallery</a></li>
			
  	 </ul>
 	 </li>
	 <li><a href="<?php echo site_url('admin/datakonsul') ?>"><b class="icon-book icon-white"></b>Data Konsultasi</a></li>
     <li><a href="<?php echo site_url('clogin/logout') ?>"><b class="icon-off icon-white"></b>&nbspLogout</a></li>
</ul>	
   </div>
 </article>
	
	
	
	
	
