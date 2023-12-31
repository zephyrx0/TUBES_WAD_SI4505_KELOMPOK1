<?php
require 'function.php';

session_start();
// var_dump($_SESSION["minor"]);



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
    <link rel="stylesheet" href="css/selectmenu.css">
    
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

        <div id="lingkaran" class="d-flex align-items-center justify-content-center rounded-circle text-danger p-4" style="width: 30px; height: 30px;">
            3
        </div>
         <p class="m-0 align-middle">Cart</p>

        <div id="lingkaran" class="d-flex align-items-center justify-content-center rounded-circle text-danger p-4" style="width: 30px; height: 30px;">
            4
        </div>
        <p class="m-0 align-middle">Payment</p>

        <div id="bio" class="rounded">
            <p>Minimal Order</p>
            <h3><?="Rp ",number_format($_SESSION["minor"],0,'.','.');?></h3>
        </div>

    </section>
    <!-- seksi 2 -->

    <section id="seksi2">
    
        
    
    <div id="menu" class="">
    <div class="rounded">
    <h1><?= $category = "Steak"; ?></h1>
        <?php $datamenu = query("SELECT * FROM menu WHERE category = '$category'"); ?>
        <?php foreach ($datamenu as $mhs) : ?>
            <table class="invoice-items" width="100%" cellpadding="0" cellspacing="0">
                <tbody>
                <tr>
                    <?php $mhs['id'];?>
                    <td  id="nama-menu"><?= $mhs['nama_menu']; ?> <br><span id="deskripsi"><?= $mhs['desc_menu'] ?></span></td>
                    <td class="alignright"><?= "Rp ",number_format($mhs ["price"],0,'.','.'); ?></td>
                    <td><a href="cartmenu.php?id=<?= $mhs['id'];?>"><button id="tombol" type="button" class="btn float-end">Add</button></a></td>
                </tr>
                <?php endforeach; ?>
            </tbody></table>                                     
    </div>

   

    <div class="rounded">
    <h1><?= $category = "chicken steak"; ?></h1>
        <?php $datamenu = query("SELECT * FROM menu WHERE category = '$category'"); ?>
        <?php foreach ($datamenu as $mhs) : ?>
            <table class="invoice-items" width="100%" cellpadding="0" cellspacing="0">
                <tbody>
                <tr>
                    <?php $mhs['id'];?>
                    <td  id="nama-menu"><?= $mhs['nama_menu']; ?> <br><span id="deskripsi"><?= $mhs['desc_menu'] ?></span></td>
                    <td class="alignright"><?= "Rp ",number_format($mhs ["price"],0,'.','.'); ?></td>
                    <td><a href="cartmenu.php?id=<?= $mhs['id'];?>"><button id="tombol" type="button" class="btn float-end">Add</button></a></td>
                </tr>
                <?php endforeach; ?>
            </tbody></table>                                     
    </div>

    <div class="rounded">
    <h1><?= $category = "Salad"; ?></h1>
        <?php $datamenu = query("SELECT * FROM menu WHERE category = '$category'"); ?>
        <?php foreach ($datamenu as $mhs) : ?>
            <table class="invoice-items" width="100%" cellpadding="0" cellspacing="0">
                <tbody>
                <tr>
                    <?php $mhs['id'];?>
                    <td  id="nama-menu"><?= $mhs['nama_menu']; ?> <br><span id="deskripsi"><?= $mhs['desc_menu'] ?></span></td>
                    <td class="alignright"><?= "Rp ",number_format($mhs ["price"],0,'.','.'); ?></td>
                    <td><a href="cartmenu.php?id=<?= $mhs['id'];?>"><button id="tombol" type="button" class="btn float-end">Add</button></a></td>
                </tr>
                <?php endforeach; ?>
            </tbody></table>
    </div>

    <div class="rounded">
    <h1><?= $category = "Spaghetti"; ?></h1>
        <?php $datamenu = query("SELECT * FROM menu WHERE category = '$category'"); ?>
        <?php foreach ($datamenu as $mhs) : ?>
            <table class="invoice-items" width="100%" cellpadding="0" cellspacing="0">
                <tbody>
                <tr>
                    <?php $mhs['id'];?>
                    <td  id="nama-menu"><?= $mhs['nama_menu']; ?> <br><span id="deskripsi"><?= $mhs['desc_menu'] ?></span></td>
                    <td class="alignright"><?= "Rp ",number_format($mhs ["price"],0,'.','.'); ?></td>
                    <td><a href="cartmenu.php?id=<?= $mhs['id'];?>"><button id="tombol" type="button" class="btn float-end">Add</button></a></td>
                </tr>
                <?php endforeach; ?>
            </tbody></table>
    </div>

    <div class="rounded">
    <h1><?= $category = "Rice curry"; ?></h1>
        <?php $datamenu = query("SELECT * FROM menu WHERE category = '$category'"); ?>
        <?php foreach ($datamenu as $mhs) : ?>
            <table class="invoice-items" width="100%" cellpadding="0" cellspacing="0">
                <tbody>
                <tr>
                    <?php $mhs['id'];?>
                    <td  id="nama-menu"><?= $mhs['nama_menu']; ?> <br><span id="deskripsi"><?= $mhs['desc_menu'] ?></span></td>
                    <td class="alignright"><?= "Rp ",number_format($mhs ["price"],0,'.','.'); ?></td>
                    <td><a href="cartmenu.php?id=<?= $mhs['id'];?>"><button id="tombol" type="button" class="btn float-end">Add</button></a></td>
                </tr>
                <?php endforeach; ?>
            </tbody></table>
    </div>

    <div class="rounded">
    <h1><?= $category = "Beef Rice"; ?></h1>
        <?php $datamenu = query("SELECT * FROM menu WHERE category = '$category'"); ?>
        <?php foreach ($datamenu as $mhs) : ?>
            <table class="invoice-items" width="100%" cellpadding="0" cellspacing="0">
                <tbody>
                <tr>
                    <?php $mhs['id'];?>
                    <td  id="nama-menu"><?= $mhs['nama_menu']; ?> <br><span id="deskripsi"><?= $mhs['desc_menu'] ?></span></td>
                    <td class="alignright"><?= "Rp ",number_format($mhs ["price"],0,'.','.'); ?></td>
                    <td><a href="cartmenu.php?id=<?= $mhs['id'];?>"><button id="tombol" type="button" class="btn float-end">Add</button></a></td>
                </tr>
                <?php endforeach; ?>
            </tbody></table>
    </div>

    <div class="rounded">
    <h1><?= $category = "Chicken & Dory Rice"; ?></h1>
        <?php $datamenu = query("SELECT * FROM menu WHERE category = '$category'"); ?>
        <?php foreach ($datamenu as $mhs) : ?>
            <table class="invoice-items" width="100%" cellpadding="0" cellspacing="0">
                <tbody>
                <tr>
                    <?php $mhs['id'];?>
                    <td  id="nama-menu"><?= $mhs['nama_menu']; ?> <br><span id="deskripsi"><?= $mhs['desc_menu'] ?></span></td>
                    <td class="alignright"><?= "Rp ",number_format($mhs ["price"],0,'.','.'); ?></td>
                    <td><a href="cartmenu.php?id=<?= $mhs['id'];?>"><button id="tombol" type="button" class="btn float-end">Add</button></a></td>
                </tr>
                <?php endforeach; ?>
            </tbody></table>
    </div>

    <div class="rounded">
    <h1><?= $category = "Fried Rice & Soup"; ?></h1>
        <?php $datamenu = query("SELECT * FROM menu WHERE category = '$category'"); ?>
        <?php foreach ($datamenu as $mhs) : ?>
            <table class="invoice-items" width="100%" cellpadding="0" cellspacing="0">
                <tbody>
                <tr>
                    <?php $mhs['id'];?>
                    <td  id="nama-menu"><?= $mhs['nama_menu']; ?> <br><span id="deskripsi"><?= $mhs['desc_menu'] ?></span></td>
                    <td class="alignright"><?= "Rp ",number_format($mhs ["price"],0,'.','.'); ?></td>
                    <td><a href="cartmenu.php?id=<?= $mhs['id'];?>"><button id="tombol" type="button" class="btn float-end">Add</button></a></td>
                </tr>
                <?php endforeach; ?>
            </tbody></table>
    </div>

    <div class="rounded">
    <h1><?= $category = "Light Meal"; ?></h1>
        <?php $datamenu = query("SELECT * FROM menu WHERE category = '$category'"); ?>
        <?php foreach ($datamenu as $mhs) : ?>
            <table class="invoice-items" width="100%" cellpadding="0" cellspacing="0">
                <tbody>
                <tr>
                    <?php $mhs['id'];?>
                    <td  id="nama-menu"><?= $mhs['nama_menu']; ?> <br><span id="deskripsi"><?= $mhs['desc_menu'] ?></span></td>
                    <td class="alignright"><?= "Rp ",number_format($mhs ["price"],0,'.','.'); ?></td>
                    <td><a href="cartmenu.php?id=<?= $mhs['id'];?>"><button id="tombol" type="button" class="btn float-end">Add</button></a></td>
                </tr>
                <?php endforeach; ?>
            </tbody></table>
    </div>

    <div class="rounded">
    <h1><?= $category = "Special Tea"; ?></h1>
        <?php $datamenu = query("SELECT * FROM menu WHERE category = '$category'"); ?>
        <?php foreach ($datamenu as $mhs) : ?>
            <table class="invoice-items" width="100%" cellpadding="0" cellspacing="0">
                <tbody>
                <tr>
                    <?php $mhs['id'];?>
                    <td  id="nama-menu"><?= $mhs['nama_menu']; ?> <br><span id="deskripsi"><?= $mhs['desc_menu'] ?></span></td>
                    <td class="alignright"><?= "Rp ",number_format($mhs ["price"],0,'.','.'); ?></td>
                    <td><a href="cartmenu.php?id=<?= $mhs['id'];?>"><button id="tombol" type="button" class="btn float-end">Add</button></a></td>
                </tr>
                <?php endforeach; ?>
            </tbody></table>
    </div>
    <!-- <a href="payment.php"><button id="tombol" type="button" class="btn float-end">Confirm</button></a> -->
    </div>
    
    </section>


    <!-- seksi 3 -->
    <section id="seksi3">
    
    </section>
    <!-- seksi 4 -->
    <div class="container text-center">
    <div class="container text-center">
        <section id="seksi4" class=" w-50 rounded">
            <div id="order" class="d-flex justify-content-between">
                <div class="order-left">
                    <!-- <p class="m-0">Minimal order</p> -->
                    <!-- hasil kalkulasi masuk dibawah sini -->
                    
                </div>
                <a href="keranjang.php">Lihat cart</a>
            </div>
        </section>
        </form>
    </div>
    </div>
    
    <?php include 'footer.php';?>

    <!-- Boostrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</section>
</body>



</html>
