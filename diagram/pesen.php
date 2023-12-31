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
    <link rel="stylesheet" href="css/pesan.css">
    
</head>
<body>
    <?php include('navbaruser.php');?>
<!-- seksi 1 -->
    <section id="seksi1">
        <div class="container">
            <div class="tulisan pt-5 ">
            <h1 class="fw-bold text-white">Enjoy A Moment With Coffee</h1>
            <p class="text-white fs-2">Tempat yang tepat untuk bersantai <br> dan menikmati kopi bersama <br> teman atau keluarga</p>
            </div>  
        </div>
    </section>

<!-- seksi 2 -->

    <section id="seksi2">
        <div class="container justify-content-center text-center">
            <div class="tulisan2 pt-5 ">
                <h2 class="fw-bold" style="color : #2F5231">Have you already reserved your place?</h2>
                <a href="reservationcheck.php"><button type="button" class="btn btn-lg mt-3" id="tombol">Click Here</button></a>
            </div>
        </div>
        <div class="container pt-5 mt-5">
        <h3 class="fw-bold pb-4" style="color : #2F5231">Floor & Room Type</h3>
        <form action="" method="post">
            <div class="d-flex">
            <h5 class="fw-bold fs-4 pe-3" style="color : #2F5231">Input Date</h5>
            <input class="form-control form-control-sm w-25 ps-5" type="date">
            </div>

        </form>
        </div>
        <div class="container pt-5 mt-5">
        <div class="d-flex align-items-center justify-content-center" id="ruangan">
        <div id="card1" class="d-flex">
            <div id="kiri">
                <h4 class="fw-bold" style="color : #2F5231" >1st Floor - Indoor</h4>
                <div id="img-card1">
                    <img src="img/logo.png" alt="">
                </div>
            </div>

            <div id="kanan">
                <h4 class="fw-bold">1st Floor - Indoor</h4>
                <h5 class="fw-bold">Reschedule allowed</h5>
                <p>Free Wi-Fi</p>
                <p>Non-Smoking Room</p>
                <p>AC</p>
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modal1sti">Book</button>
            </div>
        </div>
    </div>
        </div>
        <div class="container pt-5 mt-5">
        <div class="d-flex align-items-center justify-content-center" id="ruangan">
        <div id="card1" class="d-flex">
            <div id="kiri">
                <h4 class="fw-bold" style="color : #2F5231" >2nd Floor - Indoor</h4>
                <div id="img-card1">
                    <img src="img/logo.png" alt="">
                </div>
            </div>

            <div id="kanan">
                <h4 class="fw-bold">2nd Floor - Indoor</h4>
                <h5 class="fw-bold">Reschedule allowed</h5>
                <p>Free Wi-Fi</p>
                <p>Non-Smoking Room</p>
                <p>AC</p>
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modal2ndi">Book</button>
            </div>
        </div>
    </div>
        </div>
        <div class="container pt-5 mt-5">
        <div class="d-flex align-items-center justify-content-center" id="ruangan">
        <div id="card1" class="d-flex">
            <div id="kiri">
                <h4 class="fw-bold" style="color : #2F5231" >2nd Floor - Outdoor</h4>
                <div id="img-card1">
                    <img src="img/logo.png" alt="">
                </div>
            </div>

            <div id="kanan">
                <h4 class="fw-bold">2nd Floor - Outdoor</h4>
                <h5 class="fw-bold">Reschedule allowed</h5>
                <p>Free Wi-Fi</p>
                <p>Non-Smoking Room</p>
                <p>AC</p>
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modal2ndo">Book</button>
            </div>
        </div>
    </div>
        </div>
        <div class="container pt-5 mt-5">
        <div class="d-flex align-items-center justify-content-center" id="ruangan">
        <div id="card1" class="d-flex">
            <div id="kiri">
                <h4 class="fw-bold" style="color : #2F5231" >3rd Floor - Indoor</h4>
                <div id="img-card1">
                    <img src="img/logo.png" alt="">
                </div>
            </div>

            <div id="kanan">
                <h4 class="fw-bold">3rd Floor - Indoor</h4>
                <h5 class="fw-bold">Reschedule allowed</h5>
                <p>Free Wi-Fi</p>
                <p>Non-Smoking Room</p>
                <p>AC</p>
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modal3rdi">Book</button>
            </div>
        </div>
    </div>
        </div>
        <div class="container pt-5 mt-5">
        <div class="d-flex align-items-center justify-content-center" id="ruangan">
        <div id="card1" class="d-flex">
            <div id="kiri">
                <h4 class="fw-bold" style="color : #2F5231" >3rd Floor - Outdoor</h4>
                <div id="img-card1">
                    <img src="img/logo.png" alt="">
                </div>
            </div>

            <div id="kanan">
                <h4 class="fw-bold">3rd Floor - Outdoor</h4>
                <h5 class="fw-bold">Reschedule allowed</h5>
                <p>Free Wi-Fi</p>
                <p>Non-Smoking Room</p>
                <p>AC</p>
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modal3rdo">Book</button>
            </div>
        </div>
    </div>
        </div>
        <div class="container pt-5 mt-5">
        <div class="d-flex align-items-center justify-content-center" id="ruangan">
        <div id="card1" class="d-flex">
            <div id="kiri">
                <h4 class="fw-bold" style="color : #2F5231" >4th Floor - Outdoor</h4>
                <div id="img-card1">
                    <img src="img/logo.png" alt="">
                </div>
            </div>

            <div id="kanan">
                <h4 class="fw-bold">4th Floor - Outdoor</h4>
                <h5 class="fw-bold">Reschedule allowed</h5>
                <p>Free Wi-Fi</p>
                <p>Non-Smoking Room</p>
                <p>AC</p>
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modal4tho">Book</button>
            </div>
        </div>
    </div>
        </div>
        <?php
    include('footer.php');
    ?>
    </section>

   

    <!-- modal lantai 1 indoor -->
    <div class="mdl">
    <div class="modal modal fade" id="modal1sti" tabindex="-1" style="background-color: #FFF9ED;">
    <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#FFF9ED;">
        <div class="container text-center">
        <h1 class="modal-title fs-2 fw-bold text-black">RESERVATION</h1>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="background-color:#FFF9ED;">
        <div class="container d-flex ">
        <div class="container text-center pt-4">
      <img src="img/IMG_8987.jpg" class="img-fluid w-75" alt="...">
      </div>
      <div class="container" >
        <h2 class="text-center fw-bold" style = "color: #2F5231">1st Floor Indoor</h2>
        <h4 class="fw-bold" style = "color: #2F5231">1st Floor - Indoor</h4>
                <h5 class="fw-bold">Reschedule allowed</h5>
                <p>Free Wi-Fi</p>
                <p>Non-Smoking Room</p>
                <p>AC</p>
                <h5 class="fw-bold" style = "color: #2F5231">Description</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla magnam tenetur ipsum tempora asperiores quae explicabo accusantium hic eaque, ut, quia obcaecati expedita distinctio maxime eos? Cupiditate perspiciatis harum velit?</p>
                <h5 class="fw-bold" style = "color: #2F5231">Terms & Condition</h5>
                <ol>
                    <li>Pembayaran biaya booking (DP) dilakukan max. H-1. DP minimal 50%.</li>
                    <li>Jika tidak ada konfirmasi di H-1 maka Diagram Coffee berhak membatalkan sepihak</li>
                    <li>Menu yang akan dipesan dapat dikirimkan via wa ke admin di H-1</li>
                    <li>Jika ada perubahan jadwal reservasi harus diinformasikan paling lambat H-1</li>
                    <li>Pembayaran dilakukan dalam 1 billing pembayaran</li>
                    <li>Dilarang membawa makanan dan minuman dari luar</li>
                    <li>Tetap mematuhi protokol Kesehatan</li>
                </ol>
                <div class="card w-100 " id="kartu" style="background-color: #FFF5E2;">
                <div class="card-body text-center">
                    <div class=" container d-flex">
                    <h3 class="card-title  fw-bold" style = "color: #2F5231">Downpayment</h3>
                    <div class="container text-center">
                    <a href="booking.php"><button type="button" class="btn text-white w-50" id="tombol">Book</button></a>
                    </div>
                    </div>
                </div>
                </div>



   
      </div>
      </div>
      </div>
    </div>
  </div>
    </div>
    
