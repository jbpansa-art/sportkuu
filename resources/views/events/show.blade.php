<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $event->nama_event }} - SportKu</title>

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
           HERO HEADER
        ========================= */

        .detail-header {
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

            padding: 50px 25px 95px;
        }

        .header-container {
            max-width: 1150px;
            margin: auto;
        }

        .back-link {
            display: inline-flex;

            align-items: center;

            gap: 7px;

            color: #dbeafe;

            text-decoration: none;

            font-size: 14px;

            font-weight: 600;

            margin-bottom: 30px;
        }

        .back-link:hover {
            color: white;
        }

        .header-badge {
            display: inline-block;

            padding: 8px 14px;

            border-radius: 30px;

            background: rgba(255, 255, 255, 0.14);

            border: 1px solid rgba(255, 255, 255, 0.25);

            font-size: 13px;

            font-weight: 600;

            margin-bottom: 15px;
        }

        .detail-header h1 {
            max-width: 850px;

            font-size: 42px;

            line-height: 1.15;

            margin-bottom: 15px;
        }

        .header-location {
            color: #dbeafe;

            font-size: 15px;
        }

        /* =========================
           MAIN
        ========================= */

        .detail-wrapper {
            max-width: 1150px;

            margin: -55px auto 0;

            padding: 0 20px 80px;

            position: relative;

            z-index: 5;
        }

        .detail-grid {
            display: grid;

            grid-template-columns: 0.95fr 1.05fr;

            gap: 25px;

            align-items: start;
        }

        /* =========================
           POSTER
        ========================= */

        .poster-card {
            background: white;

            border-radius: 20px;

            overflow: hidden;

            border: 1px solid #e5e7eb;

            box-shadow:
                0 15px 35px rgba(15, 23, 42, 0.12);
        }

        .poster {
            background:
                linear-gradient(
                    135deg,
                    #dbeafe,
                    #eff6ff
                );

            min-height: 430px;

            display: flex;

            align-items: center;

            justify-content: center;

            overflow: hidden;
        }

        .poster img {
            width: 100%;

            height: 100%;

            min-height: 430px;

            object-fit: contain;

            background: #f1f5f9;
        }

        .no-poster {
            color: #64748b;

            font-size: 15px;

            font-weight: 600;
        }

        .poster-caption {
            padding: 17px 20px;

            color: #64748b;

            font-size: 13px;
        }

        /* =========================
           INFO CARD
        ========================= */

        .info-card {
            background: white;

            border-radius: 20px;

            border: 1px solid #e5e7eb;

            box-shadow:
                0 10px 25px rgba(15, 23, 42, 0.06);

            padding: 28px;
        }

        .category {
            display: inline-block;

            background: #eff6ff;

            color: #2563eb;

            padding: 7px 11px;

            border-radius: 8px;

            font-size: 11px;

            font-weight: 700;

            margin-bottom: 13px;
        }

        .info-card h2 {
            font-size: 27px;

            line-height: 1.3;

            margin-bottom: 20px;
        }

        /* =========================
           INFO ITEMS
        ========================= */

        .info-list {
            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 12px;

            margin-bottom: 22px;
        }

        .info-item {
            background: #f8fafc;

            border: 1px solid #eef2f7;

            border-radius: 12px;

            padding: 14px;

            color: #475569;

            font-size: 13px;

            line-height: 1.5;
        }

        .info-item strong {
            display: block;

            color: #0f172a;

            font-size: 12px;

            margin-bottom: 4px;
        }

        /* =========================
           QUOTA
        ========================= */

        .quota-box {
            background:
                linear-gradient(
                    135deg,
                    #eff6ff,
                    #f8fbff
                );

            border: 1px solid #dbeafe;

            border-radius: 14px;

            padding: 17px;

            margin-bottom: 20px;
        }

        .quota-top {
            display: flex;

            justify-content: space-between;

            align-items: center;

            margin-bottom: 10px;
        }

        .quota-title {
            font-size: 13px;

            font-weight: 700;

            color: #334155;
        }

        .quota-number {
            font-size: 14px;

            font-weight: 800;

            color: #2563eb;
        }

        .quota-bar {
            width: 100%;

            height: 9px;

            background: #dbeafe;

            border-radius: 20px;

            overflow: hidden;
        }

        .quota-progress {
            height: 100%;

            background:
                linear-gradient(
                    90deg,
                    #2563eb,
                    #60a5fa
                );

            border-radius: 20px;
        }

        .quota-full {
            color: #ef4444;

            font-size: 13px;

            font-weight: 700;

            margin-top: 8px;
        }

        /* =========================
           BUTTON
        ========================= */

        .btn-daftar {
            display: block;

            width: 100%;

            padding: 14px;

            border-radius: 11px;

            background: #2563eb;

            color: white;

            text-align: center;

            text-decoration: none;

            font-size: 15px;

            font-weight: 700;

            transition: 0.2s;
        }

        .btn-daftar:hover {
            background: #1d4ed8;

            transform: translateY(-2px);

            box-shadow:
                0 8px 20px rgba(37, 99, 235, 0.25);
        }

        .btn-disabled {
            display: block;

            width: 100%;

            padding: 14px;

            border-radius: 11px;

            background: #e2e8f0;

            color: #64748b;

            text-align: center;

            font-size: 15px;

            font-weight: 700;

            cursor: not-allowed;
        }

        .login-note {
            text-align: center;

            color: #64748b;

            font-size: 12px;

            margin-top: 10px;
        }

        .login-note a {
            color: #2563eb;

            font-weight: 700;

            text-decoration: none;
        }

        /* =========================
           DESCRIPTION
        ========================= */

        .description-card {
            background: white;

            border: 1px solid #e5e7eb;

            border-radius: 20px;

            padding: 30px;

            margin-top: 25px;

            box-shadow:
                0 8px 20px rgba(15, 23, 42, 0.05);
        }

        .section-label {
            color: #2563eb;

            font-size: 12px;

            font-weight: 800;

            text-transform: uppercase;

            letter-spacing: 0.8px;

            margin-bottom: 8px;
        }

        .description-card h2 {
            font-size: 25px;

            margin-bottom: 15px;
        }

        .description {
            color: #64748b;

            font-size: 15px;

            line-height: 1.8;

            white-space: pre-line;
        }

        /* =========================
           DOCUMENTS
        ========================= */

        .documents-card {
            background: white;

            border: 1px solid #e5e7eb;

            border-radius: 20px;

            padding: 30px;

            margin-top: 25px;

            box-shadow:
                0 8px 20px rgba(15, 23, 42, 0.05);
        }

        .documents {
            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 15px;

            margin-top: 20px;
        }

        .document {
            display: flex;

            align-items: center;

            gap: 14px;

            padding: 17px;

            border-radius: 13px;

            background: #f8fafc;

            border: 1px solid #eef2f7;

            text-decoration: none;

            color: #334155;

            transition: 0.2s;
        }

        .document:hover {
            border-color: #bfdbfe;

            background: #eff6ff;

            transform: translateY(-2px);
        }

        .document-icon {
            width: 45px;
            height: 45px;

            flex-shrink: 0;

            border-radius: 11px;

            background: #fee2e2;

            color: #dc2626;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 21px;
        }

        .document-info strong {
            display: block;

            font-size: 14px;

            margin-bottom: 4px;
        }

        .document-info span {
            color: #64748b;

            font-size: 12px;
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

        @media (max-width: 850px) {

            .detail-grid {
                grid-template-columns: 1fr;
            }

            .poster {
                min-height: auto;
            }

            .poster img {
                min-height: auto;

                max-height: 600px;
            }

        }

        @media (max-width: 650px) {

            .nav-container {
                flex-direction: column;

                padding: 15px;

                gap: 10px;
            }

            .nav-menu {
                flex-wrap: wrap;

                justify-content: center;
            }

            .detail-header {
                padding: 40px 20px 80px;
            }

            .detail-header h1 {
                font-size: 32px;
            }

            .detail-wrapper {
                padding: 0 15px 60px;
            }

            .info-card,
            .description-card,
            .documents-card {
                padding: 22px;
            }

            .info-list {
                grid-template-columns: 1fr;
            }

            .documents {
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

    <section class="detail-header">


        <div class="header-container">


            <a
                href="/event"
                class="back-link"
            >

                ← Kembali ke Daftar Event

            </a>


            <div class="header-badge">

                🏆 {{ $event->kategori }}

            </div>


            <h1>

                {{ $event->nama_event }}

            </h1>


            <div class="header-location">

                📍 {{ $event->lokasi }}

            </div>


        </div>


    </section>


    <!-- =========================
         DETAIL CONTENT
    ========================= -->

    <main class="detail-wrapper">


        <div class="detail-grid">


            <!-- =====================
                 POSTER
            ====================== -->

            <div class="poster-card">


                <div class="poster">


                    @if($event->poster)

                        <img
                            src="{{ asset('storage/' . $event->poster) }}"
                            alt="{{ $event->nama_event }}"
                        >

                    @else

                        <div class="no-poster">

                            🖼️ Poster event belum tersedia

                        </div>

                    @endif


                </div>


                <div class="poster-caption">

                    📌 Informasi resmi event SportKu

                </div>


            </div>


            <!-- =====================
                 INFO
            ====================== -->

            <div class="info-card">


                <span class="category">

                    {{ $event->kategori }}

                </span>


                <h2>

                    {{ $event->nama_event }}

                </h2>


                <div class="info-list">


                    <div class="info-item">

                        <strong>
                            📅 Tanggal
                        </strong>

                        {{ \Carbon\Carbon::parse($event->tanggal)->translatedFormat('d F Y') }}

                    </div>


                    <div class="info-item">

                        <strong>
                            📍 Lokasi
                        </strong>

                        {{ $event->lokasi }}

                    </div>


                    <div class="info-item">

                        <strong>
                            🏆 Jenis Event
                        </strong>

                        {{ $event->jenis }}

                    </div>


                    @if($event->tingkatan)

                        <div class="info-item">

                            <strong>
                                🎓 Tingkatan
                            </strong>

                            {{ $event->tingkatan }}

                        </div>

                    @endif


                </div>


                <!-- =====================
                     KUOTA
                ====================== -->

                @php

                    $sisaKuota = max(
                        0,
                        $event->kuota - $event->pendaftar_aktif_count
                    );

                    $persentase = $event->kuota > 0
                        ? min(
                            100,
                            ($event->pendaftar_aktif_count / $event->kuota) * 100
                        )
                        : 100;

                @endphp


                <div class="quota-box">


                    <div class="quota-top">


                        <span class="quota-title">

                            👥 Sisa Kuota

                        </span>


                        <span class="quota-number">

                            {{ $sisaKuota }}
                            / {{ $event->kuota }}

                        </span>


                    </div>


                    <div class="quota-bar">

                        <div
                            class="quota-progress"
                            style="width: {{ $persentase }}%;"
                        ></div>

                    </div>


                    @if($sisaKuota <= 0)

                        <div class="quota-full">

                            ⚠️ Kuota event sudah penuh.

                        </div>

                    @endif


                </div>


                <!-- =====================
                     DAFTAR
                ====================== -->

                @auth


                    @if($sisaKuota > 0)

                        <a
                            href="/event/{{ $event->id }}/daftar"
                            class="btn-daftar"
                        >

                            📝 Daftar Event

                        </a>

                    @else

                        <div class="btn-disabled">

                            🔒 Kuota Penuh

                        </div>

                    @endif


                @else


                    @if($sisaKuota > 0)

                        <a
                            href="/login"
                            class="btn-daftar"
                        >

                            🔐 Login untuk Mendaftar

                        </a>


                        <div class="login-note">

                            Belum punya akun?

                            <a href="/register">
                                Daftar sekarang
                            </a>

                        </div>

                    @else

                        <div class="btn-disabled">

                            🔒 Kuota Penuh

                        </div>

                    @endif


                @endauth


            </div>


        </div>


        <!-- =========================
             DESKRIPSI
        ========================== -->

        <div class="description-card">


            <div class="section-label">

                Tentang Event

            </div>


            <h2>

                Deskripsi Kegiatan

            </h2>


            <div class="description">

                {{ $event->deskripsi }}

            </div>


        </div>


        <!-- =========================
             DOKUMEN
        ========================== -->

        @if($event->proposal || $event->peraturan)

            <div class="documents-card">


                <div class="section-label">

                    Dokumen Event

                </div>


                <h2>

                    Informasi & Peraturan

                </h2>


                <div class="documents">


                    @if($event->proposal)

                        <a
                            href="{{ asset('storage/' . $event->proposal) }}"
                            target="_blank"
                            class="document"
                        >


                            <div class="document-icon">

                                📄

                            </div>


                            <div class="document-info">

                                <strong>
                                    Proposal Event
                                </strong>

                                <span>
                                    Buka dokumen PDF
                                </span>

                            </div>


                        </a>

                    @endif


                    @if($event->peraturan)

                        <a
                            href="{{ asset('storage/' . $event->peraturan) }}"
                            target="_blank"
                            class="document"
                        >


                            <div class="document-icon">

                                📋

                            </div>


                            <div class="document-info">

                                <strong>
                                    Peraturan Event
                                </strong>

                                <span>
                                    Buka dokumen PDF
                                </span>

                            </div>


                        </a>

                    @endif


                </div>


            </div>

        @endif


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