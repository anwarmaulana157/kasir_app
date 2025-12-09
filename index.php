<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Kasir App</title>

    <!-- Bootstrap -->
    <link href="assets/libs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f7f7f7;
            font-family: 'Arial', sans-serif;
        }

        /* Bagian kiri dengan background full */
        .login-left {
            background-image: url("assets/images/cover.jpg");
            background-size: cover;
            /* gambar memenuhi area */
            background-position: center;
            /* fokus tengah */
            background-repeat: no-repeat;
            height: 100vh;
            /* tinggi full layar */
            width: 100%;
            /* pastikan full lebar kolom */
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
        }

        /* Jika masih memakai <img> sebagai fallback */
        .login-left img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* gambar tidak gepeng */
            border-radius: 10px 0 0 10px;
            /* opsional */
        }


        .login-right {
            background: #ffffff;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px;
        }

        .login-box {
            width: 100%;
            max-width: 380px;
        }

        .login-title {
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .subtitle {
            font-size: 14px;
            color: #555;
        }

        .btn-login {
            background: #00a86b;
            color: #fff;
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            border: none;
            font-size: 16px;
            margin-top: 15px;
        }

        .btn-login:hover {
            background: #008f59;
        }

        .google-login {
            margin-top: 15px;
            border: 1px solid #ddd;
            background: #fff;
            padding: 8px;
            border-radius: 8px;
            cursor: pointer;
        }

        .google-login img {
            width: 25px;
        }

        .small-link {
            float: right;
            font-size: 12px;
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row">

            <!-- BAGIAN KIRI -->
            <div class="col-lg-7 login-left d-none d-lg-flex">
                <img src="assets/images/cover.jpg" alt="POS Mockup">
            </div>

            <!-- BAGIAN KANAN (FORM LOGIN) -->
            <div class="col-lg-5 col-12 login-right">
                <div class="login-box">

                    <div class="text-center mb-4">
                        <img src="assets/images/kasir-ku-text.png" width="100">
                    </div>

                    <h3 class="login-title text-center">Login</h3>
                    <p class="subtitle text-center">Masuk sebagai Owner atau Staff</p>

                    <form action="cek_login.php" method="POST" class="mt-4">

                        <label>Email</label>
                        <input type="email" name="email" class="form-control mb-3"
                            placeholder="Email" required>

                        <label>Password</label>
                        <input type="password" name="password" class="form-control mb-2"
                            placeholder="Password" required>

                        <a href="#" class="small-link">Lupa Password?</a>

                        <button type="submit" class="btn-login">Login</button>

                        <div class="text-center mt-3">
                            <span>Atau login dengan Google</span>
                        </div>

                        <div class="google-login text-center mt-2">
                            <img src="assets/images/icon-google.png" alt="Google Login">
                        </div>

                        <div class="text-center mt-3">
                            Belum punya akun? <a href="daftar.php" class="text-success">Daftar disini</a>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

</body>

</html>