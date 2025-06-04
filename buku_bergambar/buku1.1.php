<?php // buku1.1.php ?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Misteri Kunci Tua di Loteng Sekolah - Buku 1.1</title>
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
      justify-content: center;
      align-items: center;
    }

    .container {
      width: 90vw;
      max-width: 1100px;
      height: 90vh;
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: transparent;
      padding: 20px 40px;
    }

    .title {
      position: fixed;
      top: 30px;
      right: 30px;
      background-color: #5a2c1a;
      border-radius: 0 40px 40px 40px;
      padding: 15px 40px;
      font-weight: 700;
      font-size: 22px;
      user-select: none;
      max-width: 320px;
      text-align: center;
      line-height: 1.3;
      z-index: 10;
    }

    .text-box {
      width: 48%;
      font-size: 20px;
      line-height: 2.2;
      font-weight: 400;
      user-select: none;
      text-align: center;
    }

    .image-box {
      width: 43%;
      border-radius: 80px 80px 80px 0;
      overflow: hidden;
      box-shadow: 0 0 40px #000000cc;
      user-select: none;
    }

    .image-box img {
      width: 100%;
      height: auto;
      display: block;
      object-fit: cover;
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
      z-index: 10;
      gap: 6px;
    }

    .btn-prev>.arrow {
      font-size: 72px;
      line-height: 48px;
      font-weight: 700;
      user-select: none;
      color: #e6e6fc;
      margin-right: 6px;
    }

    .btn-prev>.line {
      font-size: 72px;
      line-height: 48px;
      font-weight: 700;
      user-select: none;
      color: #e6e6fc;
    }

    .btn-next {
      position: fixed;
      bottom: 30px;
      right: 30px;
      display: flex;
      align-items: center;
      gap: 10px;
      cursor: pointer;
      user-select: none;
      font-weight: 700;
      font-size: 48px;
      color: #dbdbf5;
      z-index: 10;
    }

    .btn-next>.line {
      font-size: 72px;
      line-height: 48px;
      font-weight: 700;
      user-select: none;
      color: #e6e6fc;
    }

    .page-indicator {
      position: fixed;
      bottom: 22px;
      right: 100px;
      width: 72px;
      height: 72px;
      border: 3px solid white;
      border-radius: 50%;
      font-weight: 700;
      font-size: 26px;
      color: white;
      text-align: center;
      line-height: 34px;
      background: transparent;
      user-select: none;
      font-family: 'Quicksand', sans-serif;
      padding-top: 6px;
      z-index: 10;
    }

    .page-indicator small {
      font-weight: 700;
      font-size: 12px;
      letter-spacing: 0.1em;
      margin-top: -6px;
      display: block;
      line-height: 1;
    }
  </style>
</head>

<body>

  <div class="container">
    <div class="image-box">
      <img src="lop2.png" alt="Nadia membuka pintu loteng" />
    </div>
    <div class="text-box">
      Ini Nadia, siswi kelas 7 yang terkenal penasaran dan pemberani, nggak percaya sama cerita-cerita horor itu. Suatu
      hari, dia sengaja naik ke loteng pas jam istirahat.
    </div>
  </div>

  <div class="title">Misteri Kunci Tua di Loteng Sekolah</div>

  <a href="buku1.php" class="btn-prev" title="Kembali ke halaman sebelumnya">
    <span class="arrow">&#x2190;</span>
    <span class="line">|</span>
  </a>

  <a href="buku1.2.php" class="btn-next" title="Lanjut ke halaman berikutnya">
    <span class="line">|</span>
    <span>&#x2794;</span>
  </a>

  <div class="page-indicator">
    2
    <small>PAGE</small>
  </div>

</body>

</html>