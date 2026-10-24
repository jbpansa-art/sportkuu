<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Event Olahraga - SportKu</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
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

            background: rgba(255, 255, 255, 0.96);
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
           HEADER
        ========================= */

        .page-header {
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

            padding: 60px 25px 80px;
        }

        .header-container {
            max-width: 1200px;
            margin: auto;
        }

        .header-badge {
            display: inline-block;

            padding: 8px 14px;

            border-radius: 30px;

            background: rgba(255, 255, 255, 0.14);

            border: 1px solid rgba(255, 255, 255, 0.25);

            font-size: 13px;

            font-weight: 600;

            margin-bottom: 18px;
        }

        .page-header h1 {
            font-size: 42px;

            line-height: 1.15;

            margin-bottom: 12px;
        }

        .page-header p {
            max-width: 650px;

            color: #dbeafe;

            font-size: 16px;

            line-height: 1.7;
        }

        /* =========================
           SEARCH FILTER
        ========================= */

        .filter-wrapper {
            max-width: 1150px;

            margin: -35px auto 0;

            padding: 0 20px;

            position: relative;

            z-index: 10;
        }

        .filter-box {
            background: white;

            border-radius: 18px;

            padding: 22px;

            box-shadow:
                0 15px 35px rgba(15, 23, 42, 0.12);

            border: 1px solid #e5e7eb;
        }

        .filter-form {
            display: grid;

            grid-template-columns: 1.5fr 1fr 1fr auto;

            gap: 12px;

            align-items: end;
        }

        .form-group {
            display: flex;

            flex-direction: column;

            gap: 7px;
        }

        .form-group label {
            font-size: 12px;

            font-weight: 700;

            color: #475569;
        }

        .input,
        .select {
            width: 100%;

            height: 46px;

            border: 1px solid #dbe1ea;

            border-radius: 10px;

            padding: 0 14px;

            outline: none;

            background: white;

            color: #334155;

            font-size: 14px;

            transition: 0.2s;
        }

        .input:focus,
        .select:focus {
            border-color: #2563eb;

            box-shadow:
                0 0 0 3px rgba(37, 99, 235, 0.10);
        }

        .search-btn {
            height: 46px;

            border: none;

            border-radius: 10px;

            padding: 0 22px;

            background: #2563eb;

            color: white;

            font-weight: 700;

            cursor: pointer;

            transition: 0.2s;
        }

        .search-btn:hover {
            background: #1d4ed8;

            transform: translateY(-1px);
        }

        .reset-wrapper {
            margin-top: 12px;

            text-align: right;
        }

        .reset-btn {
            color: #64748b;

            font-size: 13px;

            text-decoration: none;
        }

        .reset-btn:hover {
            color: #2563eb;

            text-decoration: underline;
        }

        /* =========================
           CONTENT
        ========================= */

        .content {
            max-width: 1200px;

            margin: auto;

            padding: 55px 25px 80px;
        }

        .content-top {
            display: flex;

            justify-content: space-between;

            align-items: center;

            margin-bottom: 25px;
        }

        .content-top h2 {
            font-size: 25px;
        }

        .result-count {
            color: #64748b;

            font-size: 14px;
        }

        /* =========================
           EVENT GRID
        ========================= */

        .event-grid {
            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 25px;
        }

        .event-card {
            background: white;

            border-radius: 18px;

            overflow: hidden;

            border: 1px solid #e5e7eb;

            box-shadow:
                0 5px 15px rgba(15, 23, 42, 0.05);

            transition:
                transform 0.25s ease,
                box-shadow 0.25s ease;
        }

        .event-card:hover {
            transform: translateY(-7px);

            box-shadow:
                0 18px 35px rgba(15, 23, 42, 0.12);
        }

        /* =========================
           POSTER
        ========================= */

        .poster {
            height: 215px;

            background:
                linear-gradient(
                    135deg,
                    #dbeafe,
                    #eff6ff
                );

            overflow: hidden;

            display: flex;

            align-items: center;

            justify-content: center;
        }

        .poster img {
            width: 100%;

            height: 100%;

            object-fit: cover;

            transition: transform 0.35s ease;
        }

        .event-card:hover .poster img {
            transform: scale(1.05);
        }

        .no-poster {
            color: #64748b;

            font-size: 14px;

            font-weight: 600;
        }

        /* =========================
           CARD CONTENT
        ========================= */

        .card-content {
            padding: 21px;
        }

        .category {
            display: inline-block;

            background: #eff6ff;

            color: #2563eb;

            padding: 6px 10px;

            border-radius: 7px;

            font-size: 11px;

            font-weight: 700;

            margin-bottom: 11px;
        }

        .card-content h3 {
            font-size: 19px;

            line-height: 1.4;

            margin-bottom: 13px;

            color: #0f172a;
        }

        .event-info {
            display: flex;

            flex-direction: column;

            gap: 8px;

            margin-bottom: 15px;
        }

        .info-row {
            display: flex;

            align-items: flex-start;

            gap: 8px;

            color: #64748b;

            font-size: 13px;

            line-height: 1.5;
        }

        .info-icon {
            width: 20px;

            flex-shrink: 0;

            text-align: center;
        }

        /* =========================
           TYPE & KUOTA
        ========================= */

        .card-bottom {
            display: flex;

            justify-content: space-between;

            align-items: center;

            gap: 10px;

            margin-top: 15px;

            padding-top: 15px;

            border-top: 1px solid #eef2f7;
        }

        .event-type {
            font-size: 11px;

            font-weight: 700;

            padding: 6px 9px;

            border-radius: 7px;

            background: #f1f5f9;

            color: #475569;
        }

        .event-type.school {
            background: #faf5ff;

            color: #7c3aed;
        }

        .quota {
            font-size: 12px;

            font-weight: 700;

            color: #059669;
        }

        .quota.full {
            color: #ef4444;
        }

        /* =========================
           DETAIL BUTTON
        ========================= */

        .detail-btn {
            display: block;

            width: 100%;

            margin-top: 18px;

            padding: 12px;

            border-radius: 10px;

            background: #2563eb;

            color: white;

            text-align: center;

            text-decoration: none;

            font-size: 14px;

            font-weight: 700;

            transition: 0.2s;
        }

        .detail-btn:hover {
            background: #1d4ed8;
        }

        /* =========================
           EMPTY
        ========================= */

        .empty-state {
            grid-column: 1 / -1;

            background: white;

            border: 1px solid #e5e7eb;

            border-radius: 18px;

            padding: 65px 25px;

            text-align: center;

            box-shadow:
                0 5px 15px rgba(15, 23, 42, 0.04);
        }

        .empty-icon {
            width: 70px;
            height: 70px;

            margin: 0 auto 18px;

            border-radius: 20px;

            background: #eff6ff;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 30px;
        }

        .empty-state h3 {
            font-size: 20px;

            margin-bottom: 8px;
        }

        .empty-state p {
            color: #64748b;

            font-size: 14px;
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

        @media (max-width: 950px) {

            .filter-form {
                grid-template-columns: 1fr 1fr;
            }

            .event-grid {
                grid-template-columns:
                    repeat(2, 1fr);
            }

        }

        @media (max-width: 700px) {

            .nav-container {
                flex-direction: column;

                padding: 15px;

                gap: 10px;
            }

            .nav-menu {
                flex-wrap: wrap;

                justify-content: center;
            }

            .page-header {
                padding: 45px 20px 65px;
            }

            .page-header h1 {
                font-size: 34px;
            }

            .filter-wrapper {
                padding: 0 15px;
            }

            .filter-form {
                grid-template-columns: 1fr;
            }

            .content {
                padding: 45px 18px 60px;
            }

            .content-top {
                display: block;
            }

            .result-count {
                display: block;

                margin-top: 6px;
            }

            .event-grid {
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


                <a href="/#tentang">
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
         HEADER
    ========================= -->

    <section class="page-header">

        <div class="header-container">


            <div class="header-badge">

                🏆 SportKu • Event Olahraga

            </div>


            <h1>

                Temukan Event Olahraga

            </h1>


            <p>

                Jelajahi berbagai event olahraga di Kabupaten Klaten
                dan temukan kegiatan yang sesuai dengan minatmu.

            </p>


        </div>

    </section>


    <!-- =========================
         FILTER
    ========================= -->

    <div class="filter-wrapper">


        <div class="filter-box">


            <form
                action="/event"
                method="GET"
                class="filter-form"
            >


                <!-- SEARCH -->

                <div class="form-group">

                    <label>
                        Cari Event
                    </label>

                    <input
                        type="text"
                        name="search"
                        class="input"
                        placeholder="Cari nama event..."
                        value="{{ request('search') }}"
                    >

                </div>


                <!-- KATEGORI -->

                <div class="form-group">

                    <label>
                        Kategori
                    </label>

                    <select
                        name="kategori"
                        class="select"
                    >

                        <option value="">
                            Semua Kategori
                        </option>


                        @foreach($kategori as $item)

                            <option
                                value="{{ $item }}"
                                {{ request('kategori') == $item ? 'selected' : '' }}
                            >

                                {{ $item }}

                            </option>

                        @endforeach

                    </select>

                </div>


                <!-- JENIS -->

                <div class="form-group">

                    <label>
                        Jenis Event
                    </label>

                    <select
                        name="jenis"
                        class="select"
                    >

                        <option value="">
                            Semua Jenis
                        </option>


                        @foreach($jenis as $item)

                            <option
                                value="{{ $item }}"
                                {{ request('jenis') == $item ? 'selected' : '' }}
                            >

                                {{ $item }}

                            </option>

                        @endforeach

                    </select>

                </div>


                <!-- BUTTON -->

                <button
                    type="submit"
                    class="search-btn"
                >

                    🔎 Cari

                </button>


            </form>


            @if(
                request('search') ||
                request('kategori') ||
                request('jenis')
            )

                <div class="reset-wrapper">

                    <a
                        href="/event"
                        class="reset-btn"
                    >

                        ↻ Reset Filter

                    </a>

                </div>

            @endif


        </div>

    </div>


    <!-- =========================
         EVENT CONTENT
    ========================= -->

    <main class="content">


        <div class="content-top">


            <div>

                <h2>
                    Daftar Event
                </h2>

                <span class="result-count">

                    Menampilkan
                    <strong>{{ $events->count() }}</strong>
                    event

                </span>

            </div>


        </div>


        <div class="event-grid">


            @forelse($events as $event)


                @php

                    $sisaKuota = max(
                        0,
                        $event->kuota - $event->pendaftar_aktif_count
                    );

                @endphp


                <div class="event-card">


                    <!-- POSTER -->

                    <div class="poster">


                        @if($event->poster)

                            <img
                                src="{{ asset('storage/' . $event->poster) }}"
                                alt="{{ $event->nama_event }}"
                            >

                        @else

                            <div class="no-poster">

                                🖼️ Poster Event

                            </div>

                        @endif


                    </div>


                    <!-- CONTENT -->

                    <div class="card-content">


                        <span class="category">

                            {{ $event->kategori }}

                        </span>


                        <h3>

                            {{ $event->nama_event }}

                        </h3>


                        <div class="event-info">


                            <div class="info-row">

                                <span class="info-icon">
                                    📅
                                </span>

                                <span>

                                    {{ \Carbon\Carbon::parse($event->tanggal)->translatedFormat('d F Y') }}

                                </span>

                            </div>


                            <div class="info-row">

                                <span class="info-icon">
                                    📍
                                </span>

                                <span>

                                    {{ $event->lokasi }}

                                </span>

                            </div>


                            @if($event->tingkatan)

                                <div class="info-row">

                                    <span class="info-icon">
                                        🎓
                                    </span>

                                    <span>

                                        {{ $event->tingkatan }}

                                    </span>

                                </div>

                            @endif


                        </div>


                        <!-- TYPE + QUOTA -->

                        <div class="card-bottom">


                            @if($event->jenis === 'Antar Sekolah')

                                <span class="event-type school">

                                    🏫 Antar Sekolah

                                </span>

                            @else

                                <span class="event-type">

                                    👥 Umum

                                </span>

                            @endif


                            @if($sisaKuota <= 0)

                                <span class="quota full">

                                    Kuota Penuh

                                </span>

                            @else

                                <span class="quota">

                                    👥 {{ $sisaKuota }} slot tersisa

                                </span>

                            @endif


                        </div>


                        <!-- DETAIL -->

                        <a
                            href="/event/{{ $event->id }}"
                            class="detail-btn"
                        >

                            Lihat Detail Event →

                        </a>


                    </div>


                </div>


            @empty


                <div class="empty-state">


                    <div class="empty-icon">

                        🔎

                    </div>


                    <h3>

                        Event tidak ditemukan

                    </h3>


                    <p>

                        Belum ada event yang sesuai dengan
                        pencarian atau filter kamu.

                    </p>


                </div>


            @endforelse


        </div>


    </main>


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