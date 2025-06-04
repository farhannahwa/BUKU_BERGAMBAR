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

// Proses login
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $email = $_POST["email"];
  $password = $_POST["password"];

  $stmt = $conn->prepare("SELECT id, fullname, password FROM users WHERE email = ?");
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
      session_start();
      $_SESSION["user_id"] = $user["id"];
      $_SESSION["fullname"] = $user["fullname"];
      header("Location: home1.php");
      exit;
    } else {
      $error = "Password salah!";
    }
  } else {
    $error = "Email tidak ditemukan!";
  }

  $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - BUGAR</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
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
    <h2>Masuk ke BUGAR</h2>
    <?php if (isset($error))
      echo "<p class='error'>$error</p>"; ?>
    <form method="post">
      <label for="email">Email</label>
      <input type="email" name="email" required placeholder="contoh@email.com">

      <label for="password">Password</label>
      <input type="password" name="password" required placeholder="********">

      <button type="submit">Masuk</button>
    </form>
    <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>
  </div>
</body>

</html>