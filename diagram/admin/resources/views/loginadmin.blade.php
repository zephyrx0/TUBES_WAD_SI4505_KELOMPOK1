<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIAGRAM COFFEE ADMIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/loginadmin.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/img/icondiagram.png') }}" type="image/x-icon">
</head>
<body>

    <div class="container-fluid">
        <div class="text-center mt-3">
            <img src="{{ asset('assets/img/logo.png') }}" alt="logo" class="img-fluid w-50">
            <h2 class="fw-bold fs-1 text" style="color:#2F5231;">Login As An Admin</h2>
            <br>
            <?php if (isset($error)) :?>
        <p class="fs-5 text-danger"><br>USERNAME / PASSWORD SALAH</p>
    <?php endif; ?>
        </div>
        <form class="mx-auto mt-0" action="{{ url('/loginadmin') }}" method="post">
          @csrf
            <div class="mb-3 mt-2 justify-content-center text-center">
              <label for="username" class="form-label">USERNAME</label>
              <input type="text" class="form-control" id="username" name = "username">
            </div>
            <div class="mb-3 justify-content-center text-center">
              <label for="password" class="form-label">PASSWORD</label>
              <input type="password" class="form-control" id="password" name ="password">
              
            </div>
            <div class="container justify-content-center text-center">
            <button type="submit" class="btn btn-warning text-white mt-2" name="signin">Sign in</button>
            </div>
            @if(session('error'))
                <p class="fs-5 text-danger"><br>{{ session('error') }}</p>
            @endif
          </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>