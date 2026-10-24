<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register - SportKu</title>

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
            min-height: 590px;
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
            padding: 45px 50px;
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
            margin-bottom: 25px;
        }

        .alert {
            padding: 13px 15px;
            border-radius: 10px;
            margin-bottom: 18px;
            font-size: 14px;
        }

        .error {
            background: #fef2f2;
            border: 1px solid #fecaca;
            color: #b91c1c;
        }

        .form-group {
            margin-bottom: 16px;
        }

        label {
            display: block;
            margin-bottom: 7px;
            font-size: 14px;
            font-weight: 700;
            color: #334155;
        }

        input {
            width: 100%;
            padding: 13px 15px;
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

        .login {
            text-align: center;
            margin-top: 20px;
            color: #64748b;
            font-size: 14px;
        }

        .login a {
            color: #2563eb;
            font-weight: 700;
            text-decoration: none;
        }

        .login a:hover {
            text-decoration: underline;
        }

        .back {
            text-align: center;
            margin-top: 13px;
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
                🚀
            </div>

            <h1>
                Mulai Perjalanan<br>
                Olahragamu!
            </h1>

            <p>
                Buat akun SportKu dan dapatkan akses
                untuk mengikuti berbagai event olahraga
                di Kabupaten Klaten.
            </p>

            <div class="features">
                <div class="feature">✓ Daftar event olahraga</div>
                <div class="feature">✓ Kelola pendaftaran</div>
                <div class="feature">✓ Pantau status event</div>
            </div>

        </div>


        <!-- BAGIAN KANAN -->
        <div class="right">

            <h2>Buat Akun 👋</h2>

            <p class="subtitle">
                Daftarkan diri kamu untuk mulai menggunakan SportKu.
            </p>


            @if($errors->any())

                <div class="alert error">

                    <strong>Periksa kembali data:</strong>

                    <ul style="margin: 8px 0 0 18px;">

                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach

                    </ul>

                </div>

            @endif


            <form action="/register" method="POST">

                @csrf

                <div class="form-group">

                    <label>Nama Lengkap</label>

                    <input
                        type="text"
                        name="name"
                        value="{{ old('name') }}"
                        placeholder="Masukkan nama lengkap"
                        required
                    >

                </div>


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
                        placeholder="Minimal 6 karakter"
                        required
                    >

                </div>


                <div class="form-group">

                    <label>Konfirmasi Password</label>

                    <input
                        type="password"
                        name="password_confirmation"
                        placeholder="Ulangi password"
                        required
                    >

                </div>


                <button type="submit" class="btn">
                    Daftar Sekarang →
                </button>

            </form>


            <div class="login">

                Sudah punya akun?

                <a href="/login">
                    Login sekarang
                </a>

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