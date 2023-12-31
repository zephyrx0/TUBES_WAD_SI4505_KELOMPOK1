<?php
session_start();

if (isset($_POST["continue"])) {
    $_SESSION["details"] = array(
        "nama" => $_POST["nama"],
        "email" => $_POST["email"],
        "hp" => $_POST["nohp"],
        "pesan" => $_POST["pesan"],
        "ruangan" => $_POST["ruangan"],
        "jenis" => $_POST["jenis"],
        "jmlorg" => $_POST["jmlorg"],
        "tanggal" => $_POST["tanggal"]
    );

    header("location: cartmenu.php");
}
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
    <link rel="stylesheet" href="css/bfield.css">
    
</head>

<body>
    <!-- navbar -->

<section id="seksi">
<?php include 'navbar-polos.php'; ?>
    <!-- seksi 1 -->
    <section id="seksi1" class="d-flex align-items-center">
    <div id="lingkaran" class="d-flex align-items-center justify-content-center rounded-circle text-white p-4" style="width: 30px; height: 30px; background-color: red;">
            1
        </div>

        <p class="m-0 align-middle">Booking Details</p>

        <div id="lingkaran" class="d-flex align-items-center justify-content-center rounded-circle text-danger p-4" style="width: 30px; height: 30px;">
            2
        </div>
        <p class="m-0 align-middle">Select Menu</p>

        <div id="lingkaran" class="d-flex align-items-center justify-content-center rounded-circle text-danger p-4" style="width: 30px; height: 30px;">
            3
        </div>
         <p class="m-0 align-middle">Cart</p>

        <div id="lingkaran" class="d-flex align-items-center justify-content-center rounded-circle text-danger p-4" style="width: 30px; height: 30px;">
            4
        </div>
        <p class="m-0 align-middle">Payment</p>

    </section>
    <!-- seksi 2 -->
    <form action="" method="post">
    <section id="seksi2">
        <div id="content2" class="d-flex">
            <div id="bio" class="rounded">
                
                    <div class="mb-4">
                        <input type="text" class="form-control" name="nama" id="nama"  placeholder="NAMA">
                    </div>
                    <div class="mb-4">
                        <input type="email" class="form-control"  name="email" id="email" aria-describedby="emailHelp" placeholder="EMAIL">
                    </div>
                    <div class="mb-4">
                        <input type="text" class="form-control" name="nohp" id="nohp" placeholder="NO HANDPHONE">
                    </div>
                    <div class="mb-4">
                        <input type="text" class="form-control" name="pesan" id="addmessage" placeholder="ADDITIONAL MESSAGE">
                    </div>
                
            </div>

            <div id="ruangan" class="rounded p-4">
                <div class="dropdown mb-4">
                    
                    <select class="form-select" name="ruangan" aria-label="Default select example" >
                        <option selected>Pilih ruangan</option>
                        <option value="1indor">Lantai 1 </option>
                        <option value="2indor">Lantai 2 Indoor</option>
                        <option value="2outdoor">Lantai 2 Outdoor</option>
                        <option value="3indoor">Lantai 3 Indoor</option>
                        <option value="3outdoor">Lantai 3 Outdoor</option>
                        <option value="4outdoor">Lantai 4 Outdoor</option>
                    </select>
                
                </div>

                <div class="dropdown mb-4">
                    
                    <select class="form-select" name="jenis" aria-label="Default select example">
                        <option selected>Pilih jenis reservasi</option>
                        <option value="pribadi">Pribadi</option>
                        <option value="acara">Acara</option>
                        <option value="Rapat">Rapat</option>
                    </select>
                    
                </div>

                <div class="dropdown mb-4">
                    
                    <select class="form-select" name="jmlorg" aria-label="Default select example">
                        <option selected>Jumlah orang</option>
                        <option value="1-5">1-5</option>
                        <option value="5-10">5-10</option>
                        <option value=">10">> 10</option>
                    </select>
                    
                </div>
                    
                    <input class="form-control form-control-sm w-100 " type="date" name="tanggal">
                <!-- <div class="dropdown mb-4">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Waktu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div> -->
                    
            </div>
        </div>
    </section>


    <!-- seksi 3 -->
    <section id="seksi3">
    <?php
        
        if (isset($_POST["jmlorg"])) {
            if ($_POST["jmlorg"] == "1-5") {
                $_SESSION["minor"] = 100000;
                
            }elseif ($_POST["jmlorg"] == "5-10") {
                $_SESSION["minor"] = 150000;
            }else {
                $_SESSION["minor"] = 200000;
            }
            
        }
        
    ?>
    </section>
    <!-- seksi 4 -->
    <div class="container text-center">
        <section id="seksi4" class="d-inline-block w-50 rounded">
            <div id="order" class="d-flex justify-content-between">
                <div class="order-left">
                    <!-- <p class="m-0">Minimal order</p> -->
                    <!-- hasil kalkulasi masuk dibawah sini -->
                    
                </div>
                <form action="" method="post">
                <button type="submit" name="continue" id = "tombol" class="btn btn-danger w-100 p-3">Continue</button>
                </form>
            </div>
        </section>
        </form>
    </div>
    
    <?php include 'footer.php';?>

    <!-- Boostrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</section>
</body>



</html>
