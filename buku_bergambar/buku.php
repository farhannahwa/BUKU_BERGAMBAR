<?php
// Proses hapus file jika ada request hapus
if (isset($_GET['delete']) && !empty($_GET['delete'])) {
  $fileToDelete = basename($_GET['delete']); // amanin nama file
  $filePath = __DIR__ . '/uploads/' . $fileToDelete;
  if (file_exists($filePath)) {
    unlink($filePath);
    header("Location: " . strtok($_SERVER["REQUEST_URI"], '?')); // redirect tanpa param
    exit;
  }
}

// Proses upload file jika ada
$uploadError = '';
$uploadSuccess = '';
$uploadedFileName = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_FILES['upload_buku']) && $_FILES['upload_buku']['error'] === UPLOAD_ERR_OK) {
    $fileTmpPath = $_FILES['upload_buku']['tmp_name'];
    $fileName = $_FILES['upload_buku']['name'];
    $fileSize = $_FILES['upload_buku']['size'];
    $fileType = $_FILES['upload_buku']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));

    // Hanya izinkan file PDF
    if ($fileExtension === 'pdf') {
      $uploadFileDir = './uploads/';
      if (!is_dir($uploadFileDir)) {
        mkdir($uploadFileDir, 0755, true);
      }
      $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
      $dest_path = $uploadFileDir . $newFileName;

      if (move_uploaded_file($fileTmpPath, $dest_path)) {
        $uploadSuccess = 'File berhasil diupload sayang.';
        $uploadedFileName = $newFileName;
      } else {
        $uploadError = 'Terjadi kesalahan sayang saat memindahkan file.';
      }
    } else {
      $uploadError = 'Maaf sayang, hanya file PDF yang diperbolehkan.';
    }
  } else {
    $uploadError = 'Tidak ada file yang diupload atau terjadi kesalahan upload sayang.';
  }
}