<!-- modal lantai 2 indoor -->

<div class="mdl">
    <div class="modal modal fade" id="modal2ndi" tabindex="-1" style="background-color: #FFF9ED;">
    <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#FFF9ED;">
        <div class="container text-center">
        <h1 class="modal-title fs-2 fw-bold text-black">RESERVATION</h1>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="background-color:#FFF9ED;">
        <div class="container d-flex ">
        <div class="container text-center pt-4">
      <img src="img/IMG_8987.jpg" class="img-fluid w-75" alt="...">
      </div>
      <div class="container" >
        <h2 class="text-center fw-bold" style = "color: #2F5231">2nd Floor Indoor</h2>
        <h4 class="fw-bold" style = "color: #2F5231">2nd Floor - Indoor</h4>
                <h5 class="fw-bold">Reschedule allowed</h5>
                <p>Free Wi-Fi</p>
                <p>Non-Smoking Room</p>
                <p>AC</p>
                <h5 class="fw-bold" style = "color: #2F5231">Description</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla magnam tenetur ipsum tempora asperiores quae explicabo accusantium hic eaque, ut, quia obcaecati expedita distinctio maxime eos? Cupiditate perspiciatis harum velit?</p>
                <h5 class="fw-bold" style = "color: #2F5231">Terms & Condition</h5>
                <ol>
                    <li>Pembayaran biaya booking (DP) dilakukan max. H-1. DP minimal 50%.</li>
                    <li>Jika tidak ada konfirmasi di H-1 maka Diagram Coffee berhak membatalkan sepihak</li>
                    <li>Menu yang akan dipesan dapat dikirimkan via wa ke admin di H-1</li>
                    <li>Jika ada perubahan jadwal reservasi harus diinformasikan paling lambat H-1</li>
                    <li>Pembayaran dilakukan dalam 1 billing pembayaran</li>
                    <li>Dilarang membawa makanan dan minuman dari luar</li>
                    <li>Tetap mematuhi protokol Kesehatan</li>
                </ol>
                <div class="card w-100 " id="kartu" style="background-color: #FFF5E2;">
                <div class="card-body text-center">
                    <div class=" container d-flex">
                    <h3 class="card-title  fw-bold" style = "color: #2F5231">Downpayment</h3>
                    <div class="container text-center">
                    <a href="booking.php"><button type="button" class="btn text-white w-50" id="tombol">Book</button></a>
                    </div>
                    </div>
                </div>
                </div>
    <!-- Modal lantai 2 outdoor -->
    <div class="mdl">
    <div class="modal modal fade" id="modal2ndo" tabindex="-1" style="background-color: #FFF9ED;">
    <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#FFF9ED;">
        <div class="container text-center">
        <h1 class="modal-title fs-2 fw-bold text-black">RESERVATION</h1>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="background-color:#FFF9ED;">
        <div class="container d-flex ">
        <div class="container text-center pt-4">
      <img src="img/IMG_8987.jpg" class="img-fluid w-75" alt="...">
      </div>
      <div class="container" >
        <h2 class="text-center fw-bold" style = "color: #2F5231">2nd Floor Outdoor</h2>
        <h4 class="fw-bold" style = "color: #2F5231">2nd Floor - Outdoor</h4>
                <h5 class="fw-bold">Reschedule allowed</h5>
                <p>Free Wi-Fi</p>
                <p>Non-Smoking Room</p>
                <p>AC</p>
                <h5 class="fw-bold" style = "color: #2F5231">Description</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla magnam tenetur ipsum tempora asperiores quae explicabo accusantium hic eaque, ut, quia obcaecati expedita distinctio maxime eos? Cupiditate perspiciatis harum velit?</p>
                <h5 class="fw-bold" style = "color: #2F5231">Terms & Condition</h5>
                <ol>
                    <li>Pembayaran biaya booking (DP) dilakukan max. H-1. DP minimal 50%.</li>
                    <li>Jika tidak ada konfirmasi di H-1 maka Diagram Coffee berhak membatalkan sepihak</li>
                    <li>Menu yang akan dipesan dapat dikirimkan via wa ke admin di H-1</li>
                    <li>Jika ada perubahan jadwal reservasi harus diinformasikan paling lambat H-1</li>
                    <li>Pembayaran dilakukan dalam 1 billing pembayaran</li>
                    <li>Dilarang membawa makanan dan minuman dari luar</li>
                    <li>Tetap mematuhi protokol Kesehatan</li>
                </ol>
                <div class="card w-100 " id="kartu" style="background-color: #FFF5E2;">
                <div class="card-body text-center">
                    <div class=" container d-flex">
                    <h3 class="card-title  fw-bold" style = "color: #2F5231">Downpayment</h3>
                    <div class="container text-center">
                    <a href="booking.php"><button type="button" class="btn text-white w-50" id="tombol">Book</button></a>
                    </div>
                    </div>
                </div>
                </div>
