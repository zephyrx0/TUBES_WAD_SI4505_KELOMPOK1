<?php
require 'function.php';

session_start();

if (isset($_SESSION["login"])) {
  header("location: reservasi.php");
  exit;
}


if (isset($_POST["signin"])) {
  
  $user = $_POST["username"];
  $pass = $_POST["password"];

  $hasil = mysqli_query($koneksi,"SELECT * FROM user WHERE username = '$user'");

  if (mysqli_num_rows($hasil) === 1) {

      $row = mysqli_fetch_assoc($hasil);

      if ($pass === $row["password"]) {
          // pembuatan session login
          $_SESSION["loginuser"] = true;
          // pembuatan session username
          $_SESSION["username"] = $user;
          header("location: reservasi.php");

          exit;
      }
      
  }
  $error = true;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIAGRAM COFFEE</title>
    <link rel="shortcut icon" href="img/icon diagram.png" type="image/x-icon">
    <link rel="stylesheet" href="css/regisuser.css">
</head>
<body>
    <?php
    include ('navbar.php');
    ?>
    <div class="d-flex">
     <div class=" container right-side">
      <!-- Konten sisi kiri di sini -->
      <div class="container justify-content-center text-center mt-5 pt-5" id="tulisankanan">
        <h1 class="fw-bold" style="color: #2F5231;">Welcome Back,</h1>
        <?php if (isset($error)) :?>
        <p class="fs-5 text-danger"><br>USERNAME / PASSWORD SALAH</p>
    <?php endif; ?>
        <form class="mx-auto mt-0" action="" method="post">
            <div class="mb-3 mt-2 justify-content-center text-center">
              <label for="username" class="form-label">USERNAME</label>
              <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="mb-3 justify-content-center text-center">
              <label for="password" class="form-label">PASSWORD</label>
              <input type="password" class="form-control" id="password" name="password">
              
            </div>

            <div class="container justify-content-center text-center">
            <button type="submit" class="btn btn-warning text-white mt-2" id="tombol" name="signin">Sign in</button>
            
            </div>
          </form>

      </div>

    </div>
    <div class="left-side">
      <!-- Konten sisi kanan di sini -->
      <div class="container justify-content-center text-center mt-5 pt-5" id="tulisankiri">
        <h1 class="fw-bold text-white ">New Here?</h1>
        <h3 class="text-white fst-italic">
        Sign up and discover a great
        amount of oppertunities
        </h3>
        <a  href="registrasiuser.php" class="btn  btn-lg btn-warning text-white mt-3 " role="button" id="tombol">Sign up</a>
      </div>
      
    </div>
    </div>

</body>
</html>