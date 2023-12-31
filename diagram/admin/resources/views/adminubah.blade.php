<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN DIAGRAM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/admin.css">

</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand ps-5 ms-3" href="{{ route('admin.dashboard') }}">
            <img src="{{ asset('assets/img/logo.png') }}" alt="logo_diagram" width="100%" height="50">
            </a>
        </div>
        <div class="container">

            <div class="navbar-nav ">              
                <a href="{{ route('reservasi.index') }}" class="nav-link fw-bold ms-3 me-2 align-middle" style="color: #FFF9ED;">RESERVATION</a>
                <a href="#" class="nav-link fw-bold ms-3 me-2 align-middle" style="color: #FFF9ED;">HISTORY</a>
                <a href="{{ route('adminmenu') }}" class="nav-link fw-bold ms-3 me-2 align-middle" style="color: #FFF9ED;">MENU</a>
                <a href="{{ route('logoutadmin') }}" class="nav-link fw-bold ms-3 me-2 align-middle" style="color: #FFF9ED;">LOG OUT</a>
            </div>
        </div>
    </nav>

    <!-- end of navbar -->
    <section>
    <div class="container justify-content-center text-center">
        <h1>EDIT MENU</h1>
        <div class="container mb-3 w-25">
            <form action="{{ route('admin.menu.update', $menu->id) }}" method="post">
                @csrf
                @method('PUT')
                <label for="category" class="form-label">CATEGORY :</label>
                <select name="category" class="form-select" required>
                    <option value="Steak">Steak</option>
                    <option value="Chicken Steak">Chicken Steak</option>
                    <option value="Salad">Salad</option>
                    <option value="Spaghetti">Spaghetti</option>
                    <option value="Rice Curry">Rice Curry</option>
                    <option value="Beef Rice">Beef Rice</option>
                    <option value="Chicken & Dory Rice">Chicken & Dory Rice</option>
                    <option value="Fried Rice & Soup">Fried Rice & Soup</option>
                    <option value="Light Meal">Light Meal</option>
                    <option value="Special Tea">Special Tea</option>
                </select>
                <label for="menu_name" class="form-label">NAMA MENU :</label>
                <input type="text" name="menu_name" id="menu_name" autocomplete="off" class="form-control" value="{{ $menu['menu_name'] }}">
                <label for="menu_desc">DESKRIPSI :</label>
                <textarea name="menu_desc" id="menu_desc" cols="30" rows="3" autocomplete="off" class="form-control">{{ $menu['menu_desc'] }}</textarea>
                <label for="price" class="form-label">HARGA :</label>
                <input type="number" name="price" id="price" class="form-control" value="{{ $menu['price'] }}">
                <button type="submit" name="submit" class="btn btn-success mt-2">Edit Menu</button>
            </form>
        </div>
    </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>