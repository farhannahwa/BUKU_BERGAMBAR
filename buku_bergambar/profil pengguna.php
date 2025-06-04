<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>BUGAR - Login & Register</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <style>
    /* --- GAYA CSS TETAP SAMA --- */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #c0d6df, #8da9c4);
      color: #3a2e2e;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
    }

    .container {
      background-color: #fff;
      max-width: 900px;
      width: 100%;
      border-radius: 25px;
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
      padding: 40px;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 40px;
    }

    .form-box {
      flex: 1 1 400px;
      background: linear-gradient(180deg, #6b4f4f, #8f6f6f);
      border-radius: 20px;
      padding: 40px 30px;
      color: #f5f0f0;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
      position: relative;
      transition: opacity 0.4s ease, transform 0.4s ease;
    }

    h2 {
      font-weight: 600;
      font-size: 28px;
      margin-bottom: 25px;
      text-align: center;
      letter-spacing: 3px;
      text-transform: uppercase;
      text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.4);
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    label {
      font-weight: 500;
      font-size: 16px;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
      padding: 12px 15px;
      border-radius: 12px;
      border: none;
      font-size: 16px;
      outline: none;
    }

    input:focus {
      box-shadow: 0 0 8px #d9b382;
    }

    button {
      padding: 14px 0;
      background-color: #d9b382;
      border: none;
      border-radius: 50px;
      font-weight: 600;
      font-size: 18px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      color: #6b4f4f;
    }

    button:hover {
      background-color: #6b4f4f;
      color: #f5f0f0;
    }

    .toggle-link {
      display: block;
      margin-top: 10px;
      text-align: center;
      color: #d9b382;
      cursor: pointer;
      font-weight: 600;
      text-decoration: underline;
    }

    .back-button {
      margin-top: 15px;
      width: 100%;
      padding: 12px 0;
      background-color: transparent;
      border: 2px solid #d9b382;
      border-radius: 50px;
      font-weight: 600;
      font-size: 16px;
      color: #d9b382;
      cursor: pointer;
    }

    .back-button:hover {
      background-color: #d9b382;
      color: #6b4f4f;
    }

    .hidden {
      opacity: 0;
      transform: translateY(20px);
      pointer-events: none;
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
    }

    @media (max-width: 900px) {
      .container {
        flex-direction: column;
        padding: 20px;
      }

      .form-box {
        width: 100%;
        position: relative;
        opacity: 1 !important;
        transform: none !important;
        pointer-events: auto !important;
      }
    }
  </style>
</head>

<body>
  <div class="container">
    <!-- Login Form -->
    <div id="login-box" class="form-box">
      <h2>Login</h2>
      <form id="login-form" action="login.php" method="post">
        <label for="login-email">Email</label>
        <input type="email" id="login-email" name="email" placeholder="Masukkan email" required />
        <label for="login-password">Password</label>
        <input type="password" id="login-password" name="password" placeholder="Masukkan password" required />
        <button type="submit">Masuk</button>
      </form>
      <button type="button" class="back-button" onclick="location.href='home.php'">Kembali ke Beranda</button>
      <span class="toggle-link" id="to-register">Belum punya akun? Daftar di sini</span>
    </div>

    <!-- Register Form -->
    <div id="register-box" class="form-box hidden">
      <h2>Register</h2>
      <form id="register-form" action="register.php" method="post">
        <label for="register-name">Nama Lengkap</label>
        <input type="text" id="register-name" name="fullname" placeholder="Masukkan nama lengkap" required />
        <label for="register-email">Email</label>
        <input type="email" id="register-email" name="email" placeholder="Masukkan email" required />
        <label for="register-password">Password</label>
        <input type="password" id="register-password" name="password" placeholder="Buat password" required />
        <label for="register-password-confirm">Konfirmasi Password</label>
        <input type="password" id="register-password-confirm" placeholder="Ulangi password" required />
        <button type="submit">Daftar</button>
      </form>
      <button type="button" class="back-button" onclick="location.href='index.php'">Kembali ke Beranda</button>
      <span class="toggle-link" id="to-login">Sudah punya akun? Masuk di sini</span>
    </div>
  </div>

  <script>
    const loginBox = document.getElementById('login-box');
    const registerBox = document.getElementById('register-box');
    const toRegister = document.getElementById('to-register');
    const toLogin = document.getElementById('to-login');

    toRegister.addEventListener('click', () => {
      loginBox.classList.add('hidden');
      registerBox.classList.remove('hidden');
    });

    toLogin.addEventListener('click', () => {
      registerBox.classList.add('hidden');
      loginBox.classList.remove('hidden');
    });

    document.getElementById('register-form').addEventListener('submit', (e) => {
      const pwd = document.getElementById('register-password').value;
      const pwdConfirm = document.getElementById('register-password-confirm').value;
      if (pwd !== pwdConfirm) {
        e.preventDefault();
        alert('Password dan konfirmasi password tidak cocok!');
      }
    });
  </script>
</body>

</html>