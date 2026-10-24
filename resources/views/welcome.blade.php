<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SportKu - Event Olahraga Kabupaten Klaten</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
            scroll-behavior: smooth;
        }

        body {
            background: #f8fafc;
            color: #0f172a;
        }


        /* =========================
           NAVBAR
        ========================= */

        nav {
            position: sticky;
            top: 0;
            z-index: 1000;

            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(12px);

            border-bottom: 1px solid #e5e7eb;
        }

        .nav-container {
            max-width: 1200px;
            margin: auto;

            min-height: 72px;
            padding: 0 25px;

            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            text-decoration: none;

            font-size: 25px;
            font-weight: 800;

            color: #2563eb;

            display: flex;
            align-items: center;
            gap: 8px;
        }

        .logo-icon {
            width: 38px;
            height: 38px;

            background: #2563eb;
            color: white;

            border-radius: 11px;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 20px;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .nav-menu a {
            text-decoration: none;

            color: #475569;

            font-size: 14px;
            font-weight: 600;

            padding: 10px 14px;

            border-radius: 9px;

            transition: 0.2s;
        }

        .nav-menu a:hover {
            background: #eff6ff;
            color: #2563eb;
        }

        .btn-login {
            border: 1px solid #2563eb;
            color: #2563eb !important;
            margin-left: 5px;
        }

        .btn-login:hover {
            background: #eff6ff !important;
        }

        .btn-register {
            background: #2563eb;
            color: white !important;
        }

        .btn-register:hover {
            background: #1d4ed8 !important;
        }

        .btn-logout {
            border: none;

            background: #ef4444;
            color: white;

            padding: 10px 16px;

            border-radius: 9px;

            font-weight: 600;

            cursor: pointer;

            margin-left: 5px;
        }

        .btn-logout:hover {
            background: #dc2626;
        }


        /* =========================
           HERO
        ========================= */

        .hero {
            background:
                radial-gradient(
                    circle at 85% 20%,
                    rgba(96, 165, 250, 0.35),
                    transparent 30%
                ),
                linear-gradient(
                    135deg,
                    #0f3fa8,
                    #2563eb 55%,
                    #3b82f6
                );

            color: white;

            min-height: 650px;

            display: flex;
            align-items: center;

            padding: 65px 25px 80px;
        }

        .hero-container {
            max-width: 1200px;
            width: 100%;

            margin: auto;

            display: grid;

            grid-template-columns: 1.2fr 0.8fr;

            gap: 50px;

            align-items: center;
        }


        /* =========================
           HERO LEFT
        ========================= */

        .badge {
            display: inline-block;

            background: rgba(255, 255, 255, 0.15);

            border: 1px solid rgba(255, 255, 255, 0.25);

            padding: 9px 15px;

            border-radius: 30px;

            font-size: 13px;

            font-weight: 600;

            margin-bottom: 18px;
        }


        /* =========================
           BANNER OLAHRAGA
           UKURAN MENGIKUTI FOTO ASLI
           1584 x 672
        ========================= */

        .hero-photo {
            display: block;

            width: 100%;
            max-width: 620px;

            height: auto;

            aspect-ratio: 1584 / 672;

            object-fit: contain;

            object-position: center;

            border-radius: 16px;

            margin-bottom: 20px;

            box-shadow:
                0 12px 30px rgba(0, 0, 0, 0.18);
        }


        .hero h1 {
            font-size: 54px;

            line-height: 1.08;

            letter-spacing: -1.5px;

            margin-bottom: 20px;
        }

        .hero h1 span {
            color: #bfdbfe;
        }

        .hero p {
            max-width: 620px;

            font-size: 17px;

            line-height: 1.7;

            color: #dbeafe;

            margin-bottom: 28px;
        }

        .hero-buttons {
            display: flex;

            gap: 12px;

            flex-wrap: wrap;
        }

        .btn-primary {
            display: inline-block;

            background: white;

            color: #2563eb;

            padding: 14px 22px;

            border-radius: 10px;

            text-decoration: none;

            font-weight: 700;

            transition: 0.2s;
        }

        .btn-primary:hover {
            transform: translateY(-2px);

            box-shadow:
                0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .btn-outline {
            display: inline-block;

            color: white;

            border: 1px solid rgba(255, 255, 255, 0.4);

            padding: 14px 22px;

            border-radius: 10px;

            text-decoration: none;

            font-weight: 600;

            transition: 0.2s;
        }

        .btn-outline:hover {
            background: rgba(255, 255, 255, 0.1);
        }


        /* =========================
           HERO CARD
        ========================= */

        .hero-card {
            background: rgba(255, 255, 255, 0.12);

            border: 1px solid rgba(255, 255, 255, 0.2);

            border-radius: 22px;

            padding: 28px;

            backdrop-filter: blur(10px);

            box-shadow:
                0 20px 50px rgba(0, 0, 0, 0.15);

            transition: 0.3s;
        }

        .hero-card:hover {
            transform: translateY(-5px);

            box-shadow:
                0 25px 55px rgba(0, 0, 0, 0.20);
        }

        .hero-card-title {
            font-size: 14px;

            color: #bfdbfe;

            margin-bottom: 18px;
        }

        .hero-card h2 {
            font-size: 28px;

            margin-bottom: 10px;
        }

        .hero-card p {
            font-size: 14px;

            margin-bottom: 22px;

            color: #dbeafe;
        }

        .hero-info {
            display: flex;

            flex-direction: column;

            gap: 10px;
        }

        .hero-info-item {
            background: rgba(255, 255, 255, 0.1);

            padding: 13px 15px;

            border-radius: 10px;

            font-size: 14px;
        }


        /* =========================
           STATS
        ========================= */

        .stats {
            max-width: 1100px;

            margin: -45px auto 0;

            position: relative;

            z-index: 5;

            padding: 0 20px;
        }

        .stats-container {
            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 18px;
        }

        .stat {
            position: relative;

            padding: 28px 20px;

            text-align: center;

            border-radius: 18px;

            color: white;

            overflow: hidden;

            transition:
                transform 0.3s ease,
                box-shadow 0.3s ease;

            cursor: pointer;
        }

        .stat::before {
            content: "";

            position: absolute;

            width: 120px;
            height: 120px;

            background: rgba(255, 255, 255, 0.15);

            border-radius: 50%;

            top: -55px;
            right: -35px;

            transition: 0.4s;
        }

        .stat:hover {
            transform: scale(1.06) translateY(-7px);

            box-shadow:
                0 18px 35px rgba(15, 23, 42, 0.20);
        }

        .stat:hover::before {
            transform: scale(1.7);
        }

        .stat:nth-child(1) {
            background:
                linear-gradient(
                    135deg,
                    #2563eb,
                    #3b82f6
                );
        }

        .stat:nth-child(2) {
            background:
                linear-gradient(
                    135deg,
                    #059669,
                    #10b981
                );
        }

        .stat:nth-child(3) {
            background:
                linear-gradient(
                    135deg,
                    #7c3aed,
                    #a855f7
                );
        }

        .stat-number {
            position: relative;

            z-index: 2;

            font-size: 30px;

            font-weight: 800;

            margin-bottom: 6px;

            color: white;
        }

        .stat-label {
            position: relative;

            z-index: 2;

            color: rgba(255, 255, 255, 0.9);

            font-size: 13px;

            font-weight: 600;
        }


        /* =========================
           EVENT
        ========================= */

        .event-section {
            max-width: 1200px;

            margin: auto;

            padding: 90px 25px 70px;
        }

        .section-header {
            display: flex;

            justify-content: space-between;

            align-items: end;

            margin-bottom: 30px;
        }

        .section-label {
            color: #2563eb;

            font-size: 13px;

            font-weight: 800;

            text-transform: uppercase;

            letter-spacing: 1px;

            margin-bottom: 8px;
        }

        .section-header h2 {
            font-size: 32px;

            margin-bottom: 7px;
        }

        .section-header p {
            color: #64748b;

            font-size: 15px;
        }

        .all-event {
            text-decoration: none;

            color: #2563eb;

            font-size: 14px;

            font-weight: 700;
        }

        .all-event:hover {
            text-decoration: underline;
        }

        .events {
            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 25px;
        }

        .card {
            background: white;

            border: 1px solid #e5e7eb;

            border-radius: 16px;

            overflow: hidden;

            box-shadow:
                0 5px 15px rgba(15, 23, 42, 0.05);

            transition: 0.25s;
        }

        .card:hover {
            transform: translateY(-6px);

            box-shadow:
                0 18px 35px rgba(15, 23, 42, 0.12);
        }

        .poster {
            height: 200px;

            background:
                linear-gradient(
                    135deg,
                    #dbeafe,
                    #eff6ff
                );

            display: flex;

            align-items: center;

            justify-content: center;

            color: #64748b;

            font-size: 14px;

            overflow: hidden;
        }

        .poster img {
            width: 100%;

            height: 100%;

            object-fit: cover;

            transition: 0.3s;
        }

        .card:hover .poster img {
            transform: scale(1.04);
        }

        .card-content {
            padding: 20px;
        }

        .event-category {
            display: inline-block;

            background: #eff6ff;

            color: #2563eb;

            padding: 5px 9px;

            border-radius: 6px;

            font-size: 11px;

            font-weight: 700;

            margin-bottom: 10px;
        }

        .card-content h3 {
            font-size: 19px;

            margin-bottom: 12px;
        }

        .event-info {
            color: #64748b;

            font-size: 14px;

            line-height: 1.7;

            margin-bottom: 15px;
        }

        .detail {
            text-decoration: none;

            color: #2563eb;

            font-size: 14px;

            font-weight: 700;
        }

        .detail:hover {
            text-decoration: underline;
        }

        .empty {
            text-align: center;

            color: #64748b;

            background: white;

            padding: 40px;

            border-radius: 15px;

            grid-column: 1 / -1;
        }


        /* =========================
           TENTANG
        ========================= */

        .about {
            background: #f8fafc;

            padding: 90px 25px;
        }

        .about-container {
            max-width: 1000px;

            margin: auto;

            text-align: center;
        }

        .about-container h2 {
            font-size: 32px;

            margin-bottom: 18px;
        }

        .about-container > p {
            max-width: 750px;

            margin: auto;

            color: #64748b;

            font-size: 16px;

            line-height: 1.8;
        }

        .about-boxes {
            margin-top: 40px;

            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 20px;
        }

        .about-box {
            position: relative;

            padding: 30px 25px;

            border-radius: 18px;

            color: white;

            overflow: hidden;

            cursor: pointer;

            transition:
                transform 0.3s ease,
                box-shadow 0.3s ease;
        }

        .about-box::before {
            content: "";

            position: absolute;

            width: 120px;
            height: 120px;

            background: rgba(255, 255, 255, 0.15);

            border-radius: 50%;

            top: -55px;

            right: -35px;

            transition: 0.4s;
        }

        .about-box:hover {
            transform: scale(1.06) translateY(-7px);

            box-shadow:
                0 18px 35px rgba(15, 23, 42, 0.20);
        }

        .about-box:hover::before {
            transform: scale(1.7);
        }

        .about-box:nth-child(1) {
            background:
                linear-gradient(
                    135deg,
                    #2563eb,
                    #3b82f6
                );
        }

        .about-box:nth-child(2) {
            background:
                linear-gradient(
                    135deg,
                    #059669,
                    #10b981
                );
        }

        .about-box:nth-child(3) {
            background:
                linear-gradient(
                    135deg,
                    #7c3aed,
                    #a855f7
                );
        }

        .about-icon {
            position: relative;

            z-index: 2;

            width: 55px;

            height: 55px;

            margin: 0 auto 18px;

            background: rgba(255, 255, 255, 0.18);

            border-radius: 15px;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 25px;
        }

        .about-box h3 {
            position: relative;

            z-index: 2;

            font-size: 17px;

            margin-bottom: 10px;
        }

        .about-box p {
            position: relative;

            z-index: 2;

            color: rgba(255, 255, 255, 0.9);

            font-size: 13px;

            line-height: 1.7;
        }


        /* =========================
           FOOTER
        ========================= */

        footer {
            background: #0f172a;

            color: white;

            padding: 35px 25px;
        }

        .footer-container {
            max-width: 1200px;

            margin: auto;

            display: flex;

            justify-content: space-between;

            align-items: center;

            gap: 20px;
        }

        .footer-logo {
            font-size: 21px;

            font-weight: 800;

            color: white;

            margin-bottom: 5px;
        }

        .footer-text {
            color: #94a3b8;

            font-size: 13px;
        }

        .footer-right {
            color: #94a3b8;

            font-size: 13px;
        }


        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 900px) {

            .hero-container {
                grid-template-columns: 1fr;
            }

            .hero-card {
                display: none;
            }

            .hero h1 {
                font-size: 43px;
            }

            .events {
                grid-template-columns: repeat(2, 1fr);
            }

        }


        @media (max-width: 650px) {

            .nav-container {
                height: auto;

                padding: 15px;

                flex-direction: column;

                gap: 12px;
            }

            .nav-menu {
                flex-wrap: wrap;

                justify-content: center;
            }

            .hero {
                padding: 50px 20px 70px;
            }

            .hero h1 {
                font-size: 34px;
            }

            /*
             * Di HP foto tetap mengikuti rasio asli,
             * tidak dipotong.
             */

            .hero-photo {
                width: 100%;

                height: auto;

                aspect-ratio: 1584 / 672;

                object-fit: contain;

                border-radius: 12px;
            }

            .stats-container {
                grid-template-columns: 1fr;
            }

            .stat {
                padding: 25px;
            }

            .events {
                grid-template-columns: 1fr;
            }

            .section-header {
                display: block;
            }

            .all-event {
                display: inline-block;

                margin-top: 12px;
            }

            .about-boxes {
                grid-template-columns: 1fr;
            }

            .footer-container {
                flex-direction: column;

                text-align: center;
            }

        }

    </style>

</head>


<body>


    <!-- =========================
         NAVBAR
    ========================= -->

    <nav>

        <div class="nav-container">


            <a href="/" class="logo">

                <span class="logo-icon">
                    ⚽
                </span>

                SportKu

            </a>


            <div class="nav-menu">


                <a href="/">
                    Beranda
                </a>


                <a href="/event">
                    Event
                </a>


                <a href="#tentang">
                    Tentang
                </a>


                @auth

                    @if(auth()->user()->role === 'admin')

                        <a href="/admin">
                            Dashboard Admin
                        </a>

                    @else

                        <a href="/status-pendaftaran">
                            Status Pendaftaran
                        </a>

                        <a href="/dashboard">
                            Dashboard
                        </a>

                    @endif


                    <form
                        action="/logout"
                        method="POST"
                        style="display:inline;"
                    >

                        @csrf

                        <button
                            type="submit"
                            class="btn-logout"
                        >
                            Keluar
                        </button>

                    </form>


                @else


                    <a
                        href="/login"
                        class="btn-login"
                    >
                        Login
                    </a>


                    <a
                        href="/register"
                        class="btn-register"
                    >
                        Daftar
                    </a>


                @endauth


            </div>

        </div>

    </nav>


    <!-- =========================
         HERO
    ========================= -->

    <section class="hero">

        <div class="hero-container">


            <!-- HERO KIRI -->

            <div>


                <div class="badge">

                    🏆 Platform Event Olahraga Kabupaten Klaten

                </div>


                <!-- FOTO BANNER -->

                <img
                    src="{{ asset('images/banner-olahraga.jpg') }}"
                    alt="Banner Olahraga SportKu"
                    class="hero-photo"
                >


                <h1>

                    Temukan.
                    <span>Ikuti.</span>
                    Menangkan.

                </h1>


                <p>

                    Temukan berbagai event olahraga di Kabupaten Klaten,
                    lihat informasi lengkapnya, dan daftar dengan mudah
                    melalui SportKu.

                </p>


                <div class="hero-buttons">


                    <a
                        href="/event"
                        class="btn-primary"
                    >

                        Lihat Event →

                    </a>


                    @guest

                        <a
                            href="/register"
                            class="btn-outline"
                        >

                            Buat Akun

                        </a>

                    @endguest


                </div>


            </div>


            <!-- HERO KANAN -->

            <div class="hero-card">


                <div class="hero-card-title">

                    SPORTKU • EVENT OLAHRAGA

                </div>


                <h2>

                    Satu tempat untuk berbagai event.

                </h2>


                <p>

                    Informasi event olahraga menjadi lebih mudah
                    ditemukan dan diikuti.

                </p>


                <div class="hero-info">


                    <div class="hero-info-item">

                        📅 Informasi jadwal event

                    </div>


                    <div class="hero-info-item">

                        📍 Lokasi kegiatan

                    </div>


                    <div class="hero-info-item">

                        📝 Pendaftaran online

                    </div>


                </div>


            </div>


        </div>

    </section>


    <!-- =========================
         STATISTIK
    ========================= -->

    <section class="stats">


        <div class="stats-container">


            <div class="stat">


                <div class="stat-number">

                    {{ $events->count() }}

                </div>


                <div class="stat-label">

                    Event Tersedia

                </div>


            </div>


            <div class="stat">


                <div class="stat-number">

                    Klaten

                </div>


                <div class="stat-label">

                    Wilayah Kegiatan

                </div>


            </div>


            <div class="stat">


                <div class="stat-number">

                    2026

                </div>


                <div class="stat-label">

                    Tahun Event

                </div>


            </div>


        </div>

    </section>


    <!-- =========================
         EVENT
    ========================= -->

    <section
        class="event-section"
        id="event"
    >


        <div class="section-header">


            <div>


                <div class="section-label">

                    Event Terbaru

                </div>


                <h2>

                    Event Olahraga

                </h2>


                <p>

                    Temukan event olahraga yang sedang tersedia.

                </p>


            </div>


            <a
                href="/event"
                class="all-event"
            >

                Lihat Semua Event →

            </a>


        </div>


        <div class="events">


            @forelse($events->take(6) as $event)


                <div class="card">


                    <div class="poster">


                        @if($event->poster)


                            <img
                                src="{{ asset('storage/' . $event->poster) }}"
                                alt="{{ $event->nama_event }}"
                            >


                        @else


                            POSTER EVENT


                        @endif


                    </div>


                    <div class="card-content">


                        <span class="event-category">

                            {{ $event->kategori }}

                        </span>


                        <h3>

                            {{ $event->nama_event }}

                        </h3>


                        <div class="event-info">

                            📅
                            {{ \Carbon\Carbon::parse($event->tanggal)->format('d M Y') }}

                            <br>

                            📍
                            {{ $event->lokasi }}

                        </div>


                        <a
                            href="/event/{{ $event->id }}"
                            class="detail"
                        >

                            Lihat Detail →

                        </a>


                    </div>

                </div>


            @empty


                <div class="empty">


                    <h3>

                        Belum ada event

                    </h3>


                    <p style="margin-top:8px;">

                        Event olahraga akan muncul di sini
                        setelah ditambahkan admin.

                    </p>


                </div>


            @endforelse


        </div>

    </section>


    <!-- =========================
         TENTANG
    ========================= -->

    <section
        class="about"
        id="tentang"
    >


        <div class="about-container">


            <div class="section-label">

                Tentang Platform

            </div>


            <h2>

                Apa itu SportKu?

            </h2>


            <p>

                SportKu adalah website informasi dan pendaftaran
                kegiatan olahraga di Kabupaten Klaten. SportKu
                membantu masyarakat dan sekolah mendapatkan informasi
                event olahraga secara lebih mudah dan terorganisir.

            </p>


            <div class="about-boxes">


                <div class="about-box">


                    <div class="about-icon">

                        📢

                    </div>


                    <h3>

                        Informasi Event

                    </h3>


                    <p>

                        Lihat jadwal, lokasi, kategori,
                        kuota, dan informasi event.

                    </p>


                </div>


                <div class="about-box">


                    <div class="about-icon">

                        📝

                    </div>


                    <h3>

                        Pendaftaran Mudah

                    </h3>


                    <p>

                        Daftar event olahraga secara
                        online dengan lebih praktis.

                    </p>


                </div>


                <div class="about-box">


                    <div class="about-icon">

                        🏆

                    </div>


                    <h3>

                        Berbagai Kegiatan

                    </h3>


                    <p>

                        Temukan berbagai kegiatan olahraga
                        umum maupun antar sekolah.

                    </p>


                </div>


            </div>

        </div>

    </section>


    <!-- =========================
         FOOTER
    ========================= -->

    <footer>


        <div class="footer-container">


            <div>


                <div class="footer-logo">

                    ⚽ SportKu

                </div>


                <div class="footer-text">

                    Informasi Event Olahraga Kabupaten Klaten

                </div>


            </div>


            <div class="footer-right">

                © 2026 SportKu. All rights reserved.

            </div>


        </div>

    </footer>


</body>

</html>