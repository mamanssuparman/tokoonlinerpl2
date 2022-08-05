<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Register</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <h3>Register Member Baru</h3>
            <form action="/register" method="POST">
                @csrf
                <div class="col-md-4">
                    <label for="name">Nama</label>
                    <input type="text" name="name" class="form form-control">
                    <br>
                    <label for="name">Email</label>
                    <input type="email" name="email" class="form form-control" >
                    <br>
                    <label for="phone">Nomor Telepon</label>
                    <input type="text" name="phone" class="form form-control" required>
                    <br>
                    <label for="name">Alamat</label>
                    <input type="text" name="alamat" class="form form-control" required>
                    <br>
                    <label for="name">Password</label>
                    <input type="password" name="password" class="form form-control" required>
                    <br>
                    <button class="btn btn-outline-primary btn-md" type="submit">Register</button>
                    <a href="/"><button class="btn btn-outline-warning btn-md" type="button">Kembali</button></a>
                </div>
            </form>
        </div>
    </div>
    <script src="/js/bootstrap.min.js"></script>
</body>

</html>