<!-- modal lantai 3 indoor -->

<div class="mdl">
    <div class="modal modal fade" id="modal3rdi" tabindex="-1" style="background-color: #FFF9ED;">
    <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#FFF9ED;">
        <div class="container text-center">
        <h1 class="modal-title fs-2 fw-bold text-black">RESERVATION</h1>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="background-color:#FFF9ED;">
        <div class="container d-flex ">
        <div class="container text-center pt-4">
      <img src="img/IMG_8987.jpg" class="img-fluid w-75" alt="...">
      </div>
      <div class="container" >
        <h2 class="text-center fw-bold" style = "color: #2F5231">3rd Floor Indoor</h2>
        <h4 class="fw-bold" style = "color: #2F5231">3rd Floor - Indoor</h4>
                <h5 class="fw-bold">Reschedule allowed</h5>
                <p>Free Wi-Fi</p>
                <p>Non-Smoking Room</p>
                <p>AC</p>
                <h5 class="fw-bold" style = "color: #2F5231">Description</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla magnam tenetur ipsum tempora asperiores quae explicabo accusantium hic eaque, ut, quia obcaecati expedita distinctio maxime eos? Cupiditate perspiciatis harum velit?</p>
                <h5 class="fw-bold" style = "color: #2F5231">Terms & Condition</h5>
                <ol>
                    <li>Pembayaran biaya booking (DP) dilakukan max. H-1. DP minimal 50%.</li>
                    <li>Jika tidak ada konfirmasi di H-1 maka Diagram Coffee berhak membatalkan sepihak</li>
                    <li>Menu yang akan dipesan dapat dikirimkan via wa ke admin di H-1</li>
                    <li>Jika ada perubahan jadwal reservasi harus diinformasikan paling lambat H-1</li>
                    <li>Pembayaran dilakukan dalam 1 billing pembayaran</li>
                    <li>Dilarang membawa makanan dan minuman dari luar</li>
                    <li>Tetap mematuhi protokol Kesehatan</li>
                </ol>
                <div class="card w-100 " id="kartu" style="background-color: #FFF5E2;">
                <div class="card-body text-center">
                    <div class=" container d-flex">
                    <h3 class="card-title  fw-bold" style = "color: #2F5231">Downpayment</h3>
                    <div class="container text-center">
                    <a href="booking.php"><button type="button" class="btn text-white w-50" id="tombol">Book</button></a>
                    </div>
                    </div>
                </div>
                </div>
    <!-- Modal lantai 3 outdoor -->
    <div class="mdl">
    <div class="modal modal fade" id="modal3rdo" tabindex="-1" style="background-color: #FFF9ED;">
    <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#FFF9ED;">
        <div class="container text-center">
        <h1 class="modal-title fs-2 fw-bold text-black">RESERVATION</h1>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="background-color:#FFF9ED;">
        <div class="container d-flex ">
        <div class="container text-center pt-4">
      <img src="img/IMG_8987.jpg" class="img-fluid w-75" alt="...">
      </div>
      <div class="container" >
        <h2 class="text-center fw-bold" style = "color: #2F5231">3rd Floor Outdoor</h2>
        <h4 class="fw-bold" style = "color: #2F5231">3rd Floor - Outdoor</h4>
                <h5 class="fw-bold">Reschedule allowed</h5>
                <p>Free Wi-Fi</p>
                <p>Non-Smoking Room</p>
                <p>AC</p>
                <h5 class="fw-bold" style = "color: #2F5231">Description</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla magnam tenetur ipsum tempora asperiores quae explicabo accusantium hic eaque, ut, quia obcaecati expedita distinctio maxime eos? Cupiditate perspiciatis harum velit?</p>
                <h5 class="fw-bold" style = "color: #2F5231">Terms & Condition</h5>
                <ol>
                    <li>Pembayaran biaya booking (DP) dilakukan max. H-1. DP minimal 50%.</li>
                    <li>Jika tidak ada konfirmasi di H-1 maka Diagram Coffee berhak membatalkan sepihak</li>
                    <li>Menu yang akan dipesan dapat dikirimkan via wa ke admin di H-1</li>
                    <li>Jika ada perubahan jadwal reservasi harus diinformasikan paling lambat H-1</li>
                    <li>Pembayaran dilakukan dalam 1 billing pembayaran</li>
                    <li>Dilarang membawa makanan dan minuman dari luar</li>
                    <li>Tetap mematuhi protokol Kesehatan</li>
                </ol>
                <div class="card w-100 " id="kartu" style="background-color: #FFF5E2;">
                <div class="card-body text-center">
                    <div class=" container d-flex">
                    <h3 class="card-title  fw-bold" style = "color: #2F5231">Downpayment</h3>
                    <div class="container text-center">
                    <a href="booking.php"><button type="button" class="btn text-white w-50" id="tombol">Book</button></a>
                    </div>
                    </div>
                </div>
                </div>

