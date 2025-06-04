<?php
// Jika Anda perlu menggunakan session atau auth, bisa mulai session di sini
// session_start();
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>BUGAR - Buku Bergambar Interaktif</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background: linear-gradient(to bottom right, #f3e8ff, #d9c6ff);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .container {
      display: flex;
      border-radius: 20px;
      overflow: hidden;
      max-width: 900px;
      width: 100%;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      background-color: #faf5ff;
      /* ungu very soft */
    }

    .left-section {
      background-color: #b59fff;
      /* ungu soft */
      color: #3e2766;
      /* ungu tua lembut */
      flex: 1;
      padding: 40px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .left-section p.subtitle {
      font-style: italic;
      font-size: 14px;
      color: #d8c8f9;
      margin-bottom: 20px;
    }

    .left-section img.logo {
      width: 120px;
      margin-bottom: 20px;
      filter: brightness(95%);
    }

    .left-section h1 {
      font-size: 36px;
      margin-bottom: 10px;
      letter-spacing: 3px;
      color: #311b70;
    }

    .left-section p.tagline {
      font-size: 14px;
      letter-spacing: 2px;
      color: #5e4b8b;
    }

    .right-section {
      background-color: #f9f5ff;
      /* putih keungu-unguan */
      flex: 1;
      padding: 40px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      color: #4b3b71;
    }

    .right-section .description {
      border: 2px solid #b59fff;
      border-radius: 15px;
      padding: 20px;
      text-align: center;
      font-size: 14px;
      color: #4b3b71;
      margin-bottom: 40px;
      background-color: #eae0ff;
      /* latar belakang deskripsi */
    }

    .right-section a.button {
      text-decoration: none;
      padding: 14px 30px;
      border-radius: 30px;
      border: 3px solid #b59fff;
      font-weight: bold;
      font-size: 18px;
      color: #4b3b71;
      transition: 0.3s;
      margin-bottom: 15px;
    }

    .right-section a.button:hover {
      background-color: #b59fff;
      color: #fff;
    }

    @media (max-width: 768px) {
      .container {
        flex-direction: column;
      }

      .left-section,
      .right-section {
        padding: 30px;
      }
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="left-section">
      <p class="subtitle">since 2025</p>
      <img src="pit.png" alt="pit.png" class="logo" />
      <h1>BUGAR</h1>
      <p class="tagline">BUKU BERGAMBAR</p>
    </div>
    <div class="right-section">
      <div class="description">
        Buku bergambar ini digunakan untuk memudahkan pemahaman materi atau cerita dengan menggabungkan gambar dan teks,
        sehingga membuat pembelajaran lebih menarik dan mudah dimengerti.
      </div>
      <a href="login.php" class="button">Masuk</a>
    </div>
  </div>
</body>

</html>