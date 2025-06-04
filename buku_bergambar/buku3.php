<?php
$judul = "rahasia jam dinding";
$konten = <<<CERITA
"Di sebuah sekolah tua yang sudah berdiri sejak puluhan tahun lalu, ada sebuah jam dinding besar yang tergantung di ruang guru. Jam itu bukan jam biasa—wajahnya penuh ukiran rumit dan jarumnya berkilau seperti emas tua.

Alvin, siswa kelas 7 yang baru pindah ke sekolah itu, langsung penasaran sama jam tersebut. Guru-guru bilang jam itu sudah ada sejak awal berdirinya sekolah, dan katanya jam itu punya cerita misterius, tapi nggak ada yang tahu pasti.

Suatu hari, saat Alvin lagi mengerjakan PR di ruang guru, dia melihat sesuatu aneh: jarum jam berdetak mundur selama beberapa detik, lalu kembali maju seperti biasa. Alvin jadi makin penasaran.

Malamnya, Alvin nggak bisa tidur. Bayangan jam dinding itu terus muncul di kepalanya. Akhirnya dia nekat kembali ke sekolah saat semua sudah pulang dan masuk ke ruang guru.

Di sana, dia menemukan bahwa jam itu bisa dibuka! Di baliknya ada sebuah peti kecil yang berisi sebuah buku harian dan sebuah kunci kecil berukir huruf A.

Ternyata, buku harian itu milik pendiri sekolah yang dulu, seorang guru dan penjelajah bernama Andi. Dalam buku itu, Andi menulis tentang mimpinya agar sekolah ini jadi tempat belajar yang bukan cuma mengajarkan pelajaran biasa, tapi juga mengasah keberanian dan kejujuran siswa.

Buku harian itu juga menyimpan peta rahasia di dalam sekolah, yang menunjukkan tempat tersembunyi di bawah lapangan olahraga. Dengan kunci kecil yang dia temukan, Alvin memutuskan untuk mencari tahu lebih jauh.

Bersama teman-temannya, Sari dan Raka, Alvin mengikuti petunjuk peta. Mereka harus melewati lorong gelap dan teka-teki yang menguji kecerdasan dan kerja sama mereka.

Di akhir perjalanan, mereka menemukan ruang bawah tanah dengan berbagai artefak sejarah sekolah, termasuk pesan dari pendiri yang meminta para siswa masa kini untuk menjaga nilai-nilai kejujuran, keberanian, dan rasa ingin tahu.

Alvin dan teman-temannya berjanji untuk meneruskan semangat itu dan menjaga rahasia sekolah, sambil belajar bahwa kadang misteri terbesar ada di tempat yang paling dekat dengan kita."
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
  <img src="lol3.png" alt="Gambar Cerita" class="background-img" id="bgImg">
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