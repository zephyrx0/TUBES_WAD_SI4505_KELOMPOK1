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
    <link rel="stylesheet" href="css/promo.css">
</head>
<body>
<?php if (isset($_SESSION["loginuser"])) {
    include('navbaruser.php');
    
}else {
    include('navbar.php');
    
}
?>

    <!-- karosel -->
    <section>
        <!-- <div class="container"> -->
            <div id="karosel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="img/karosel1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="img/karosel2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="img/karosel3.png" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#karosel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#karosel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
        <!-- </div> -->
    </section>
    <section id="seksi2">
        <div class="container p-5">
        <div class="container text-center p-5">
        <div class="row row-cols-3">
            <div class="col">
            <div class="col">
            <div class="card mb-3">
                <img src="img/promo1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title fw-bold text-black">Red Velvet</h5>
       
                    <a href="#" class="btn text-white" id="tombol" data-bs-toggle="modal" data-bs-target="#modal1">Show More</a>
                </div>
                </div>
            </div>

            </div>
            <div class="col">
            <div class="card mb-3">
                <img src="img/promo2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title fw-bold text-black">Artisan Gelato</h5>
                   
                    <a href="#" class="btn text-white" id="tombol" data-bs-toggle="modal" data-bs-target="#modal2">Show More</a>
                </div>
                </div>
            </div>
            <div class="col">
            <div class="col">
            <div class="card mb-3">
                <img src="img/promo3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title fw-bold text-black">Artisan Gelato</h5>
                   
                    <a href="#" class="btn text-white" id="tombol" data-bs-toggle="modal" data-bs-target="#modal3">Show More</a>
                </div>
                </div>
            </div>
            </div>
            <div class="col">
            <div class="col">
            <div class="card mb-3">
                <img src="img/promo6.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title fw-bold text-black">Dori With Cheese Sauce</h5>
                   
                    <a href="#" class="btn text-white" id="tombol" data-bs-toggle="modal" data-bs-target="#modal4">Show More</a>
                </div>
                </div>
            </div>
            </div>
            <div class="col">
            <div class="col">
            <div class="card mb-3">
                <img src="img/promo2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title fw-bold text-black">Artisan Gelato</h5>
                   
                    <a href="#" class="btn text-white" id="tombol" data-bs-toggle="modal" data-bs-target="#modal2">Show More</a>
                </div>
                </div>
            </div>
            </div>
            <div class="col">
            <div class="col">
            <div class="card mb-3">
                <img src="img/promo6.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title fw-bold text-black">Dori With Cheese Sauce</h5>
                  
                    <a href="#" class="btn text-white" id="tombol" data-bs-toggle="modal" data-bs-target="#modal4">Show More</a>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    <!-- modal 1 -->
    <div class="modal fade" id="modal1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header justify-content-center">
        <h1 class="modal-title fs-2 fw-bold text-black " id="staticBackdropLabel">RED VELVET</h1>
      </div>
      <div class="modal-body">
      <img src="img/promo1.jpg" class="img-fluid" alt="...">
      <div class="container">
        <h2 class="text-center fw-bold" style = "color: #2F5231">Rp 18.000</h2>
        <h5>Red velvet late</h5>
        <p>Red Velvet Latte, minuman yang sempurna untuk dinikmati di hari yang dingin!</p>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn text-white" id="tombol" data-bs-dismiss="modal" aria-label="Close">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- end of modal 1 -->
<!-- modal 2 -->
<div class="modal fade" id="modal2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header justify-content-center">
        <h1 class="modal-title fs-2 fw-bold text-black " id="staticBackdropLabel">ARTISAN GELATO</h1>
      </div>
      <div class="modal-body">
      <img src="img/promo2.jpg" class="img-fluid" alt="...">
      <div class="container">
        <h2 class="text-center fw-bold" style = "color: #2F5231">Rp 20.000</h2>
        <h5>Artisan Gelato</h5>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe, animi soluta eaque repellendus, commodi nihil in consequuntur minima beatae magni consequatur quisquam suscipit dolorum. Incidunt, provident. Minus fugiat doloremque vitae!</p>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn text-white" id="tombol" data-bs-dismiss="modal" aria-label="Close">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- end of modal 2 -->
<!-- modal 3 -->
<div class="modal fade" id="modal3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header justify-content-center">
        <h1 class="modal-title fs-2 fw-bold text-black " id="staticBackdropLabel">ARTISAN GELATO</h1>
      </div>
      <div class="modal-body">
      <img src="img/promo3.jpg" class="img-fluid" alt="...">
      <div class="container">
        <h2 class="text-center fw-bold" style = "color: #2F5231">Rp 20.000</h2>
        <h5>Artisan Gelato</h5>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe, animi soluta eaque repellendus, commodi nihil in consequuntur minima beatae magni consequatur quisquam suscipit dolorum. Incidunt, provident. Minus fugiat doloremque vitae!</p>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn text-white" id="tombol" data-bs-dismiss="modal" aria-label="Close">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- end of modal 3 -->
<!-- modal 4 -->
<div class="modal fade" id="modal4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header justify-content-center">
        <h1 class="modal-title fs-2 fw-bold text-black " id="staticBackdropLabel">Dori With Cheese Sauce</h1>
      </div>
      <div class="modal-body">
      <img src="img/promo6.jpg" class="img-fluid" alt="...">
      <div class="container">
        <h2 class="text-center fw-bold" style = "color: #2F5231">Rp 50.000</h2>
        <h5>Dori With Cheese Sauce</h5>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe, animi soluta eaque repellendus, commodi nihil in consequuntur minima beatae magni consequatur quisquam suscipit dolorum. Incidunt, provident. Minus fugiat doloremque vitae!</p>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn text-white" id="tombol" data-bs-dismiss="modal" aria-label="Close">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- end of modal 4-->


</body>
</html>