// Ambil semua file pdf di folder uploads
$uploadedFiles = [];
if (is_dir('./uploads/')) {
  $files = scandir('./uploads/');
  foreach ($files as $file) {
    if (is_file('./uploads/' . $file) && strtolower(pathinfo($file, PATHINFO_EXTENSION)) === 'pdf') {
      $uploadedFiles[] = $file;
    }
  }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Perpustakaan Bugar - Upload Buku Cerpen</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #e6e0ff, #b59fff);
      color: #3a2e2e;
      min-height: 100vh;
      margin: 0;
      padding: 30px 20px 50px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    h1 {
      text-align: center;
      color: #311b70;
      margin-bottom: 50px;
      font-weight: 600;
      font-size: 36px;
      text-shadow: 1px 1px 3px rgba(49, 27, 112, 0.5);
      max-width: 900px;
      width: 100%;
    }

    .container {
      max-width: 900px;
      width: 100%;
      display: grid;
      grid-template-columns: repeat(5, 1fr);
      gap: 25px 30px;
      justify-items: center;
      align-items: stretch;
      margin-bottom: 60px;
      padding: 0 10px;
    }

    /* Warna berbeda untuk tiap kotak menu */
    .judul-cerita:nth-child(5n+1) {
      background-color: #b59fff;
      color: #311b70;
      box-shadow: 0 6px 15px rgba(101, 79, 255, 0.3);
    }

    .judul-cerita:nth-child(5n+2) {
      background-color: #c4a1ff;
      color: #2e1a7f;
      box-shadow: 0 6px 15px rgba(148, 112, 255, 0.3);
    }

    .judul-cerita:nth-child(5n+3) {
      background-color: #a88fff;
      color: #2b1369;
      box-shadow: 0 6px 15px rgba(135, 109, 255, 0.3);
    }

    .judul-cerita:nth-child(5n+4) {
      background-color: #9e79e5;
      color: #241256;
      box-shadow: 0 6px 15px rgba(128, 95, 255, 0.3);
    }

    .judul-cerita:nth-child(5n+5) {
      background-color: #ab95f8;
      color: #2a1f7d;
      box-shadow: 0 6px 15px rgba(153, 129, 255, 0.3);
    }

    .judul-cerita {
      border-radius: 15px;
      padding: 25px 20px;
      font-weight: 700;
      font-size: 18px;
      cursor: pointer;
      text-align: center;
      user-select: none;
      transition: background-color 0.3s ease, transform 0.2s ease, box-shadow 0.3s ease;
      text-decoration: none;
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 90px;
    }

    .judul-cerita:hover {
      background-color: #8d6eff !important;
      color: white !important;
      transform: translateY(-6px);
      box-shadow: 0 14px 30px rgba(110, 76, 255, 0.6);
    }

    .btn-back {
      display: inline-block;
      padding: 14px 36px;
      background-color: #6e4cff;
      color: white;
      font-weight: 600;
      border-radius: 30px;
      text-decoration: none;
      font-size: 16px;
      box-shadow: 0 5px 15px rgba(110, 76, 255, 0.5);
      transition: background-color 0.3s ease;
      cursor: pointer;
      margin-bottom: 40px;
      max-width: 900px;
      width: 100%;
      text-align: center;
    }

    .btn-back:hover {
      background-color: #8d6eff;
      color: white;
    }

    #upload-section {
      max-width: 900px;
      width: 100%;
      text-align: center;
      margin-top: 40px;
      margin-bottom: 30px;
      padding: 0 10px;
    }

    #upload-label {
      font-weight: 600;
      cursor: pointer;
      color: #311b70;
      display: inline-block;
      margin-bottom: 10px;
      font-size: 18px;
    }

    #upload-buku {
      display: inline-block;
      font-size: 16px;
      padding: 8px 10px;
      border-radius: 8px;
      border: 1.5px solid #b59fff;
      transition: border-color 0.3s ease;
      cursor: pointer;
    }

    #upload-buku:hover,
    #upload-buku:focus {
      border-color: #8d6eff;
      outline: none;
    }

    #clear-buku {
      display: none;
      margin-top: 10px;
      padding: 8px 16px;
      border: none;
      background: #6e4cff;
      color: #fff;
      border-radius: 20px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    #clear-buku:hover {
      background: #8d6eff;
    }

    #isi-buku {
      white-space: pre-wrap;
      background: #fff;
      padding: 20px;
      border-radius: 15px;
      box-shadow: 0 4px 6px rgba(62, 39, 102, 0.2);
      max-height: 400px;
      overflow-y: auto;
      margin-top: 20px;
      font-size: 16px;
      color: #333;
      user-select: text;
      max-width: 900px;
      width: 100%;
    }

    .message {
      margin-top: 15px;
      font-weight: 600;
      color: #2e7d32;
    }

    .error {
      margin-top: 15px;
      font-weight: 600;
      color: #b00020;
    }

    /* Daftar file PDF terupload */
    #uploaded-files {
      max-width: 900px;
      width: 100%;
      margin: 0 auto 50px;
      padding: 0 10px;
    }

    #uploaded-files h2 {
      color: #311b70;
      margin-bottom: 20px;
      font-weight: 600;
    }

    #uploaded-files ul {
      list-style: none;
      padding: 0;
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
    }

    #uploaded-files li {
      background: #d9ccff;
      border-radius: 12px;
      padding: 12px 20px;
      box-shadow: 0 3px 8px rgba(101, 79, 255, 0.2);
      flex: 1 1 180px;
      max-width: 220px;
      text-align: center;
      position: relative;
    }

    #uploaded-files a {
      color: #311b70;
      font-weight: 600;
      text-decoration: none;
      display: block;
      word-break: break-word;
    }

    #uploaded-files a:hover {
      text-decoration: underline;
    }

    /* Tombol hapus kecil */
    .delete-btn {
      position: absolute;
      top: 8px;
      right: 8px;
      background: #b00020;
      color: white;
      border: none;
      border-radius: 50%;
      width: 24px;
      height: 24px;
      font-weight: bold;
      cursor: pointer;
      font-size: 16px;
      line-height: 20px;
      text-align: center;
      transition: background-color 0.3s ease;
    }

    .delete-btn:hover {
      background: #ff4444;
    }

    @media (max-width: 1200px) {
      .container {
        grid-template-columns: repeat(3, 1fr);
        gap: 20px 25px;
      }
    }

    @media (max-width: 768px) {
      .container {
        grid-template-columns: repeat(2, 1fr);
        gap: 18px 20px;
      }
    }

    @media (max-width: 480px) {
      .container {
        grid-template-columns: 1fr;
        gap: 15px 0;
      }

      #upload-section,
      .btn-back,
      h1,
      #isi-buku,
      #uploaded-files {
        padding: 0 15px;
      }

      #uploaded-files li {
        max-width: 100%;
        flex-basis: 100%;
      }
    }
  </style>
