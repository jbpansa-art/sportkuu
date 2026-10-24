<!DOCTYPE html>

<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard - SportKu</title>

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

        /* =========================

           NAVBAR

        ========================= */

        nav {

            height: 72px;

            background: #0f172a;

            display: flex;

            align-items: center;

            justify-content: space-between;

            padding: 0 7%;

            color: white;

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

            align-items: center;

            gap: 20px;

        }

        .nav-links a {

            color: #cbd5e1;

            text-decoration: none;

            font-size: 14px;

            transition: 0.2s;

        }

        .nav-links a:hover {

            color: white;

        }

        .logout-btn {

            border: none;

            background: #ef4444;

            color: white;

            padding: 9px 14px;

            border-radius: 7px;

            cursor: pointer;

            font-weight: bold;

            transition: 0.2s;

        }

        .logout-btn:hover {

            background: #dc2626;

            transform: translateY(-1px);

        }

        /* =========================

           CONTAINER

        ========================= */

        .container {

            width: 88%;

            max-width: 1200px;

            margin: auto;

            padding: 35px 0 60px;

        }

        /* =========================

           WELCOME

        ========================= */

        .welcome {

            position: relative;

            overflow: hidden;

            background:

                radial-gradient(

                    circle at 90% 10%,

                    rgba(96, 165, 250, 0.35),

                    transparent 30%

                ),

                linear-gradient(

                    135deg,

                    #0f172a,

                    #1d4ed8

                );

            color: white;

            padding: 35px;

            border-radius: 18px;

            margin-bottom: 25px;

            box-shadow:

                0 12px 28px rgba(15, 23, 42, 0.15);

        }

        .welcome::before {

            content: "";

            position: absolute;

            width: 180px;

            height: 180px;

            border-radius: 50%;

            background: rgba(255,255,255,0.06);

            right: -50px;

            top: -80px;

        }

        .welcome-content {

            position: relative;

            z-index: 2;

        }

        .welcome h1 {

            margin: 0 0 8px;

            font-size: 30px;

        }

        .welcome p {

            margin: 0;

            color: #dbeafe;

            font-size: 14px;

            line-height: 1.6;

        }

        .welcome-badge {

            display: inline-block;

            margin-bottom: 15px;

            padding: 7px 12px;

            border-radius: 20px;

            background: rgba(255,255,255,0.12);

            border: 1px solid rgba(255,255,255,0.15);

            font-size: 12px;

            font-weight: bold;

        }

        /* =========================

           STATISTIK

        ========================= */

        .stats {

            display: grid;

            grid-template-columns:

                repeat(4, 1fr);

            gap: 18px;

            margin-bottom: 25px;

        }

        .stat {

            position: relative;

            overflow: hidden;

            padding: 22px;

            min-height: 125px;

            border-radius: 15px;

            color: white;

            transition:

                transform 0.3s ease,

                box-shadow 0.3s ease;

            cursor: pointer;

            box-shadow:

                0 8px 20px rgba(15, 23, 42, 0.10);

        }

        .stat::before {

            content: "";

            position: absolute;

            width: 110px;

            height: 110px;

            border-radius: 50%;

            background: rgba(255,255,255,0.14);

            right: -35px;

            top: -45px;

            transition: 0.4s;

        }

        .stat:hover {

            transform:

                scale(1.04)

                translateY(-5px);

            box-shadow:

                0 18px 32px rgba(15,23,42,0.18);

        }

        .stat:hover::before {

            transform: scale(1.6);

        }

        .stat-blue {

            background:

                linear-gradient(

                    135deg,

                    #2563eb,

                    #06b6d4

                );

        }

        .stat-yellow {

            background:

                linear-gradient(

                    135deg,

                    #d97706,

                    #f59e0b

                );

        }

        .stat-green {

            background:

                linear-gradient(

                    135deg,

                    #059669,

                    #22c55e

                );

        }

        .stat-red {

            background:

                linear-gradient(

                    135deg,

                    #dc2626,

                    #f43f5e

                );

        }

        .stat-icon {

            position: relative;

            z-index: 2;

            width: 42px;

            height: 42px;

            display: flex;

            align-items: center;

            justify-content: center;

            background: rgba(255,255,255,0.16);

            border-radius: 11px;

            font-size: 20px;

            margin-bottom: 12px;

        }

        .stat-title {

            position: relative;

            z-index: 2;

            font-size: 11px;

            font-weight: bold;

            opacity: 0.9;

        }

        .stat-number {

            position: relative;

            z-index: 2;

            font-size: 30px;

            font-weight: bold;

            margin-top: 3px;

        }

        /* =========================

           SECTION

        ========================= */

        .section {

            background: white;

            border-radius: 15px;

            overflow: hidden;

            box-shadow:

                0 7px 20px rgba(15,23,42,0.07);

        }

        .section-top {

            display: flex;

            align-items: center;

            justify-content: space-between;

            padding: 22px 25px;

            border-bottom:

                1px solid #e5e7eb;

        }

        .section-top h2 {

            margin: 0;

            color: #0f172a;

            font-size: 20px;

        }

        .section-top p {

            margin: 5px 0 0;

            color: #64748b;

            font-size: 13px;

        }

        .btn-event {

            display: inline-block;

            background: #2563eb;

            color: white;

            text-decoration: none;

            padding: 10px 14px;

            border-radius: 8px;

            font-size: 13px;

            font-weight: bold;

            transition: 0.2s;

        }

        .btn-event:hover {

            background: #1d4ed8;

            transform: translateY(-1px);

        }

        /* =========================

           PENDAFTARAN

        ========================= */

        .registration-list {

            padding: 20px;

        }

        .registration {

            border: 1px solid #e5e7eb;

            border-radius: 11px;

            padding: 18px;

            margin-bottom: 13px;

            transition: 0.2s;

        }

        .registration:last-child {

            margin-bottom: 0;

        }

        .registration:hover {

            background: #f8fbff;

            border-color: #bfdbfe;

            transform: translateY(-2px);

            box-shadow:

                0 7px 18px rgba(37,99,235,0.07);

        }

        .event-name {

            font-size: 17px;

            font-weight: bold;

            color: #0f172a;

            margin-bottom: 9px;

        }

        .event-info {

            color: #64748b;

            font-size: 13px;

            margin-bottom: 6px;

        }

        .bottom {

            display: flex;

            justify-content: space-between;

            align-items: center;

            margin-top: 13px;

            padding-top: 13px;

            border-top:

                1px solid #e5e7eb;

        }

        /* =========================

           STATUS

        ========================= */

        .status {

            display: inline-block;

            padding: 7px 11px;

            border-radius: 20px;

            font-size: 11px;

            font-weight: bold;

        }

        .menunggu {

            background: #fef3c7;

            color: #92400e;

        }

        .diterima {

            background: #dcfce7;

            color: #166534;

        }

        .ditolak {

            background: #fee2e2;

            color: #b91c1c;

        }

        .detail-btn {

            color: #2563eb;

            text-decoration: none;

            font-size: 12px;

            font-weight: bold;

        }

        .detail-btn:hover {

            text-decoration: underline;

        }

        /* =========================

           EMPTY

        ========================= */

        .empty {

            text-align: center;

            padding: 55px 20px;

            color: #64748b;

        }

        .empty-icon {

            font-size: 42px;

            margin-bottom: 10px;

        }

        .empty strong {

            display: block;

            color: #334155;

            margin-bottom: 5px;

        }

        .empty p {

            font-size: 13px;

            margin-bottom: 18px;

        }

        /* =========================

           RESPONSIVE

        ========================= */

        @media (max-width: 900px) {

            .stats {

                grid-template-columns:

                    repeat(2, 1fr);

            }

        }

        @media (max-width: 700px) {

            nav {
                height: auto;
                min-height: 72px;
                padding: 15px 4%;
                flex-direction: column;
                align-items: flex-start;
                gap: 14px;
            }

            .nav-links {
                width: 100%;
                display: flex;
                flex-wrap: wrap;
                gap: 12px;
            }

            .nav-links a {
                display: inline-block;
                font-size: 12px;
            }

            .container {

                width: 92%;

            }

            .stats {

                grid-template-columns: 1fr;

            }

            .section-top {

                flex-direction: column;

                align-items: flex-start;

                gap: 15px;

            }

            .bottom {

                flex-direction: column;

                align-items: flex-start;

                gap: 10px;

            }

            .welcome {

                padding: 28px 22px;

            }

            .welcome h1 {

                font-size: 25px;

            }

        }

    </style>

