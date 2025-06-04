<?php
// Koneksi ke database
$host = "localhost";
$user = "root";
$pass = "";
$db = "buku_bergambar";

$conn = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

// Proses registrasi
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $fullname = trim($_POST["fullname"]);
  $username = trim($_POST["username"]);
  $email = trim($_POST["email"]);
  $password = trim($_POST["password"]);
  $passwordConfirm = trim($_POST["password_confirm"]);

  if (empty($fullname) || empty($username) || empty($email) || empty($password) || empty($passwordConfirm)) {
    $error = "Semua field wajib diisi!";
  } elseif ($password !== $passwordConfirm) {
    $error = "Konfirmasi password tidak cocok!";
  } else {
    $check = $conn->prepare("SELECT id FROM users WHERE username = ? OR email = ?");
    $check->bind_param("ss", $username, $email);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
      $error = "Username atau email sudah terdaftar!";
    } else {
      $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
      $stmt = $conn->prepare("INSERT INTO users (fullname, username, email, password) VALUES (?, ?, ?, ?)");
      $stmt->bind_param("ssss", $fullname, $username, $email, $hashedPassword);
      if ($stmt->execute()) {
        $success = "Registrasi berhasil! Silakan login.";
      } else {
        $error = "Terjadi kesalahan saat menyimpan data.";
      }
      $stmt->close();
    }
    $check->close();
  }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register - BUGAR</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to right, #f3e8ff, #d9c6ff);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .form-box {
      background: #faf5ff;
      border-radius: 20px;
      padding: 40px 30px;
      width: 100%;
      max-width: 400px;
      box-shadow: 0 20px 50px rgba(62, 39, 102, 0.1);
      text-align: center;
    }

    .form-box h2 {
      margin-bottom: 25px;
      color: #311b70;
    }

    .form-box label {
      display: block;
      text-align: left;
      margin-bottom: 8px;
      color: #5e4b8b;
      font-weight: 500;
    }

    .form-box input {
      width: 100%;
      padding: 12px;
      margin-bottom: 20px;
      border-radius: 10px;
      border: 1px solid #b59fff;
      transition: border-color 0.3s;
    }

    .form-box input:focus {
      border-color: #8d6eff;
      outline: none;
    }

    .form-box button {
      background-color: #8d6eff;
      color: white;
      padding: 12px;
      border: none;
      border-radius: 10px;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .form-box button:hover {
      background-color: #6e4cff;
    }

    .form-box .error {
      color: #b00020;
      margin-bottom: 15px;
    }

    .form-box .success {
      color: #2e7d32;
      margin-bottom: 15px;
    }

    .form-box a {
      color: #8d6eff;
      text-decoration: none;
    }

    .form-box a:hover {
      text-decoration: underline;
    }

    @media (max-width: 480px) {
      .form-box {
        padding: 30px 20px;
      }
    }
  </style>
</head>

<body>
  <div class="form-box">
    <h2>Daftar Akun BUGAR</h2>
    <?php
    if (isset($error))
      echo "<p class='error'>$error</p>";
    if (isset($success))
      echo "<p class='success'>$success</p>";
    ?>
    <form method="post">
      <label for="fullname">Nama Lengkap</label>
      <input type="text" name="fullname" required>

      <label for="username">Username</label>
      <input type="text" name="username" required>

      <label for="email">Email</label>
      <input type="email" name="email" required>

      <label for="password">Password</label>
      <input type="password" name="password" required>

      <label for="password_confirm">Konfirmasi Password</label>
      <input type="password" name="password_confirm" required>

      <button type="submit">Daftar</button>
    </form>
    <p>Sudah punya akun? <a href="login.php">Masuk di sini</a></p>
  </div>
</body>

</html>