<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - SportKu</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            min-height: 100vh;
            background: linear-gradient(135deg, #0f172a, #1d4ed8, #06b6d4);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .container {
            width: 100%;
            max-width: 950px;
            min-height: 570px;
            background: white;
            border-radius: 24px;
            overflow: hidden;
            display: grid;
            grid-template-columns: 1fr 1fr;
            box-shadow: 0 25px 60px rgba(0, 0, 0, .25);
        }

        /* LEFT */
        .left {
            background: linear-gradient(145deg, #0f172a, #1e3a8a);
            color: white;
            padding: 55px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .logo {
            font-size: 30px;
            font-weight: 800;
            margin-bottom: 45px;
        }

        .logo span {
            color: #38bdf8;
        }

        .icon {
            font-size: 65px;
            margin-bottom: 20px;
        }

        .left h1 {
            font-size: 38px;
            line-height: 1.15;
            margin-bottom: 18px;
        }

        .left p {
            color: #cbd5e1;
            line-height: 1.7;
            font-size: 15px;
            max-width: 390px;
        }

        .features {
            margin-top: 30px;
        }

        .feature {
            margin-bottom: 12px;
            color: #e2e8f0;
            font-size: 14px;
        }

        /* RIGHT */
        .right {
            padding: 55px 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .right h2 {
            font-size: 30px;
            color: #0f172a;
            margin-bottom: 8px;
        }

        .subtitle {
            color: #64748b;
            font-size: 14px;
            margin-bottom: 30px;
        }

        .alert {
            padding: 13px 15px;
            border-radius: 10px;
            margin-bottom: 18px;
            font-size: 14px;
        }

        .success {
            background: #ecfdf5;
            border: 1px solid #a7f3d0;
            color: #047857;
        }

        .error {
            background: #fef2f2;
            border: 1px solid #fecaca;
            color: #b91c1c;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            font-weight: 700;
            color: #334155;
        }

        input {
            width: 100%;
            padding: 14px 15px;
            border: 1px solid #cbd5e1;
            border-radius: 11px;
            font-size: 14px;
            outline: none;
            transition: .2s;
        }

        input:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, .1);
        }

        .btn {
            width: 100%;
            padding: 14px;
            border: none;
            border-radius: 11px;
            background: linear-gradient(135deg, #2563eb, #06b6d4);
            color: white;
            font-size: 15px;
            font-weight: 700;
            cursor: pointer;
            transition: .2s;
            margin-top: 5px;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(37, 99, 235, .25);
        }

        .register {
            text-align: center;
            margin-top: 25px;
            color: #64748b;
            font-size: 14px;
        }

        .register a {
            color: #2563eb;
            font-weight: 700;
            text-decoration: none;
        }

        .register a:hover {
            text-decoration: underline;
        }

        .back {
            text-align: center;
            margin-top: 15px;
        }

        .back a {
            color: #64748b;
            text-decoration: none;
            font-size: 13px;
        }

        .back a:hover {
            color: #2563eb;
        }

        @media (max-width: 750px) {
            .container {
                grid-template-columns: 1fr;
                max-width: 500px;
            }

            .left {
                padding: 35px;
                min-height: 300px;
            }

            .logo {
                margin-bottom: 25px;
            }

            .left h1 {
                font-size: 30px;
            }

            .features {
                display: none;
            }

            .right {
                padding: 40px 30px;
            }
        }
    </style>
</head>

<body>

    <div class="container">

        <!-- BAGIAN KIRI -->
        <div class="left">

            <div class="logo">
                ⚽ Sport<span>Ku</span>
            </div>

            <div class="icon">
                🏆
            </div>

            <h1>
                Siap Ikuti<br>
                Event Olahraga?
            </h1>

            <p>
                Login ke SportKu dan temukan berbagai event
                olahraga menarik di Kabupaten Klaten.
            </p>

            <div class="features">
                <div class="feature">✓ Temukan event olahraga</div>
                <div class="feature">✓ Daftar event dengan mudah</div>
                <div class="feature">✓ Pantau status pendaftaran</div>
            </div>

        </div>


        <!-- BAGIAN KANAN -->
        <div class="right">

            <h2>Selamat Datang 👋</h2>

            <p class="subtitle">
                Silakan login ke akun SportKu kamu.
            </p>


            @if(session('success'))
                <div class="alert success">
                    {{ session('success') }}
                </div>
            @endif


            @if($errors->any())
                <div class="alert error">
                    {{ $errors->first() }}
                </div>
            @endif


            <form action="/login" method="POST">

                @csrf

                <div class="form-group">
                    <label>Email</label>

                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="Masukkan email"
                        required
                    >
                </div>


                <div class="form-group">
                    <label>Password</label>

                    <input
                        type="password"
                        name="password"
                        placeholder="Masukkan password"
                        required
                    >
                </div>


                <button type="submit" class="btn">
                    Login →
                </button>

            </form>


            <div class="register">
                Belum punya akun?
                <a href="/register">Daftar sekarang</a>
            </div>


            <div class="back">
                <a href="/">
                    ← Kembali ke Beranda
                </a>
            </div>

        </div>

    </div>

</body>
</html>