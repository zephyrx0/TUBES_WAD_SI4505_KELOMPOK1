<?php
require 'function.php';

if (isset($_POST["register"])) {
    
  if (daftar($_POST) > 0) {
      echo "
      <script>
      alert('BERHASIL DAFTAR')
      document.location.href = 'loginuser.php';
      </script>
      ";
  }else {
      echo mysqli_error($koneksi);
  }
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
     <div class=" container left-side">
      <!-- Konten sisi kiri di sini -->
      <div class="container justify-content-center text-center mt-5 pt-5" id="tulisankiri">
        <h1 class="fw-bold text-white ">One Of Us?</h1>
        <h3 class="text-white fst-italic">
        if you already has an account,
        just sign in, We’ve miss you!
        </h3>
        <a  href="loginuser.php" class="btn  btn-lg btn-warning text-white mt-3 " role="button" id="tombol">Sign in</a>
      </div>
    </div>
    <div class="right-side">
      <!-- Konten sisi kanan di sini -->
      <div class="container justify-content-center text-center mt-5 pt-5" id="tulisankanan">
        <h1 class="fw-bold" style="color: #2F5231;">Time To Feel Like Home,</h1>
        <form class="mx-auto mt-0" action="" method="post">
            <div class="mb-3 mt-2 justify-content-center text-center">
              <label for="username" class="form-label">USERNAME</label>
              <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="mb-3 mt-2 justify-content-center text-center">
              <label for="email" class="form-label">EMAIL</label>
              <input type="text" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3 justify-content-center text-center">
              <label for="password" class="form-label">PASSWORD</label>
              <input type="password" class="form-control" id="password" name="password">
              
            </div>
            <div class="mb-3 justify-content-center text-center">
              <label for="password2" class="form-label">CONFIRM PASSWORD</label>
              <input type="password" class="form-control" id="password2" name="password2">
              
            </div>
            <div class="container justify-content-center text-center">
            <button type="submit" class="btn btn-warning text-white mt-2" name = "register"  id="tombol">Sign up</button>
            
            </div>
          </form>

      </div>
      
    </div>
    </div>

</body>
</html>