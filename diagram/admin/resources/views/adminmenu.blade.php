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
        <div class="container menu">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-center">Daftar Menu</h1>
                        </div>
                        <div class="card-body">
                            <table class="table mt-3">
                                <thead>
                                    <tr>
                                        <th scope="col" >No</th>
                                        <th scope="col" class="col-2">Category</th>
                                        <th scope="col" class="col-2">Menu Name</th>
                                        <th scope="col" class="col-4">Description</th>
                                        <th scope="col" class="col-2">Price</th>
                                        <th scope="col" class="col-2">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datamenu as $menu)
                                        <tr>
                                            <th scope="row" class="align-middle">{{ $loop->iteration }}</th>
                                            <td class="align-middle">{{ $menu->category }}</td>
                                            <td class="align-middle">{{ $menu->menu_name }}</td>
                                            <td class="fixed-width-column align-middle">{{ $menu->menu_desc }}</td>
                                            <td class="align-middle">{{ $menu->price }}</td>
                                            <td class="align-middle">
                                                <a href="{{ route('admin.menu.edit', $menu->id) }}" class="btn btn-primary">Edit</a>
                                                <form action="{{ route('admin.menu.destroy', $menu->id) }}" method="post" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
    
                    <div class="card mt-3">
                        <div class="card-header">
                            <h1>Tambah Menu</h1>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.menu.store') }}" method="post">
                                @csrf
    
                                <div class="mb-3">
                                    <label for="category" class="form-label">Category:</label>
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
                                </div>
    
                                <div class="mb-3">
                                    <label for="menu_name" class="form-label">Menu Name:</label>
                                    <input type="text" name="menu_name" class="form-control" required>
                                </div>
    
                                <div class="mb-3">
                                    <label for="menu_desc" class="form-label">Description:</label>
                                    <textarea name="menu_desc" class="form-control" rows="3" required></textarea>
                                </div>
    
                                <div class="mb-3">
                                    <label for="price" class="form-label">Price:</label>
                                    <input type="text" name="price" class="form-control" required>
                                </div>
    
                                <button type="submit" class="btn btn-success">Tambah Menu</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>