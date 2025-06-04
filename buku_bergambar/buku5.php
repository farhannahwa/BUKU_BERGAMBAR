<?php
$judul = "pesan buku tua";
$konten = <<<CERITA
"Raka suka banget main ke perpustakaan sekolah. Suatu hari, dia nemu buku tua yang kelihatan udah lama banget nggak disentuh. Sampulnya tebal dan warna kulitnya mulai pudar. Penasaran, Raka buka buku itu.

Ternyata, di halaman pertama ada sebuah catatan tangan dari seseorang yang namanya Rahman, seorang siswa yang pernah sekolah di sana puluhan tahun lalu. Dia menulis tentang rahasia di balik perpustakaan dan sebuah pesan penting yang harus disampaikan ke generasi sekarang.

Raka baca terus, dan dia menemukan petunjuk rahasia tentang sebuah ruang bawah tanah yang tersembunyi di perpustakaan. Dengan bantuan teman-temannya, Sinta dan Bima, mereka mulai menyelidiki.

Mereka mencari-cari petunjuk dan akhirnya menemukan sebuah tombol rahasia di balik rak buku yang membuka pintu menuju ruang bawah tanah tersebut. Di dalam, mereka menemukan banyak benda peninggalan bersejarah dan jurnal-jurnal yang menceritakan kisah perjuangan para pendiri sekolah.

Yang paling mengejutkan, mereka juga menemukan surat dari Rahman yang berisi motivasi agar setiap siswa harus berani bermimpi dan berbuat baik untuk masa depan.

Raka dan teman-temannya sadar kalau mereka mendapat tanggung jawab besar untuk menjaga warisan ini dan menyebarkan pesan positif tersebut."
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
  <img src="lol5.png" alt="Gambar Cerita" class="background-img" id="bgImg">
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