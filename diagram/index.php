<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIAGRAM COFEE & SPACE</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" href="img/icon diagram.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    
</head>

<body>
    <!-- navbar -->
<?php if (isset($_SESSION["loginuser"])) {
    include('navbaruser.php');
    
}else {
    include('navbar.php');
    
}
?>
    
    <!-- landing 1 -->
    <section id="seksi1">
        <div class="container justify-content-center text-center " id="tulisanseksi1">
            <h1 class="fw-bold text-light ">Welcome to Diagram Coffee & Space.</h1>
            <a  href="reservasi.php" class="btn  btn-lg btn-warning text-white mt-2 " role="button">Take a look</a>
        </div>

    </section>
    <!-- landing 2 -->

    <section id="seksi2">
        <div class="container pb-5">
            <div class="d-flex ">
            <div class=" text-center mt-4 pt-4">
                <div class="row row-cols-2" >
                  <div class="col  mb-5">
                    <img src="img/menulanding.png" alt="apel" height="200px" width="200px">
                    
                  </div>
                  <div class="col">
                    <img src="img/menulanding2.png" alt="apel" height="200px" width="200px">

                  </div>
                  <div class="col">
                    <img src="img/menulanding3.png" alt="apel" height="200px" width="200px">

                  </div>
                  <div class="col">
                    <img src="img/menulanding4.png" alt="apel" height="200px" width="200px">

                  </div>
                </div>
              </div>
              
              
  
            <div class="container mt-5 pt-5 text-center ps-3">
                <h1 class="fw-bold" style="color: #2F5231;">Diagram coffee & space.</h1>
                <h4 style="color: #2F5231;"> Cozy Working Space</h4>
                <p style="color: #2F5231;" class="pt-5 mb-5">Kami menawarkan berbagai macam menu makanan dan minuman, Mulai dari hidangan pembuka, makanan utama dan hidangan penutup</p>
                <div class="justify-content-center text-center">
                    <a  href="#" class="btn btn-outline-success  mt-2 " role="button" >See details</a>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- landing 3 -->
    <section id="seksi3">
        <div class="container " id="tulisanseksi3">
            <h1 class="fw-bold text-light ">Sharing With Coffee.</h1>
            <p class="text-light">"Nikmati Cita rasa kopi yang berkualitas dan suasana yang nyaman"</p>
            <a  href="#" class="btn btn-outline-light ms-3 " role="button">See menus</a>
        </div>

    </section>
    <!-- landing 4 -->
    <section id="seksi4" >
        <div class="justify-content-center text-center" id="tulisanseksi4">
            <h2 class="fw-bold pt-5" id="seksi4h1">Table Reservation</h2>
            <h4 style="color: #2F5231;"> Cozy Working Space</h4>
            <a  href="#" class="btn btn-outline-success  mt-2" role="button" >See details</a>
        </div>

    </section>

    <!-- landing 5 -->
    <section id="seksi5">
 
          <img src="img/IMG_8927.jpg" class=" float-start w-25" alt="...">
          <img src="img/IMG_6943.jpg" class=" float-start w-25" alt="...">
          <img src="img/IMG_7012.jpg" class=" float-start w-25" alt="...">
          <img src="img/IMG_8987.jpg" class=" float-start w-25" alt="...">
    </section>
    <section id="footer">
    <?php 
    include 'footer.php';
    ?>
    </section>
    
       


    <!-- Boostrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>
