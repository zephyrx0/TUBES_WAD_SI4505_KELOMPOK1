<?php
require_once 'function.php';
session_start();


// Inisialisasi keranjang belanja jika belum ada
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

// Menangani permintaan untuk menambahkan produk ke keranjang
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_to_cart'])) {
    $product_id = $_POST['id'];
    $product_name = $_POST['nama_menu'];
    $product_price = $_POST['harga'];
    $quantity = isset($_POST['quantity']) ? (int)$_POST['quantity'] : 1;

    // Cek apakah produk sudah ada di dalam keranjang
    $product_exists = false;
    foreach ($_SESSION['cart'] as $key => $item) {
        if ($item['id'] == $product_id) {
            // Produk sudah ada di dalam keranjang, tambahkan jumlah
            $_SESSION['cart'][$key]['quantity'] += $quantity;
            $product_exists = true;
            break;
        }
    }

    // Jika produk belum ada di dalam keranjang, tambahkan baru
    if (!$product_exists) {
        $_SESSION['cart'][] = array(
            'id' => $product_id,
            'name' => $product_name,
            'price' => $product_price,
            'quantity' => $quantity,
            
        );
    }
}

// Menangani permintaan untuk menghapus produk dari keranjang
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['remove_from_cart'])) {
    $product_id = $_POST['id'];

    // Hapus produk dari keranjang
    foreach ($_SESSION['cart'] as $key => $item) {
        if ($item['id'] == $product_id) {
            unset($_SESSION['cart'][$key]);
            break;
        }
    }
}

// Menangani permintaan untuk mengupdate jumlah quantity
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_quantity'])) {
    $product_id = $_POST['id'];
    $quantity = isset($_POST['quantity']) ? (int)$_POST['quantity'] : 1;

    foreach ($_SESSION['cart'] as $key => $item) {
        if ($item['id'] == $product_id) {
            // Update jumlah quantity
            $_SESSION['cart'][$key]['quantity'] = $quantity;
            break;
        }
    }
}

?>

<?php



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

        <div id="lingkaran" class="d-flex align-items-center justify-content-center rounded-circle text-white p-4" style="width: 30px; height: 30px; background-color: red;">
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
    <section>
    <?php displayCart();?>
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
                <a href="cartmenu.php">kembali ke menu</a>
                <a href="payment.php">Continue</a>
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

