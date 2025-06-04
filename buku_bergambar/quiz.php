<?php
// Penilaian quiz jika dikirim
$skor = null;
$total = 8;
$jawaban_benar = [
  'q1' => 'c',
  'q2' => 'c',
  'q3' => 'c',
  'q4' => 'a',
  'q5' => 'b',
  'q6' => 'c',
  'q7' => 'benar',
  'q8' => 'salah'
];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['quiz'])) {
  $skor = 0;
  foreach ($jawaban_benar as $key => $jawaban) {
    if (isset($_POST[$key]) && $_POST[$key] === $jawaban) {
      $skor++;
    }
  }
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Quiz & Tugas - BUGAR</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      background: #f4f4f4;
    }

    .container {
      max-width: 900px;
      margin: auto;
      padding: 20px;
      background: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1,
    h2 {
      text-align: center;
    }

    .content {
      display: flex;
      flex-direction: column;
      gap: 40px;
    }

    .quiz-section,
    .tugas-section {
      padding: 20px;
      background-color: #e8f0fe;
      border-radius: 10px;
    }

    .question {
      margin-bottom: 20px;
    }

    .question p {
      margin: 0 0 10px 0;
      font-weight: 600;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    textarea {
      width: 100%;
      height: 80px;
      padding: 10px;
      margin-top: 5px;
    }

    button {
      padding: 10px 20px;
      font-size: 16px;
      margin-top: 10px;
      cursor: pointer;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
    }

    .hasil {
      margin-top: 20px;
      text-align: center;
      font-weight: bold;
      color: #333;
    }

    .btn-back {
      display: inline-block;
      margin: 10px;
      text-decoration: none;
      color: white;
      background-color: #333;
      padding: 10px 15px;
      border-radius: 5px;
    }
  </style>
</head>

<body>
  <a href="home1.php" class="btn-back">🏠</a>
  <div class="container">
    <h1>Quiz & Tugas</h1>
    <div class="content">
      <section class="quiz-section">
        <h2>Quiz Pilihan Ganda</h2>
        <form method="POST">
          <input type="hidden" name="quiz" value="1" />
          <?php
          function buatSoal($no, $pertanyaan, $opsi)
          {
            echo "<div class='question'><p>$no. $pertanyaan</p>";
            foreach ($opsi as $key => $val) {
              echo "<label><input type='radio' name='q$no' value='$key' required> $val</label>";
            }
            echo "</div>";
          }

          buatSoal(1, "Apa fungsi utama dari hutan?", [
            'a' => 'Tempat bermain',
            'b' => 'Tempat membuang sampah',
            'c' => 'Menyerap karbon dioksida dan menghasilkan oksigen',
            'd' => 'Tempat berburu hewan liar'
          ]);

          buatSoal(2, "Siapakah tokoh dalam cerita \"Kancil dan Buaya\"?", [
            'a' => 'Gajah dan Kucing',
            'b' => 'Harimau dan Elang',
            'c' => 'Kancil dan Buaya',
            'd' => 'Ayam dan Itik'
          ]);

          buatSoal(3, "Apa manfaat dari membuang sampah pada tempatnya?", [
            'a' => 'Menambah polusi',
            'b' => 'Menyebabkan banjir',
            'c' => 'Menjaga kebersihan lingkungan',
            'd' => 'Membuat hewan kelaparan'
          ]);

          buatSoal(4, "Di cerita \"Misteri Kunci Tua di Loteng Sekolah\", apa yang ditemukan Nadia di loteng?", [
            'a' => 'Kotak kayu kecil berdebu dan kunci tua berkarat',
            'b' => 'Buku harian dan peta harta karun',
            'c' => 'Smartphone misterius',
            'd' => 'Batu besar dengan simbol rahasia'
          ]);

          buatSoal(5, "Dalam cerita \"Aplikasi Misterius di Smartphone Baru\", apa nama aplikasi yang muncul di smartphone Rafi?", [
            'a' => 'DarkApp',
            'b' => 'ShadowLink',
            'c' => 'MysteryPhone',
            'd' => 'HiddenGame'
          ]);

          buatSoal(6, "Di cerita \"Jejak Rahasia di Hutan Sekolah\", apa yang membuka pintu rahasia di balik batu besar?", [
            'a' => 'Peta harta karun',
            'b' => 'Kunci tua',
            'c' => 'Sentuhan Nadia',
            'd' => 'Kode rahasia'
          ]);
          ?>
          <h2>Quiz Benar / Salah</h2>
          <div class="question">
            <p>7. Cerita "Pesan dari Buku Tua" menceritakan tentang Rahman yang menulis surat penting untuk generasi
              sekarang.</p>
            <label><input type="radio" name="q7" value="benar" required> Benar</label>
            <label><input type="radio" name="q7" value="salah"> Salah</label>
          </div>
          <div class="question">
            <p>8. Dalam cerita "Kode Rahasia di Buku Harian", Alma dan Fikri tidak menemukan apa-apa di ruangan bawah
              tanah.</p>
            <label><input type="radio" name="q8" value="benar" required> Benar</label>
            <label><input type="radio" name="q8" value="salah"> Salah</label>
          </div>
          <button type="submit">Kirim Jawaban</button>
        </form>
        <?php if (!is_null($skor)): ?>
          <div class="hasil">Skor kamu: <?= $skor ?> dari <?= $total ?> soal</div>
        <?php endif; ?>
      </section>

      <section class="tugas-section">
        <h2>Tugas</h2>
        <form method="post" onsubmit="return validateTugas()">
          <div class="question">
            <p>1. Pelajaran dari cerita "Misteri Kunci Tua di Loteng Sekolah"</p>
            <textarea name="tugas1" placeholder="Tulis jawaban kamu di sini..." required></textarea>
          </div>
          <div class="question">
            <p>2. Ceritakan pengalamanmu ketika membaca salah satu cerita buku bergambar ini!</p>
            <textarea name="tugas2" placeholder="Tulis ide atau ceritamu di sini..." required></textarea>
          </div>
          <button type="submit">Kirim Tugas</button>
        </form>
      </section>
    </div>
  </div>
  <script>
    function validateTugas() {
      const tugas1 = document.querySelector('textarea[name="tugas1"]').value.trim();
      const tugas2 = document.querySelector('textarea[name="tugas2"]').value.trim();
      if (!tugas1 || !tugas2) {
        alert("Mohon isi semua tugas sebelum mengirim.");
        return false;
      }
      alert("Tugas kamu berhasil dikirim!");
      return true;
    }
  </script>
</body>

</html>