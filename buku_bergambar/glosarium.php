<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Glosarium - Bahasa Indonesia</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #c2ced8;
      margin: 0;
      padding: 40px 20px;
    }

    .container {
      max-width: 1000px;
      margin: auto;
      background-color: white;
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
    }

    h1 {
      text-align: center;
      color: #4b3f3f;
      font-size: 36px;
    }

    p.intro {
      text-align: center;
      color: #6b6b6b;
      font-size: 16px;
      margin-bottom: 30px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      font-size: 16px;
    }

    th,
    td {
      border: 2px solid #000;
      padding: 12px 16px;
      vertical-align: top;
      text-align: left;
    }

    th {
      background-color: #f3f3f3;
      font-weight: 600;
      font-size: 18px;
    }

    .btn-back {
      position: fixed;
      top: 20px;
      left: 20px;
      background-color: #533B2A;
      color: white;
      font-size: 24px;
      border-radius: 50%;
      width: 50px;
      height: 50px;
      display: flex;
      align-items: center;
      justify-content: center;
      text-decoration: none;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
    }
  </style>
</head>

<body>
  <a href="home1.php" class="btn-back" title="Kembali ke Halaman Awal">🏠</a>
  <div class="container">
    <h1>Glosarium</h1>
    <p class="intro">
      Glosarium ini berisi kumpulan istilah penting dalam pelajaran Bahasa Indonesia yang
      sering muncul di kelas 7 ke atas. Cocok untuk membantu kamu memahami istilah yang terdengar "keren" tapi penting!
    </p>
    <table>
      <thead>
        <tr>
          <th>Kosa Kata Glosarium</th>
          <th>Arti Kosa Kata</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $glosarium = [
          ["Akuisisi", "Pengambilan atau perolehan sesuatu secara resmi, biasanya dalam konteks informasi atau perusahaan."],
          ["Ambigu", "Makna ganda atau tidak jelas, bisa menimbulkan kebingungan."],
          ["Argumen", "Pendapat atau alasan yang mendukung atau menolak suatu hal."],
          ["Autentik", "Asli, bukan tiruan. Umumnya digunakan dalam konteks keaslian teks atau karya."],
          ["Bias", "Penyimpangan atau ketidaktepatan dalam menilai sesuatu secara objektif."],
          ["Cerita", "Kisah atau rangkaian peristiwa yang disampaikan dalam bentuk tulisan atau lisan."],
          ["Data", "Fakta atau informasi yang digunakan untuk analisis atau membuat kesimpulan."],
          ["Dialog", "Percakapan antara dua orang atau lebih dalam suatu teks atau kehidupan nyata."],
          ["Efektif", "Bekerja atau berfungsi dengan baik, mencapai tujuan dengan cara yang tepat."],
          ["Fabel", "Cerita yang tokohnya adalah binatang yang berperilaku seperti manusia dan mengandung pesan moral."],
          ["Gagasan", "Ide atau pemikiran yang menjadi dasar suatu tulisan atau pembicaraan."],
          ["Hipotesis", "Dugaan sementara yang masih harus dibuktikan kebenarannya."],
          ["Ilustrasi", "Gambar atau keterangan tambahan yang berfungsi untuk menjelaskan sesuatu."],
          ["Jurnal", "Catatan harian atau laporan berkala yang berisi informasi atau pengalaman tertentu."],
          ["Kalimat", "Satuan bahasa yang mengandung pikiran lengkap dan memiliki subjek serta predikat."],
          ["Literasi", "Kemampuan membaca dan menulis, juga mencakup pemahaman terhadap informasi."],
          ["Makna", "Arti atau maksud yang terkandung dalam kata, kalimat, atau teks."],
          ["Narasi", "Cerita atau pengisahan suatu peristiwa dalam bentuk tulisan atau lisan."],
          ["Objektif", "Bersifat nyata dan tidak dipengaruhi oleh pendapat atau perasaan pribadi."],
          ["Paragraf", "Kumpulan kalimat yang membentuk satu kesatuan pikiran."],
          ["Resensi", "Ulasan atau penilaian terhadap suatu karya, seperti buku, film, atau pertunjukan."],
          ["Sarkas", "Ucapan sindiran yang tajam dan menyakitkan, sering digunakan untuk menyindir secara tidak langsung."],
          ["Teks", "Kumpulan kata atau kalimat yang memiliki makna dan struktur tertentu."],
          ["Ulasan", "Penilaian atau pendapat seseorang terhadap suatu hal atau karya."],
          ["Verbal", "Berkaitan dengan kata-kata atau bahasa lisan."],
          ["Wacana", "Rangkaian kalimat yang saling berhubungan membentuk makna dalam suatu konteks."],
          ["Sinonim", "Kata yang memiliki makna yang sama atau mirip dengan kata lain."],
          ["Antonim", "Kata yang memiliki makna berlawanan dengan kata lain."],
          ["Konjungsi", "Kata penghubung antar kata, frasa, atau kalimat."],
          ["Predikat", "Bagian dari kalimat yang menjelaskan apa yang dilakukan subjek."],
          ["Subjek", "Pelaku atau pokok pembicaraan dalam suatu kalimat."],
          ["Imbuhan", "Huruf atau kelompok huruf yang ditambahkan pada kata dasar untuk membentuk kata baru."],
          ["Persuasi", "Upaya meyakinkan atau membujuk orang lain agar mengikuti pendapat atau ajakan."],
          ["Ekspresi", "Ungkapan atau pernyataan perasaan atau pikiran."],
          ["Majas", "Gaya bahasa yang digunakan untuk menimbulkan kesan tertentu dalam kalimat."],
          ["Personifikasi", "Majas yang memberikan sifat manusia pada benda mati."],
          ["Hiperbola", "Majas yang melebih-lebihkan sesuatu untuk menimbulkan efek dramatis."],
          ["Metafora", "Majas yang membandingkan dua hal secara langsung tanpa kata penghubung."],
          ["Ironi", "Ungkapan yang bertentangan dengan maksud sebenarnya, biasanya untuk menyindir."],
          ["Deskripsi", "Gambaran rinci tentang suatu objek, tempat, atau suasana."],
          ["Latar", "Tempat, waktu, dan suasana dalam sebuah cerita."],
          ["Tokoh", "Pelaku atau karakter dalam sebuah cerita."],
          ["Alur", "Rangkaian peristiwa yang membentuk jalan cerita."],
          ["Amanat", "Pesan moral atau pelajaran yang ingin disampaikan dalam sebuah cerita."]
        ];

        foreach ($glosarium as $item) {
          echo "<tr><td>{$item[0]}</td><td>{$item[1]}</td></tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
</body>

</html>