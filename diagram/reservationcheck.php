<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIAGRAM COFFEE & SPACE</title>
    <link rel="shortcut icon" href="img/icon diagram.png" type="image/x-icon">
    <link rel="stylesheet" href="css/reservationcheck.css">
</head>
<body>
    <?php
    include('navbaruser.php');
    ?>
    <section>
        <div class="container justify-content-center pt-5 pb-5  ">
            <h1 class="fw-bold text-center mt-5 pt-2 pb-3">Check Your Reservation Here</h1>
            <form action="" method="post">
                <div class="d-flex justify-content-center pt-4">
                    <input class="form-control form-control-lg w-50 p-2 " type="text" placeholder="ENTER YOUR TELEPHONE NUMBER" aria-label=".form-control-lg example">
                    <button type="button" class="btn btn-lg ms-3" id="tombol">Search</button>
                </div>
                </form>
        </div>
    </section>
    <section>
        <div class="container justify-content-center pt-5 pb-5 vh-100">
        <h1 class="fw-bold fs-3 text-center mt-5 pt-2 pb-3">RESERVASI AKTIF</h1>
        </div>
    </section>

    
</body>
</html>