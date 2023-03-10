<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@800&family=Poppins:wght@400;500;700;800&display=swap"
        rel="stylesheet">

    <!-- style -->
    <link rel="stylesheet" href="css/login.css">

    <!-- logo -->
    <link rel="icon" href="image/logo.png" type="image/x-icon">

    <title>Login</title>
</head>

<body>
    <div class="judul">
        <img src="/image/logo.png">
        <!-- <img src="/image/Rectangle.png" class="pembatas"> -->
        <img src="https://storage.googleapis.com/uas_komputawan/Rectangle.png" alt="Rectangle.png" class="pembatas">
        <div class="nama">
            <h2 class="siakad">SISTEM INFORMASI AKADEMIK MAN 1</h2>
            <h2 class="kota">KOTA MALANG</h2>
        </div>
    </div>
    <div class="box">
    <form action="{{ route('login') }}" method="post">
            @csrf
        <input type="text" class="username" name="nidn" placeholder="Username">
        <input type="text" class="password" name="password" placeholder="Password">
        </form>
        <button class="btn">Masuk</button>
        <p class="nb">nb : masukan password dengan tanggal lahir anda</p>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