<!-- modal lantai 4 -->
<div class="mdl">
    <div class="modal modal fade" id="modal4tho" tabindex="-1" style="background-color: #FFF9ED;">
    <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#FFF9ED;">
        <div class="container text-center">
        <h1 class="modal-title fs-2 fw-bold text-black">RESERVATION</h1>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="background-color:#FFF9ED;">
        <div class="container d-flex ">
        <div class="container text-center pt-4">
      <img src="img/IMG_8987.jpg" class="img-fluid w-75" alt="...">
      </div>
      <div class="container" >
        <h2 class="text-center fw-bold" style = "color: #2F5231">4th Floor Outdoor</h2>
        <h4 class="fw-bold" style = "color: #2F5231">4th Floor - Outdoor</h4>
                <h5 class="fw-bold">Reschedule allowed</h5>
                <p>Free Wi-Fi</p>
                <p>Non-Smoking Room</p>
                <p>AC</p>
                <h5 class="fw-bold" style = "color: #2F5231">Description</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla magnam tenetur ipsum tempora asperiores quae explicabo accusantium hic eaque, ut, quia obcaecati expedita distinctio maxime eos? Cupiditate perspiciatis harum velit?</p>
                <h5 class="fw-bold" style = "color: #2F5231">Terms & Condition</h5>
                <ol>
                    <li>Pembayaran biaya booking (DP) dilakukan max. H-1. DP minimal 50%.</li>
                    <li>Jika tidak ada konfirmasi di H-1 maka Diagram Coffee berhak membatalkan sepihak</li>
                    <li>Menu yang akan dipesan dapat dikirimkan via wa ke admin di H-1</li>
                    <li>Jika ada perubahan jadwal reservasi harus diinformasikan paling lambat H-1</li>
                    <li>Pembayaran dilakukan dalam 1 billing pembayaran</li>
                    <li>Dilarang membawa makanan dan minuman dari luar</li>
                    <li>Tetap mematuhi protokol Kesehatan</li>
                </ol>
                <div class="card w-100 " id="kartu" style="background-color: #FFF5E2;">
                <div class="card-body text-center">
                    <div class=" container d-flex">
                    <h3 class="card-title  fw-bold" style = "color: #2F5231">Downpayment</h3>
                    <div class="container text-center">
                    <a href="booking.php"><button type="button" class="btn text-white w-50" id="tombol">Book</button></a>
                    </div>
                    </div>
                </div>
                </div>

     

    
    
</body>
</html>