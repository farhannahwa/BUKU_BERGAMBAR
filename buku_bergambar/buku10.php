<?php
// pelukan_ayah.php
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Pelajaran dari Pelukan Ayah - BUGAR</title>
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
  <h1>Pelajaran dari Pelukan Ayah</h1>

  <article class="cerita">
    <?php
    $cerita = "Aditya selalu merasa hidupnya berat. Ayahnya kerja siang malam sebagai sopir truk, sementara ibunya jadi tukang jahit di rumah. Mereka tinggal di rumah kecil di pinggir kota. Walau sederhana, Aditya tahu orang tuanya kerja keras demi masa depannya.

Tapi, kadang Aditya merasa kesal. Ia ingin punya waktu lebih banyak dengan ayah dan ibu. Sering kali, pulang sekolah, rumah terasa sepi karena orang tuanya masih kerja.

Suatu sore, setelah Aditya pulang dari sekolah, ia duduk di teras sambil melihat jalanan sepi. Tiba-tiba, ayahnya pulang dengan wajah lelah tapi tersenyum.

Ayah duduk di samping Aditya dan memeluknya. \"Nak, maaf ya ayah sering nggak ada di rumah. Tapi ayah ingin kamu punya masa depan yang lebih baik.\"

Aditya menatap ayahnya, hatinya berubah. Ia sadar bahwa semua perjuangan ayah dan ibu bukan untuk mereka sendiri, tapi untuk dia dan adiknya.

Keesokan harinya, Aditya menulis surat untuk ayah dan ibu. Dalam surat itu ia menulis terima kasih atas semua pengorbanan mereka.

Ia juga janji akan belajar giat supaya kelak bisa membahagiakan mereka.

Waktu berlalu, Aditya makin rajin belajar. Ia tahu bahwa setiap tetes keringat ayah dan ibu adalah pelajaran tentang cinta dan pengorbanan.

Cerita Aditya jadi inspirasi teman-temannya, bahwa di balik perjuangan orang tua, ada kekuatan besar yang harus kita hargai.";

    echo nl2br($cerita);
    ?>
  </article>

  <a href="buku.php" class="btn-kembali">← Kembali ke Perpustakaan Bugar</a>
</body>

</html>