<?php

$koneksi = mysqli_connect("localhost:3308","root","","diagram");

if (!$koneksi) {
    echo"
    <script>
    alert('GAGAL TERHUBUNG KE DATABASE')
    </script>
    ";
}

function query($query){
    global $koneksi;

    $hasil = mysqli_query($koneksi,$query);
    $rows = [];

    while($row = mysqli_fetch_assoc($hasil)){
        $rows [] = $row;

    }
    return $rows;
}
function daftar($data){
    global $koneksi;

    $user = $data["username"];
    $email = $data["email"];
    $pass1 = $data["password"];
    $pass2 = $data["password2"];
    // cek konfirmasi password
    if ($pass1 !== $pass2) {
        echo "
        <script> alert('KONFIRMASI PASSWORD TIDAK SESUAI')
        </script>
        ";
        return false;
    }
    // cek username sudah digunakan apa belum
    $hasil = mysqli_query($koneksi,"SELECT username FROM user WHERE username = '$user'");

    if (mysqli_fetch_assoc($hasil)) {
        echo "
        <script> alert('USERNAME TIDAK BISA DIGUNAKAN')
        </script>
        ";

        return false;
    }

    $insert = "INSERT INTO user  VALUES ('','$user','$email','$pass1')";

    mysqli_query($koneksi,$insert);
    return mysqli_affected_rows($koneksi);
}

function displayCart() {
    if (!empty($_SESSION['cart'])) {
        echo "<h2>Keranjang Belanja</h2>";
        echo "<ul>";
        $total = 0;

        foreach ($_SESSION['cart'] as $key => $item) {
            $subtotal = $item['price'] * $item['quantity'];
            $total += $subtotal;

            echo "<li>{$item['name']} (Rp {$item['price']}) - Jumlah: ";
            echo "<form method='post' action='{$_SERVER['PHP_SELF']}'>";
            echo "<input type='hidden' name='id' value='{$item['id']}'>";
            echo "<input type='number' name='quantity' value='{$item['quantity']}' min='1'>";
            echo "<button type='submit' name='update_quantity'>Update</button>";
            echo "<button type='submit' name='remove_from_cart'>Hapus</button>";
            echo "</form>";
            echo "</li>";

            
        }

        echo "</ul>";
        echo "<p>Total Belanja: Rp $total</p>";


        

    } else {
        echo "<p>Keranjang belanja kosong.</p>";
    }
}

// Menampilkan produk yang bisa ditambahkan ke keranjang
function displayProducts() {
    // Dalam aplikasi nyata, data produk mungkin diambil dari database
    $menu = query("SELECT * FROM menus");
    foreach ($menu as $mnu ) {
        echo "<div class='product'>";
        echo "<form method='post' action='{$_SERVER['PHP_SELF']}'>";
        echo "<input type='hidden' name='id' value='{$mnu['id']}'>";
        echo "<input type='hidden' name='nama_menu' value='{$mnu['menu_name']}'>";
        echo "<input type='hidden' name='harga' value='{$mnu['price']}'>";
        echo "<p>{$mnu['menu_name']} (Rp {$mnu['price']})</p>";
        echo "<input type='number' name='quantity' value='1' min='0'>";
        echo "<button type='submit' name='add_to_cart'>Tambahkan ke Keranjang</button>";
        echo "</form>";
        echo "</div>";
    }
    
}

?>