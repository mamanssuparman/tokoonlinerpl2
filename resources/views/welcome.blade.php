<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Login Applikasi</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 table-responsive">
                <h3>Login Aplikasi Toko Online KU</h3>
                <form action="/login" method="POST">
                    @csrf
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form form-control" placeholder="username">
                    <br>
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form form-control" placeholder="password">
                    <br>
                    <button type="submit" name="btn_login" class="btn btn-outline-danger btn-lg">Login</button>
                    <br>
                </form>
                <small>jika belum mempunyai accoutn silahkan daftar <a href="/register" class="text-decoration-none">
                        disini.!</a></small>
            </div>
        </div>
    </div>
    <script src="/js/bootstrap.min.js"></script>
</body>

</html>
