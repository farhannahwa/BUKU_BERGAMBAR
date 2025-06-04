<?php
// session_start(); // Tambahkan jika diperlukan
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Profil Pembuat BUGAR</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #c0d6df, #8da9c4);
      margin: 0;
      padding: 40px 20px;
      display: flex;
      justify-content: center;
      align-items: flex-start;
      min-height: 100vh;
    }

    .container {
      background-color: #fff;
      max-width: 800px;
      width: 100%;
      border-radius: 20px;
      padding: 40px;
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
    }

    h1 {
      text-align: center;
      color: #4b3a3a;
      font-size: 32px;
      margin-bottom: 30px;
      letter-spacing: 2px;
    }

    h2 {
      color: #5a3c3c;
      font-size: 20px;
      border-bottom: 2px solid #5a3c3c;
      padding-bottom: 5px;
      margin-bottom: 20px;
    }

    .profile {
      display: flex;
      justify-content: space-between;
      margin-bottom: 30px;
      gap: 20px;
    }

    .biodata {
      flex: 1;
    }

    .biodata ul {
      list-style: none;
      padding: 0;
    }

    .biodata li {
      margin-bottom: 8px;
    }

    .photo {
      flex-shrink: 0;
    }

    .photo img {
      width: 200px;
      height: 200px;
      object-fit: cover;
      border-radius: 50%;
      border: 3px solid #5a3c3c;
    }

    .back-button {
      display: inline-block;
      margin-top: 30px;
      padding: 12px 30px;
      font-weight: 600;
      font-size: 16px;
      color: #6b4f4f;
      border: 2px solid #6b4f4f;
      border-radius: 30px;
      text-decoration: none;
      transition: 0.3s ease;
    }

    .back-button:hover {
      background-color: #6b4f4f;
      color: #fff;
    }

    @media (max-width: 768px) {
      .profile {
        flex-direction: column;
        align-items: center;
        text-align: center;
      }
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>Profil Pembuat BUGAR</h1>
    <h2>Biodata Pembuat Website</h2>

    <div class="profile">
      <div class="biodata">
        <ul>
          <li><strong>Nama:</strong> Sefryan Arya Wicaksana</li>
          <li><strong>Tempat Tanggal Lahir:</strong> Magetan, 17 Juni 2003</li>
          <li><strong>Alamat:</strong> Magetan, Kab. Magetan</li>
          <li><strong>Sosial Media:</strong>
            <ul>
              <li>Instagram</li>
              <li>TikTok</li>
            </ul>
          </li>
          <li><strong>Kesibukan:</strong> Mahasiswa Bilfat, Pendidikan Bahasa Indonesia FKIP</li>
        </ul>
      </div>
      <div class="photo">
        <img src="png.JPEG " alt="Sefryan Arya Wicaksana" />
      </div>
    </div>

    <div class="profile">
      <div class="biodata">
        <ul>
          <li><strong>Nama:</strong> M.Erlangga Fardiansyah</li>
          <li><strong>Tempat Tanggal Lahir:</strong> Lamongan, 17 Juni 2003</li>
          <li><strong>Alamat:</strong> Magetan, Kab. Magetan</li>
          <li><strong>Sosial Media:</strong>
            <ul>
              <li>Instagram</li>
              <li>TikTok</li>
            </ul>
          </li>
          <li><strong>Kesibukan:</strong> Mahasiswa Bilfat, Pendidikan Bahasa Indonesia FKIP</li>
        </ul>
      </div>
      <div class="photo">
        <img src="png1.JPEG " alt="M.Erlangga Fardiansyah" />
      </div>
    </div>

    <h2>Profil Dosen Pembimbing</h2>
    <div class="profile">
      <div class="biodata">
        <ul>
          <li><strong>Nama:</strong> Risnawati</li>
          <li><strong>Tempat Tanggal Lahir:</strong> Tuban, 12 Juli 1996</li>
          <li><strong>Alamat:</strong> Desa Sobontoro, Kec. Tambakboyo, Kab. Tuban</li>
          <li><strong>Sosial Media:</strong>
            <ul>
              <li>Instagram: @risnaaofficial</li>
              <li>TikTok: @risnaaofficial</li>
            </ul>
          </li>
          <li><strong>Kesibukan:</strong> Dosen, Content Creator, Tutor Ruangguru, Tutor Universitas Terbuka</li>
        </ul>
      </div>
      <div class="photo">
        <img src="png2.png" alt="Risnawati" />
      </div>
    </div>

    <a href="home1.php" class="back-button">Kembali ke Beranda</a>
  </div>
</body>

</html>