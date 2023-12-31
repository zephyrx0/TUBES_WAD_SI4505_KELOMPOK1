<?php
require 'function.php';

session_start();

$username = $_SESSION['details']['nama'];
$email = $_SESSION['details']['email'];
$hp = $_SESSION['details']['hp'];
$pesan = $_SESSION['details']['pesan'];
$ruangan = $_SESSION['details']['ruangan'];
$jenis = $_SESSION['details']['jenis'];
$jumlahorang = $_SESSION['details']['jmlorg'];
$tanggal = $_SESSION['details']['tanggal'];
$minorder = $_SESSION['minor'];



foreach ($_SESSION["cart"] as $cart) {

    $namemenu = array();
    $jumlahh = array();
    $totall = $cart["price"] * $cart["quantity"];
    
    
    $menu = $cart["name"];
    $jumlah = $cart["quantity"];
    // array_push($namemenu, $menu);
    $namemenu[] = $menu;
    $jumlahh[] = $jumlah;
    $resulta = implode(" ", $namemenu);
    $resultb = implode(" ", $jumlahh);
    
}


if (isset($_POST["submit"])) {
    foreach ($_SESSION["cart"] as $cartt) {
        $namemenu = array();
        $jumlahh = array();
        $menu = $cart["name"];
        $jumlah = $cart["quantity"];
        // array_push($namemenu, $menu);
        $namemenu[] = $menu;
        $jumlahh[] = $jumlah;
        $resulta = implode(" ", $namemenu);
        $resultb = implode(" ", $jumlahh);
        
        $query = "INSERT INTO reservasis VALUE ('','$tanggal','$username','$email','$hp','$pesan','$ruangan','$jumlahorang','$resulta','$resultb')";
        }
        $sql = mysqli_query($koneksi,$query);
        if ($sql) {
            echo "
            <script>
                alert('DATA BERHASIL DITAMBAHKAN');
                window.location.href = 'index.php';
            </script>
            ";
            
        }else{
            echo "
            <script>
                alert('DATA GAGAL DITAMBAHKAN');
                
            </script>
            ";
        
    }
    
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
    <link rel="stylesheet" href="css/payment.css">
    
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

        <div id="lingkaran" class="d-flex align-items-center justify-content-center rounded-circle text-white p-4" style="width: 30px; height: 30px; background-color: red;">
            2
        </div>
        
        <p class="m-0 align-middle">Select Menu</p>
        <div id="lingkaran" class="d-flex align-items-center justify-content-center rounded-circle text-white    p-4" style="width: 30px; height: 30px; background-color: red;">
            3
        </div>
         <p class="m-0 align-middle">Cart</p>

       <div id="lingkaran" class="d-flex align-items-center justify-content-center rounded-circle text-white p-4" style="width: 30px; height: 30px; background-color: red;">
            4
        </div>
        <p class="m-0 align-middle">Payment</p>

    </section>
    <!-- seksi 2 -->
    <form action="" method="post">
    <section id="seksi2" class="d-flex justify-content-center mb-4">
        <div id="pembayaran" class="rounded">
            <select class="form-select" aria-label="Default select example">
                <option selected>Pilih Metode Pembayaran --</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
    </section>

    <!-- seksi 3 -->
    <section id="seksi3" class="d-flex justify-content-center">
    <div id="detail" class="rounded">
        <table class="body-wrap">
            <tbody><tr>
                <td></td>
                    <td class="container" width="600">
                        <div class="content">
                            <table class="main" width="100%" cellpadding="0" cellspacing="0">
                                <tbody><tr>
                                    <td class="content-wrap aligncenter">
                                        <table width="100%" cellpadding="0" cellspacing="0">
                                            <tbody>
                                            <tr class="tagihan">
                                                <td class="content-block">
                                                    <h3 class="text-center">Tagihan</h3>
                                                    <h5>Reservasi atas nama, <?= $username;?> dengan email <?= $email;?> dan no hp : <?= $hp;?>
                                                </h5>
                                                  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="content-block">
                                                    <table class="invoice w-100">
                                                        <tbody>
                                                        <tr>
                                                            <td>
                                                                <table class="invoice-items" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>Tanggal</td>
                                                                        <td class="alignright"><?= $tanggal;?></td>
                                                                    </tr>
                                                                        <tr>
                                                                        <td>Jumlah orang</td>
                                                                        <td class="alignright"><?= $jumlahorang;?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Minimal order</td>
                                                                        <td class="alignright"><?="Rp ",number_format($minorder,0,'.','.');?></td>
                                                                    </tr>
                                                                    <tr class="biaya">
                                                                        <td>Additional message</td>
                                                                        <td class="alignright"><?= $pesan;?></td>
                                                                    </tr>
                                                                    <tr class="pesanan">
                                                                        <td class="" width="80%">Pesanan:</td>
                                                                        <td class="alignright"><?php foreach ($_SESSION["cart"] as $crt ) {
                                                                            echo $crt["name"]; echo " ";
                                                                            echo $crt["quantity"]; 
                                                                            echo "<br>";
                                                                        }?></td>
                                                                    </tr>
                                                                    <tr class="total totaltagihan">
                                                                        <td class="" width="80%">Total Tagihan</td>
                                                                        <td class="alignright"><?="Rp ",number_format($totall,0,'.','.');?></td>
                                                                    </tr>
                                                                
                                                                </tbody></table>
                                                            </td>
                                                        </tr>
                                                    </tbody></table>
                                                </td>
                                            </tr>
                                        </tbody></table>
                                    </td>
                                </tr>
                            </tbody></table>
                        </div>
                    </td>
                <td></td>
            </tbody></tr>
        </table>
    </div>
</section>

<div class="text-center m-4">
    <h4 style="margin-right: 600px;">Jumlah yang akan dibayar</h4>
</div>
    <!-- seksi 4 -->
    <section id="seksi4" class="d-flex justify-content-center mb-4">
        <div id="pembayaran" class="rounded">
            <div id="bayar" class="input-group p-0 mb-3">
                <span class="input-group-text" id="basic-addon1" style="font-weight:700; background-color: #D9D9D9;">Rp.</span>
                <p><?=number_format($totall,0,'.','.');?></p>
            </div>
            <div id="tombol">
                <button type="submit" class="btn" name="submit" id="byrfull">Pesan</button>
            </div>
        </div>
    </form>

    

    <!-- Boostrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</section>

</body>
<?php include 'footer.php';?>


</html>
