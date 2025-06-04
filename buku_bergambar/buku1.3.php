<?php // buku1.3.php ?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Misteri Kunci Tua di Loteng Sekolah - Buku 1.3</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Quicksand&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background-color: #18200f;
      font-family: 'Quicksand', sans-serif;
      color: #f9f9f9;
      height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 40px 20px 80px;
    }

    .title {
      background-color: #5a2c1a;
      border-radius: 40px 40px 0 0;
      padding: 15px 40px;
      font-weight: 700;
      font-size: 22px;
      user-select: none;
      max-width: 420px;
      text-align: center;
      margin-bottom: 30px;
      /* Buat judul di tengah, jadi hapus align-self */
    }

    .image-box {
      width: 600px;
      max-width: 90vw;
      height: auto;
      border-radius: 80px 80px 80px 80px;
      overflow: hidden;
      box-shadow: 0 0 40px #000000cc;
      user-select: none;
      margin-bottom: 40px;
    }

    .image-box img {
      width: 100%;
      height: auto;
      display: block;
      object-fit: cover;
    }

    .content {
      font-size: 20px;
      line-height: 2.2;
      font-weight: 400;
      user-select: none;
      max-width: 900px;
      text-align: center;
      padding: 0 10px;
    }

    .btn-prev {
      position: fixed;
      bottom: 30px;
      left: 30px;
      display: flex;
      align-items: center;
      cursor: pointer;
      user-select: none;
      font-weight: 700;
      font-size: 48px;
      color: #dbdbf5;
      gap: 6px;
      z-index: 10;
      text-decoration: none;
    }

    .btn-prev>.line {
      font-size: 72px;
      line-height: 48px;
      font-weight: 700;
      user-select: none;
      margin-right: 6px;
      color: #e6e6fc;
    }

    .btn-next {
      position: fixed;
      bottom: 30px;
      right: 30px;
      display: flex;
      align-items: center;
      cursor: pointer;
      user-select: none;
      font-weight: 700;
      font-size: 48px;
      color: #dbdbf5;
      gap: 6px;
      z-index: 10;
      text-decoration: none;
    }

    .btn-next>.line {
      font-size: 72px;
      line-height: 48px;
      font-weight: 700;
      user-select: none;
      margin-right: 6px;
      color: #e6e6fc;
    }

    .page-indicator {
      position: fixed;
      bottom: 30px;
      left: 50%;
      transform: translateX(-50%);
      width: 72px;
      height: 72px;
      border: 3px solid white;
      border-radius: 50%;
      font-weight: 700;
      font-size: 26px;
      color: white;
      text-align: center;
      background: transparent;
      user-select: none;
      font-family: 'Quicksand', sans-serif;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding-top: 0;
      z-index: 10;
      cursor: default;
    }

    .page-indicator>.number {
      font-size: 28px;
      line-height: 1;
      margin: 0;
    }

    .page-indicator>small {
      font-weight: 700;
      font-size: 12px;
      letter-spacing: 0.1em;
      margin-top: 2px;
      text-transform: uppercase;
    }
  </style>
</head>

<body>

  <div class="title">Misteri Kunci Tua di Loteng Sekolah</div>

  <div class="image-box">
    <img src="lop4.png" alt="Nadia dan teman-temannya melihat peta kuno" />
  </div>

  <div class="content">
    Di dalam kotak, ternyata ada sebuah peta kuno yang menggambarkan sekolah dengan tanda misterius di suatu sudut
    halaman belakang. Nadia pun memutuskan untuk menyelidiki bersama teman-temannya: Raka yang jago teknologi dan Sari
    yang pintar sejarah.
  </div>

  <a href="buku1.2.php" class="btn-prev" title="Kembali ke halaman sebelumnya">
    <span class="line">|</span>
    <span>&#x2190;</span>
  </a>

  <a href="buku.php" class="btn-next" title="Kembali ke halaman awal">
    <span class="line">|</span>
    <span>&#x2794;</span>
  </a>

  <div class="page-indicator">
    <p class="number">4</p>
    <small>PAGE</small>
  </div>

</body>

</html>