</head>

<body>

    <!-- =========================

         NAVBAR

    ========================= -->

    <nav>

        <div class="logo">

            Sport<span>Ku</span>

        </div>

        <div class="nav-links">

            <a href="/">

                Beranda

            </a>

            <a href="/event">

                Event

            </a>

            <a href="/status-pendaftaran">

                Status Pendaftaran

            </a>

            <a href="/profil">👤 Profil</a>

            <form

                action="/logout"

                method="POST"

                style="margin: 0;"

            >

                @csrf

                <button

                    type="submit"

                    class="logout-btn"

                >

                    Logout

                </button>

            </form>

        </div>

    </nav>

    <div class="container">

        <!-- =========================

             WELCOME

        ========================= -->

        <div class="welcome">

            <div class="welcome-content">

                <div class="welcome-badge">

                    ⚽ DASHBOARD USER

                </div>

                <h1>

                    Halo, {{ $user->name }} 👋

                </h1>

                <p>

                    Selamat datang di Dashboard SportKu.

                    Pantau pendaftaran dan temukan event olahraga

                    di Kabupaten Klaten.

                </p>

            </div>

        </div>

        <!-- =========================

             STATISTIK

        ========================= -->

        <div class="stats">

            <!-- TOTAL -->

            <div class="stat stat-blue">

                <div class="stat-icon">

                    📋

                </div>

                <div class="stat-title">

                    TOTAL PENDAFTARAN

                </div>

                <div class="stat-number">

                    {{ $totalPendaftaran }}

                </div>

            </div>

            <!-- MENUNGGU -->

            <div class="stat stat-yellow">

                <div class="stat-icon">

                    ⏳

                </div>

                <div class="stat-title">

                    MENUNGGU

                </div>

                <div class="stat-number">

                    {{ $menunggu }}

                </div>

            </div>

            <!-- DITERIMA -->

            <div class="stat stat-green">

                <div class="stat-icon">

                    ✓

                </div>

                <div class="stat-title">

                    DITERIMA

                </div>

                <div class="stat-number">

                    {{ $diterima }}

                </div>

            </div>

            <!-- DITOLAK -->

            <div class="stat stat-red">

                <div class="stat-icon">

                    ✕

                </div>

                <div class="stat-title">

                    DITOLAK

                </div>

                <div class="stat-number">

                    {{ $ditolak }}

                </div>

            </div>

        </div>

        <!-- =========================

             PENDAFTARAN SAYA

        ========================= -->

        <div class="section">

            <div class="section-top">

                <div>

                    <h2>

                        Pendaftaran Saya

                    </h2>

                    <p>

                        Pantau status event yang sudah kamu daftarkan.

                    </p>

                </div>

                <a

                    href="/event"

                    class="btn-event"

                >

                    + Cari Event

                </a>

            </div>

            @if($pendaftarans->count() > 0)

                <div class="registration-list">

                    @foreach($pendaftarans as $pendaftaran)

                        <div class="registration">

                            <div class="event-name">

                                {{ $pendaftaran->event->nama_event }}

                            </div>

                            <div class="event-info">

                                📅

                                {{ \Carbon\Carbon::parse($pendaftaran->event->tanggal)->format('d-m-Y') }}

                            </div>

                            <div class="event-info">

                                📍

                                {{ $pendaftaran->event->lokasi }}

                            </div>

                            <div class="event-info">

                                👤

                                {{ $pendaftaran->nama_peserta }}

                            </div>

                            @if($pendaftaran->nama_sekolah)

                                <div class="event-info">

                                    🏫

                                    {{ $pendaftaran->nama_sekolah }}

                                    @if($pendaftaran->tingkatan_sekolah)

                                        ({{ $pendaftaran->tingkatan_sekolah }})

                                    @endif

                                </div>

                            @endif

                            <div class="bottom">

                                <div>

                                    @if($pendaftaran->status == 'Menunggu')

                                        <span class="status menunggu">

                                            ⏳ Menunggu

                                        </span>

                                    @elseif($pendaftaran->status == 'Diterima')

                                        <span class="status diterima">

                                            ✓ Diterima

                                        </span>

                                    @else

                                        <span class="status ditolak">

                                            ✕ Ditolak

                                        </span>

                                    @endif

                                </div>

                                <a

                                    href="/event/{{ $pendaftaran->event_id }}"

                                    class="detail-btn"

                                >

                                    Lihat Detail Event →

                                </a>

                            </div>

                        </div>

                    @endforeach

                </div>

            @else

                <div class="empty">

                    <div class="empty-icon">

                        🏆

                    </div>

                    <strong>

                        Belum Ada Pendaftaran

                    </strong>

                    <p>

                        Kamu belum mendaftar event olahraga.

                    </p>

                    <a

                        href="/event"

                        class="btn-event"

                    >

                        Lihat Event

                    </a>

                </div>

            @endif

        </div>

    </div>

</body>

</html>