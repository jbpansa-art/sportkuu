
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Saya - SportKu</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            margin: 0;
            background: #f1f5f9;
            color: #1e293b;
        }

        nav {
            background: #0f172a;
            color: white;
            padding: 20px 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        .logo {
            font-size: 25px;
            font-weight: bold;
        }

        .logo span {
            color: #38bdf8;
        }

        .nav-links {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 18px;
        }

        .nav-links a {
            color: #cbd5e1;
            text-decoration: none;
            font-size: 14px;
        }

        .nav-links a:hover,
        .nav-links a.active {
            color: #38bdf8;
        }

        .logout-btn {
            background: #ef4444;
            color: white;
            border: none;
            padding: 9px 13px;
            border-radius: 7px;
            cursor: pointer;
        }

        .container {
            width: 90%;
            max-width: 1000px;
            margin: 35px auto;
        }

        .header {
            background: linear-gradient(135deg, #0f172a, #2563eb);
            color: white;
            padding: 30px;
            border-radius: 16px;
            margin-bottom: 22px;
        }

        .header h1 {
            margin: 0 0 8px;
        }

        .header p {
            margin: 0;
            color: #dbeafe;
        }

        .profile-card {
            background: white;
            padding: 28px;
            border-radius: 15px;
            box-shadow: 0 5px 18px #0f172a0d;
            margin-bottom: 22px;
        }

        .profile-top {
            display: flex;
            align-items: center;
            gap: 20px;
            padding-bottom: 22px;
            border-bottom: 1px solid #e2e8f0;
        }

        .avatar {
            width: 75px;
            height: 75px;
            border-radius: 50%;
            background: #dbeafe;
            color: #1d4ed8;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            font-weight: bold;
        }

        .profile-top h2 {
            margin: 0 0 7px;
        }

        .profile-top p {
            margin: 0;
            color: #64748b;
        }

        .info {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 18px;
            margin-top: 22px;
        }

        .info-item {
            padding: 17px;
            background: #f8fafc;
            border-radius: 10px;
        }

        .info-item small {
            display: block;
            color: #64748b;
            margin-bottom: 8px;
        }

        .info-item strong {
            overflow-wrap: anywhere;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
            margin-bottom: 22px;
        }

        .stat {
            background: white;
            padding: 22px;
            border-radius: 13px;
            border: 1px solid #e2e8f0;
        }

        .stat small {
            color: #64748b;
        }

        .stat h2 {
            margin: 10px 0 0;
            font-size: 28px;
        }

        .blue { color: #2563eb; }
        .green { color: #16a34a; }
        .yellow { color: #d97706; }

        .btn {
            display: inline-block;
            background: #2563eb;
            color: white;
            text-decoration: none;
            padding: 12px 17px;
            border-radius: 8px;
            font-weight: bold;
        }

        .btn:hover {
            background: #1d4ed8;
        }

        @media (max-width: 650px) {
            nav {
                padding: 18px 5%;
            }

            .container {
                width: 92%;
            }

            .info,
            .stats {
                grid-template-columns: 1fr;
            }

            .profile-top {
                align-items: flex-start;
                flex-direction: column;
            }
        }
    </style>
</head>

<body>

<nav>
    <div class="logo">Sport<span>Ku</span></div>

    <div class="nav-links">
        <a href="/">Beranda</a>
        <a href="/event">Event</a>
        <a href="/dashboard">Dashboard</a>
        <a href="/status-pendaftaran">Status Pendaftaran</a>
        <a href="/profil" class="active">👤 Profil</a>

        <form action="/logout" method="POST" style="margin:0;">
            @csrf
            <button type="submit" class="logout-btn">Logout</button>
        </form>
    </div>
</nav>

<div class="container">

    <div class="header">
        <h1>Profil Saya 👤</h1>
        <p>Informasi akun dan aktivitas pendaftaran event olahraga kamu.</p>
    </div>

    <div class="profile-card">
        <div class="profile-top">
            <div class="avatar">
                {{ strtoupper(substr($user->name, 0, 1)) }}
            </div>

            <div>
                <h2>{{ $user->name }}</h2>
                <p>{{ $user->email }}</p>
            </div>
        </div>

        <div class="info">
            <div class="info-item">
                <small>Nama Lengkap</small>
                <strong>{{ $user->name }}</strong>
            </div>

            <div class="info-item">
                <small>Email Akun</small>
                <strong>{{ $user->email }}</strong>
            </div>

            <div class="info-item">
                <small>ID Pengguna</small>
                <strong>{{ $user->id }}</strong>
            </div>

            <div class="info-item">
                <small>Tanggal Bergabung</small>
                <strong>{{ $user->created_at ? $user->created_at->format('d-m-Y') : '-' }}</strong>
            </div>
        </div>
    </div>

    <div class="stats">
        <div class="stat">
            <small>Total Pendaftaran</small>
            <h2 class="blue">{{ $pendaftarans->count() }}</h2>
        </div>

        <div class="stat">
            <small>Diterima</small>
            <h2 class="green">
                {{ $pendaftarans->where('status', 'Diterima')->count() }}
            </h2>
        </div>

        <div class="stat">
            <small>Menunggu</small>
            <h2 class="yellow">
                {{ $pendaftarans->where('status', 'Menunggu')->count() }}
            </h2>
        </div>
    </div>

    <a href="/event" class="btn">🏆 Cari Event Olahraga</a>

</div>

</body>
</html>
