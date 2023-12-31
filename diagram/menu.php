<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIGRAM COFFEE</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" href="img/icon diagram.png" type="image/x-icon">
        <link rel="stylesheet" href="css/menu.css">

        <!-- Sertakan Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body>
<?php if (isset($_SESSION["loginuser"])) {
    include('navbaruser.php');
    
}else {
    include('navbar.php');
    
}
?>

<section id="seksiutama">

    <!-- menu header -->
    <section id="seksi1">
            <div class="container " id="tulisanseksi1" >
                <h1 class="fw-bold text-light">Menu</h1>
                <p class="text-light">Diagram special menu</p>
        </div>
    </section>

    <!-- menu 2 -->
    <section id="seksi2" >
     <div class="justify-content-center text-center" id="tulisanseksi2">
        <h2 class="fw-bold pt-5" id="seksi2h1">Discover our Menu</h2>
        <p style="color: #2F5231;"> 
            Jelajahi menu kami yang lezat dan menggugah 
            <br>selera, dengan berbagai macam hidangan Indonesia 
            yang autentik.
        </p>
    </div>

    </section>

        <!-- landing 5 -->
    <section id="seksi3">
        
            <div id="carouselExampleAutoplaying" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                </div>

                <!-- Carousel -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="#modal1"><img src="img/menu1.jpg" class="d-block float-start img-fluid" alt="Open Modal" data-bs-toggle="modal" data-bs-target="#modal1"></a>
                        <a href="#modal2"><img src="img/menu2.jpg" class="d-block float-start img-fluid" alt="Open Modal" data-bs-toggle="modal" data-bs-target="#modal2">
                        <a href="#modal3"><img src="img/menu3.jpg" class="d-block float-start img-fluid" alt="Open Modal" data-bs-toggle="modal" data-bs-target="#modal3">
                    </div>
                    <div class="carousel-item">
                        <a href="#modal4"><img src="img/menu4.jpg" class="d-block float-start img-fluid" alt="Open Modal" data-bs-toggle="modal" data-bs-target="#modal4">
                        <a href="#modal5"><img src="img/menu5.jpg" class="d-block float-start img-fluid" alt="Open Modal" data-bs-toggle="modal" data-bs-target="#modal5">
                        <a href="#modal6"><img src="img/menu6.jpg" class="d-block float-start img-fluid" alt="Open Modal" data-bs-toggle="modal" data-bs-target="#modal6">
                    </div>
                    <div class="carousel-item">
                        <a href="#modal7"><img src="img/menu7.jpg" class="d-block float-start img-fluid" alt="Open Modal" data-bs-toggle="modal" data-bs-target="#modal7">
                        <a href="#modal8"><img src="img/menu8.jpg" class="d-block float-start img-fluid" alt="Open Modal" data-bs-toggle="modal" data-bs-target="#modal8">
                        <a href="#modal9"><img src="img/menu9.jpg" class="d-block float-start img-fluid" alt="Open Modal" data-bs-toggle="modal" data-bs-target="#modal9">
                    </div>
                    <div class="carousel-item">
                        <a href="#modal10"><img src="img/menu10.jpg" class="d-block float-start img-fluid" alt="Open Modal" data-bs-toggle="modal" data-bs-target="#modal10">
                        <a href="#modal11"><img src="img/menu11.jpg" class="d-block float-start img-fluid" alt="Open Modal" data-bs-toggle="modal" data-bs-target="#modal11">
                        <a href="#modal12"><img src="img/menu12.jpg" class="d-block float-start img-fluid" alt="Open Modal" data-bs-toggle="modal" data-bs-target="#modal12">
                    </div>
                    <div class="carousel-item">
                        <a href="#modal13"><img src="img/menu13.jpg" class="d-block float-start img-fluid" alt="Open Modal" data-bs-toggle="modal" data-bs-target="#modal13">
                        <a href="#modal14"><img src="img/menu14.jpg" class="d-block float-start img-fluid" alt="Open Modal" data-bs-toggle="modal" data-bs-target="#modal14">
                        <a href="#modal15"><img src="img/menu15.jpg" class="d-block float-start img-fluid" alt="Open Modal" data-bs-toggle="modal" data-bs-target="#modal15">
                    </div>
                    <div class="carousel-item">
                        <a href="#modal16"><img src="img/menu16.jpg" class="d-block float-start img-fluid" alt="Open Modal" data-bs-toggle="modal" data-bs-target="#modal16">
                        <a href="#modal17"><img src="img/menu17.jpg" class="d-block float-start img-fluid" alt="Open Modal" data-bs-toggle="modal" data-bs-target="#modal17">
                        <a href="#modal18"><img src="img/menu18.jpg" class="d-block float-start img-fluid" alt="Open Modal" data-bs-toggle="modal" data-bs-target="#modal18">
                    </div>
                
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

                    <!-- Modal -->
                <div id="gambarMenu">
                    <div class="modal fade" id="modal1" tabindex="-1">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-body">
                                <img src="img/menu1.jpg" style="width: 100%;" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="modal2" tabindex="-1">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-body">
                                <img src="img/menu2.jpg" style="width: 100%;" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="modal3" tabindex="-1">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-body">
                                <img src="img/menu3.jpg" style="width: 100%;" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="modal4" tabindex="-1">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-body">
                                <img src="img/menu4.jpg" style="width: 100%;" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="modal5" tabindex="-1">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-body">
                                <img src="img/menu5.jpg" style="width: 100%;" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="modal6" tabindex="-1">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-body">
                                <img src="img/menu6.jpg" style="width: 100%;" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="modal7" tabindex="-1">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-body">
                                <img src="img/menu7.jpg" style="width: 100%;" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="modal8" tabindex="-1">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-body">
                                <img src="img/menu8.jpg" style="width: 100%;" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="modal9" tabindex="-1">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-body">
                                <img src="img/menu9.jpg" style="width: 100%;" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="modal10" tabindex="-1">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-body">
                                <img src="img/menu10.jpg" style="width: 100%;" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="modal11" tabindex="-1">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-body">
                                <img src="img/menu11.jpg" style="width: 100%;" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="modal12" tabindex="-1">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-body">
                                <img src="img/menu12.jpg" style="width: 100%;" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="modal13" tabindex="-1">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-body">
                                <img src="img/menu13.jpg" style="width: 100%;" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="modal14" tabindex="-1">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-body">
                                <img src="img/menu14.jpg" style="width: 100%;" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="modal15" tabindex="-1">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-body">
                                <img src="img/menu15.jpg" style="width: 100%;" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="modal16" tabindex="-1">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-body">
                                <img src="img/menu16.jpg" style="width: 100%;" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="modal17" tabindex="-1">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-body">
                                <img src="img/menu17.jpg" style="width: 100%;" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="modal18" tabindex="-1">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-body">
                                <img src="img/menu18.jpg" style="width: 100%;" alt="">
                            </div>
                        </div>
                    </div>
                </div>
    </section>
</section>

<?php
    include 'footer.php';
    ?>
</body>

</html>