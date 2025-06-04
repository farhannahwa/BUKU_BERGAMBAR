<?php
// surat_untuk_ayah_ibu.php
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Surat untuk Ayah dan Ibu - BUGAR</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #dceefc, #a2c5f0);
      color: #3a3a3a;
      min-height: 100vh;
      padding: 30px 20px;
      max-width: 800px;
      margin: auto;
    }

    h1 {
      color: #1a3e6e;
      font-weight: 700;
      font-size: 32px;
      margin-bottom: 20px;
      text-align: center;
      text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.15);
    }

    .cerita {
      background: white;
      border-radius: 15px;
      padding: 25px 30px;
      line-height: 1.6;
      font-size: 16px;
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.12);
      white-space: pre-line;
    }

    .btn-kembali {
      display: block;
      margin: 30px auto 0;
      padding: 15px 40px;
      background-color: #17202a;
      color: white;
      font-weight: 600;
      font-size: 16px;
      border-radius: 30px;
      text-align: center;
      text-decoration: none;
      width: max-content;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      transition: background-color 0.3s ease;
      cursor: pointer;
    }

    .btn-kembali:hover {
      background-color: #0f1620;
    }
  </style>
</head>

<body>
  <h1>Surat untuk Ayah dan Ibu</h1>

  <article class="cerita">
    <?php
    $cerita = "Rania adalah siswi kelas 7 yang sering merasa jarak dengan orang tuanya. Ayahnya sibuk kerja dan ibunya juga sering lembur. Karena itu, Rania kadang merasa kesepian dan susah buat cerita apa pun.

Suatu hari, guru di sekolah memberi tugas untuk menulis surat untuk orang tua, ungkapin perasaan dan rasa terima kasih.

Awalnya Rania bingung, tapi dia coba menulis dengan jujur semua yang dia rasain—tentang betapa dia rindu kebersamaan, tapi juga mengerti perjuangan ayah dan ibunya.

Setelah surat itu selesai, Rania memberikannya pada ayah dan ibunya saat pulang sekolah.

Yang terjadi justru bikin Rania terharu. Ayah dan ibunya cerita tentang betapa mereka juga kangen sama Rania, tapi kerja keras demi masa depan yang lebih baik.

Mereka sepakat buat cari waktu khusus setiap minggu buat quality time bersama keluarga, walau sibuk.

Rania belajar kalau komunikasi itu penting dan orang tua juga butuh didengar dan dimengerti.";

    echo nl2br($cerita);
    ?>
  </article>

  <a href="buku.php" class="btn-kembali">← Kembali ke Perpustakaan Bugar</a>
</body>

</html>