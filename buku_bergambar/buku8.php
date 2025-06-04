<?php
$judul = "Surat Misterius dari Masa Lalu";
$konten = <<<CERITA
"Di ruang arsip sekolah, Reyhan nemu sebuah amplop kuno yang tertempel di balik rak buku tua. Amplop itu berisi surat yang ditulis tahun 1980-an oleh salah satu alumni sekolah yang terkenal dengan julukan “Si Penjelajah”.

Isi surat itu adalah pesan rahasia tentang sebuah “harta” berupa ilmu dan nilai-nilai hidup yang tersembunyi di sekolah.

Reyhan ngajak teman-temannya, Nia dan Dedi, buat cari tahu lebih dalam. Mereka harus mengikuti petunjuk-petunjuk dalam surat yang mengarah ke berbagai sudut sekolah — dari ruang kelas, taman, sampai ruang kepala sekolah.

Setiap petunjuk mengharuskan mereka untuk memecahkan teka-teki yang menguji kecerdasan dan kepekaan mereka.

Dalam perjalanan itu, mereka belajar arti kerja sama, kejujuran, dan keberanian.

Akhirnya mereka sampai di sebuah ruang rahasia yang selama ini tersembunyi, berisi koleksi buku langka dan catatan-catatan sejarah sekolah.

Reyhan dan teman-temannya sadar bahwa harta paling berharga bukanlah benda, tapi ilmu dan nilai yang harus dijaga dan diteruskan."
CERITA;
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?= $judul ?> - BUGAR</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet" />
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body,
    html {
      height: 100%;
      font-family: 'Poppins', sans-serif;
    }

    /* Gambar sebagai background fullscreen */
    .background-img {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -2;
      object-fit: cover;
    }

    /* Overlay hitam untuk teks */
    .overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.6);
      z-index: -1;
      transition: background-color 0.5s ease;
    }

    .container {
      max-width: 800px;
      padding: 40px 30px;
      background-color: rgba(0, 0, 0, 0.85);
      border-radius: 16px;
      margin: 60px auto 30px;
      color: white;
      box-shadow: 0 12px 28px rgba(0, 0, 0, 0.4);
      position: relative;
      text-align: center;
      transition: all 0.3s ease;
    }

    h1 {
      font-size: 28px;
      font-weight: 700;
      margin-bottom: 30px;
    }

    .cerita {
      font-size: 16px;
      line-height: 1.8;
      white-space: pre-line;
      text-align: justify;
    }

    .btn-wrapper {
      text-align: center;
      margin-bottom: 40px;
    }

    .btn-kembali,
    .btn-toggle {
      background-color: #ffffff;
      color: #111;
      padding: 12px 24px;
      font-weight: 600;
      font-size: 14px;
      border: none;
      border-radius: 30px;
      text-decoration: none;
      display: inline-block;
      margin: 10px;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
      transition: background-color 0.3s ease;
      cursor: pointer;
    }

    .btn-kembali:hover,
    .btn-toggle:hover {
      background-color: #eaeaea;
    }

    .hidden {
      display: none;
    }
  </style>
</head>

<body>

  <!-- Gambar Background -->
  <img src="lol8.png" alt="Gambar Cerita" class="background-img" id="bgImg">
  <div class="overlay" id="overlayBg"></div>

  <!-- Konten Cerita -->
  <div class="container" id="ceritaContainer">
    <h1 id="judul"><?= $judul ?></h1>
    <div class="cerita" id="isiCerita"><?= nl2br($konten) ?></div>
  </div>

  <!-- Tombol -->
  <div class="btn-wrapper">
    <button class="btn-toggle" onclick="toggleCerita()">Lihat Gambar Saja</button>
    <a href="buku.php" class="btn-kembali">← Kembali ke Perpustakaan Bugar</a>
  </div>

  <!-- Script toggle -->
  <script>
    function toggleCerita() {
      const judul = document.getElementById('judul');
      const isiCerita = document.getElementById('isiCerita');
      const container = document.getElementById('ceritaContainer');
      const overlay = document.getElementById('overlayBg');
      const button = document.querySelector('.btn-toggle');

      if (isiCerita.style.display === "none") {
        // tampilkan kembali
        isiCerita.style.display = "block";
        judul.style.display = "block";
        container.style.backgroundColor = "rgba(0, 0, 0, 0.85)";
        overlay.style.backgroundColor = "rgba(0,0,0,0.6)";
        button.textContent = "Lihat Gambar Saja";
      } else {
        // sembunyikan cerita dan judul
        isiCerita.style.display = "none";
        judul.style.display = "none";
        container.style.backgroundColor = "transparent";
        overlay.style.backgroundColor = "rgba(0,0,0,0)";
        button.textContent = "Tampilkan Cerita";
      }
    }
  </script>

</body>

</html>