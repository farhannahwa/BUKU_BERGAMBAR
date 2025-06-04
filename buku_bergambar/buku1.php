<?php // buku1.php ?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Misteri Kunci Tua di Loteng Sekolah - Buku 1</title>
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

    .text-box {
      width: 47%;
      display: flex;
      flex-direction: column;
    }

    .title {
      background-color: #5a2c1a;
      border-radius: 40px 0 40px 40px;
      padding: 15px 40px;
      font-weight: 700;
      font-size: 22px;
      width: fit-content;
      margin-bottom: 40px;
      user-select: none;
      align-self: flex-start;
    }

    .content {
      font-size: 20px;
      line-height: 2.2;
      font-weight: 400;
      user-select: none;
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

    .btn-next {
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
      right: 20px;
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
    <div class="text-box">
      <div class="title">Misteri Kunci Tua di Loteng Sekolah</div>
      <div class="content">
        "Di sebuah sekolah menengah pertama di pinggir kota, ada sebuah bangunan tua yang jarang sekali dimasuki oleh
        murid—loteng di atap gedung utama. Semua orang bilang, loteng itu angker dan penuh rahasia."
      </div>
    </div>
    <div class="image-box">
      <img src="lop1.png" alt="Loteng Sekolah" />
    </div>
  </div>

  <a href="buku1.1.php" class="btn-next" title="Lanjut ke halaman berikutnya">
    <span class="line">|</span>
    <span>&#x2794;</span>
  </a>

  <div class="page-indicator">
    1
    <small>PAGE</small>
  </div>

</body>

</html>