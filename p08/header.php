<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<nav style="margin: 2%;" class="navbar navbar-expand-lg navbar-light bg-light">
	<div style="padding: 0.5%;" class="container-fluid">
		<ul class="nav">
			<li class="nav-item">
    			<h3 href="#">CRUD</h3>
  			</li>
  			<li class="nav-item">
    			<a class="nav-link <?= ($page == "index" ? "active" : "")?>" href="indexmhs.php">Mahasiswa</a>
  			</li>
  			<li class="nav-item">
    			<a class="nav-link <?= ($page == "index" ? "active" : "")?>" href="indexdosen.php">Dosen</a>
  			</li>
  			<li class="nav-item">
    			<a class="nav-link <?= ($page == "index" ? "active" : "")?>" href="indexkelas.php">Kelas</a>
  			</li>
  			<li class="nav-item">
    			<a class="nav-link <?= ($page == "index" ? "active" : "")?>" href="indexjadwal.php">Jadwal</a>
  			</li>
		</ul>
	</div>
	</nav>
</body>
</html>


	