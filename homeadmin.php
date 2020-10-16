<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="csshadmin.css">
</head>
<body>
<div id="mySidenav" class="sidenav">
	<img src="asset/logdasmin.png" style="width: 150px; height: 40px; padding-left: 20px;">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	  <div class="dropdown1">
	  	<img src="asset/sisremove.png" style="width: 40px;height: 30px;padding-left: 8px;">   
	  	<span>Siswa</span>
	  	<div class="dropdown1-content">
	  		<a href="">Tambah Siswa</a>
	  		<a href="">Lihat Siswa</a>
	  	</div>
	  </div>
	  <div class="dropdown1">
	  	<img src="asset/tere.png" style="width: 55px;height: 35px;">
	  	<span>Guru</span>
	  	<div class="dropdown1-content">
	  		<a href="">Tambah Guru</a>
	  		<a href="">Lihat Guru</a>
	  	</div>
	  </div>
	  <div class="dropdown1">
	  	<img src="asset/cere.png" style="width: 25px;height: 35px; padding-left: 20px;padding-right: 10px;">
	  	<span>Kelas</span>
	  	<div class="dropdown1-content">
	  		<a href="">Tambah Kelas</a>
	  		<a href="">Lihat Kelas</a>
  	</div>
  </div>
</div>

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
<div class="container">
	<div class="kotak">
	</div>
	<div class="kotak1">
	</div>	
	<div class="kotak2"></div>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "200px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
   
</body>
</html> 