</head>

<body>
  <a href="home1.php" class="btn-back" title="Kembali ke Halaman Awal">← Kembali ke Halaman Awal</a>

  <h1>Perpustakaan Bugar</h1>

  <main class="container">

    <a href="buku1.php" class="judul-cerita">Misteri Kunci Tua di Loteng Sekolah</a>
    <a href="buku2.php" class="judul-cerita">Aplikasi Misterius di Smartphone Baru</a>
    <a href="buku3.php" class="judul-cerita">Rahasia Di Balik Jam Dinding Kuno</a>
    <a href="buku4.php" class="judul-cerita">Jejak Rahasia di Hutan Sekolah</a>
    <a href="buku5.php" class="judul-cerita">Pesan dari Buku Tua</a>
    <a href="buku6.php" class="judul-cerita">Kode Rahasia di Buku Harian</a>
    <a href="buku7.php" class="judul-cerita">Petualangan di Labirin Sekolah</a>
    <a href="buku8.php" class="judul-cerita">Surat Misterius dari Masa Lalu</a>
    <a href="buku9.php" class="judul-cerita">Surat untuk Ayah dan Ibu</a>
    <a href="buku10.php" class="judul-cerita">Pelajaran dari Pelukan Ayah</a>

  </main>

  <section id="uploaded-files">
    <h2>Buku PDF Terupload</h2>
    <?php if (count($uploadedFiles) > 0): ?>
      <ul>
        <?php foreach ($uploadedFiles as $pdf): ?>
          <li>
            <a href="uploads/<?= htmlspecialchars($pdf) ?>" target="_blank" rel="noopener noreferrer">
              <?= htmlspecialchars($pdf) ?>
            </a>
            <form method="get" style="display:inline;">
              <input type="hidden" name="delete" value="<?= htmlspecialchars($pdf) ?>" />
              <button type="submit" class="delete-btn" title="Hapus file ini"
                onclick="return confirm('Yakin ingin menghapus file ini?')">&times;</button>
            </form>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php else: ?>
      <p style="color:#6e4cff; font-style: italic;">Belum ada file PDF yang diupload.</p>
    <?php endif; ?>
  </section>

  <section id="upload-section">
    <form method="post" enctype="multipart/form-data">
      <label for="upload-buku" id="upload-label" title="Upload file buku cerpen (.pdf)">
        📚 Upload Buku Cerpen Kamu di Sini (File .pdf)
      </label><br />
      <input type="file" id="upload-buku" name="upload_buku" accept=".pdf" required />
      <br /><br />
      <button type="submit" class="btn-back"
        style="border-radius: 15px; width: 100%; max-width: 400px; margin: 0 auto;">
        Upload
      </button>
    </form>

    <?php if ($uploadSuccess): ?>
      <p class="message"><?= htmlspecialchars($uploadSuccess) ?></p>
    <?php endif; ?>

    <?php if ($uploadError): ?>
      <p class="error"><?= htmlspecialchars($uploadError) ?></p>
    <?php endif; ?>
  </section>
</body>

</html>