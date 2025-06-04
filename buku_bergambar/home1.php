<?php
// Bisa ditambahkan autentikasi atau session di sini jika dibutuhkan
// session_start();
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>BUGAR - Buku Bergambar Interaktif</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #e6e0ff, #b59fff);
      color: #3a2e2e;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
    }

    .container {
      background-color: #faf5ff;
      max-width: 900px;
      width: 100%;
      border-radius: 25px;
      box-shadow: 0 12px 30px rgba(62, 39, 102, 0.15);
      display: flex;
      overflow: hidden;
      flex-wrap: wrap;
    }

    .left {
      flex: 1 1 400px;
      background: linear-gradient(180deg, #8d6eff, #b59fff);
      color: #f5f0f0;
      padding: 50px 40px;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      gap: 20px;
    }

    .subtitle {
      font-weight: 400;
      font-size: 14px;
      letter-spacing: 2px;
      text-transform: lowercase;
      opacity: 0.75;
      font-style: italic;
      color: #d8c8f9;
    }

    .logo {
      width: 200px;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(62, 39, 102, 0.4);
    }

    h1 {
      font-weight: 600;
      font-size: 48px;
      letter-spacing: 6px;
      text-shadow: 1px 1px 5px rgba(49, 27, 112, 0.5);
      margin-top: 10px;
      font-family: 'Poppins', sans-serif;
      color: #311b70;
    }

    .tagline {
      font-weight: 400;
      font-size: 16px;
      letter-spacing: 4px;
      opacity: 0.9;
      text-transform: uppercase;
      margin-bottom: 20px;
      color: #5e4b8b;
    }

    .ornament {
      border-top: 3px solid #b59fff;
      width: 80%;
      margin-top: auto;
      border-radius: 2px;
      box-shadow: 0 2px 4px #8d6eff;
    }

    .right {
      flex: 1 1 350px;
      padding: 60px 40px;
      background-color: #f9f5ff;
      display: flex;
      flex-direction: column;
      justify-content: center;
      gap: 40px;
    }

    .button-group {
      display: flex;
      flex-direction: column;
      gap: 25px;
      width: 100%;
    }

    .menu-button {
      padding: 18px 0;
      text-align: center;
      font-weight: 600;
      font-size: 20px;
      color: #6e4cff;
      text-decoration: none;
      border: 3px solid #6e4cff;
      border-radius: 50px;
      transition: all 0.3s ease;
      box-shadow: inset 0 0 0 0 #6e4cff;
      cursor: pointer;
    }

    .menu-button:hover {
      color: #fff;
      background-color: #6e4cff;
      box-shadow: inset 200px 0 0 0 #6e4cff;
    }

    @media (max-width: 768px) {
      .container {
        flex-direction: column;
        padding: 20px;
      }

      .left,
      .right {
        flex: unset;
        width: 100%;
        padding: 40px 20px;
      }

      h1 {
        font-size: 36px;
      }

      .menu-button {
        font-size: 18px;
        padding: 16px 0;
      }
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="left">
      <p class="subtitle">since 2025</p>
      <img src="pit.png" alt="pit.png" class="logo" />
      <h1>BUGAR</h1>
      <p class="tagline">BUKU BERGAMBAR</p>
      <div class="ornament"></div>
    </div>

    <div class="right">
      <div class="button-group">
        <a href="buku.php" class="menu-button">BUKU BERGAMBAR</a>
        <a href="quiz.php" class="menu-button">QUIZ & TUGAS</a>
        <a href="glosarium.php" class="menu-button">GLOSARIUM</a>
        <a href="more.php" class="menu-button">MORE</a>
        <a href="keluar.php" class="menu-button">KELUAR</a>
      </div>
    </div>
  </div>
</body>

</html>