<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN DIAGRAM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">

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
            @if (session('loginadmin') && is_object(session('admin')))
                <p>Welcome, {{ session('admin')->username }}</p>
            @endif
            <h1 class="fw-bold text-success mt-5 pb-4"> Selamat Datang</h1>
            <div class="card w-25 mb-3 container">
                <div class="card-body">
                    <h5 class="card-title fw-bold">RESERVASI</h5>
                    <p class="card-text">Kelola Reservasi aktif</p>
                    <a href="{{ route('reservasi.index') }}" class="btn btn-success">View</a>
                </div>
            </div>
            <div class="card w-25 mb-3 container">
                <div class="card-body">
                    <h5 class="card-title fw-bold">HISTORI</h5>
                    <p class="card-text">Histori Reservasi</p>
                    <a href="#" class="btn btn-success">View</a>
                </div>
            </div>
            <div class="card w-25 mb-3 container">
                <div class="card-body">
                    <h5 class="card-title fw-bold">MENU</h5>
                    <p class="card-text">Kelola Menu</p>
                    <a href="{{ route('adminmenu') }}" class="btn btn-success">View</a>
                </div>
            </div>

        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>