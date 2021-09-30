<?php include 'php/sendemail.php'; ?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="outhor" content="CARAKUBEIYA">
    <meta name="keywords" content="cbi join, gabung cbi, join carakubeiya, gabung carakubeiya, join caraku be iya">
    <link rel="icon" href="img/logokiri.png" type="image/x-icon">
	<title>#CARAKUBEIYA-GABUNG</title>
    <link rel="shortcut icon" href="img/logokiri.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/gabung.css">
	<link rel="stylesheet" type="text/css" href="css/bg.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script defer src="js/activepage.js"></script>
    <script defer src="js/scroll.js"></script>
    <script defer src="js/stickynavbar.js"></script>
</head>
<body>

<!-- START ALERT-->
<?php echo $alert; ?>
<!-- START ALERT-->

<!-- BACKGROUND -->
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<!-- BACKGROUND -->
<!-- link  http://carakubeiya.ezyro.com/ -->
<section class="all-body">
<!-- HEADER -->
<header class="nav-header">
    <a class="logo" href="index.html"><img src="img/logokiri.png" alt=""></a>
    <ul>
        <li><a class="page fr" href="index.html">BERANDA</a></li>
        <li><a class="page tw" href="gabung.php">GABUNG</a></li>
    </ul>
</header>
<!-- HEADER -->

<!-- FORM -->
<div class="form-section">
    <div class="form-col">
        <h1>ISI FORMULIR DIBAWAH INI</h1>
        <form class="form" action="" method="post" enctype="multipart/form-data">
            <p>NAMA LENGKAP</p>
            <input type="text" name="nama" class="text-box" placeholder="*Raffi Fariz" required>
            <p>ALAMAT</p>
            <input type="text" name="alamat" class="text-box" placeholder="Provinsi,Kota" required>
            <p>NOMOR WHATSAPP</p>
            <input type="number" name="whatsapp" class="text-box" placeholder="08xxxxxxxxxxx" required>
            <p>UMUR</p>
            <input type="number" name="umur" class="text-box" placeholder="*10" required>
            <p>JENIS KELAMIN</p>
            <select name="jeniskelamin" id="jeniskelamin" class="text-box" aria-placeholder="Jenis Kelamin">
                <option value="empty" aria-required="true">--PILIH JAWABAN--</option>
		        <option value="laki-laki" aria-required="true">Laki-Laki</option>
		        <option value="perempuan" aria-required="true">Perempuan</option>
            </select>
            <p>SIAP UNTUK CHANGE NAME</p>
            <select name="questcn" id="questcn" class="text-box" aria-placeholder="pertanyaan">
                <option value="empty" aria-required="true">--PILIH JAWABAN--</option>
                <option value="siap" aria-required="true">IYA</option>
                <option value="tidak" aria-required="true">TIDAK</option>
            </select>
            <p>ON MIC SAAT IN GAME</p>
            <select name="questonmic" id="questonmic" class="text-box" aria-placeholder="pertanyaan">
                <option value="empty" aria-required="true">--PILIH JAWABAN--</option>
                <option value="siap" aria-required="true">IYA</option>
                <option value="tidak" aria-required="true">TIDAK</option>
            </select>
            <p>SCREENSHOT KD LIFETIME</p>
            <input type="file" name="screenshot" class="text-box" placeholder="screenshot" required>
            <input type="submit" name="submit" class="send-btn" value="KIRIM">
        </form>
        <p class="note">*CUKUP KIRIM FORMULIR SATU KALI SAJA...</p>
    </div>
</div>
<!-- FORM -->

<!-- FOOTER -->
<div class="footer">
    <div class="ftr-container">
       <p class="copyright">All Rights Reserved &copy; CARAKUBEIYA 2021</p> 
    </div>
</div>
<!-- FOOTER -->
</section>

</body>
</html>