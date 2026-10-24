<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Daftar Event - SportKu</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f5f7fb;
            color: #0f172a;
        }

        /* NAVBAR */
        .navbar {
            height: 72px;
            background: #0f172a;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 7%;
            color: white;
        }

        .logo {
            font-size: 23px;
            font-weight: 800;
        }

        .logo span {
            color: #38bdf8;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 28px;
        }

        .nav-menu a {
            color: #cbd5e1;
            text-decoration: none;
            font-size: 14px;
            transition: .2s;
        }

        .nav-menu a:hover {
            color: white;
        }

        .nav-menu .active {
            color: white;
            font-weight: bold;
        }

        .logout {
            background: #ef4444;
            color: white !important;
            padding: 9px 16px;
            border-radius: 9px;
        }

        /* PAGE */
        .page {
            max-width: 1050px;
            margin: 45px auto;
            padding: 0 20px;
        }

        .back {
            display: inline-block;
            margin-bottom: 20px;
            color: #2563eb;
            text-decoration: none;
            font-weight: 600;
        }

        .back:hover {
            text-decoration: underline;
        }

        .title {
            margin-bottom: 25px;
        }

        .title h1 {
            font-size: 32px;
            margin-bottom: 7px;
        }

        .title p {
            color: #64748b;
        }

        /* GRID */
        .content {
            display: grid;
            grid-template-columns: 350px 1fr;
            gap: 25px;
            align-items: start;
        }

        /* EVENT CARD */
        .event-card {
            background: white;
            border-radius: 18px;
            padding: 25px;
            box-shadow: 0 8px 25px rgba(15, 23, 42, .07);
            border: 1px solid #e2e8f0;
        }

        .event-card h2 {
            font-size: 21px;
            margin-bottom: 18px;
        }

        .event-info {
            margin-bottom: 14px;
            color: #475569;
            font-size: 14px;
            line-height: 1.6;
        }

        .event-info strong {
            display: block;
            color: #0f172a;
            margin-bottom: 2px;
        }

        .quota-box {
            margin-top: 20px;
            padding: 16px;
            border-radius: 12px;
            background: #eff6ff;
            border: 1px solid #bfdbfe;
        }

        .quota-box strong {
            color: #1d4ed8;
            font-size: 20px;
        }

        .warning {
            margin-top: 12px;
            padding: 12px;
            border-radius: 10px;
            background: #fff7ed;
            color: #c2410c;
            font-size: 13px;
        }

        /* FORM */
        .form-card {
            background: white;
            border-radius: 18px;
            padding: 30px;
            box-shadow: 0 8px 25px rgba(15, 23, 42, .07);
            border: 1px solid #e2e8f0;
        }

        .form-card h2 {
            margin-bottom: 22px;
            font-size: 22px;
        }

        .alert {
            padding: 13px 15px;
            border-radius: 10px;
            margin-bottom: 18px;
            font-size: 14px;
        }

        .alert-error {
            background: #fef2f2;
            color: #b91c1c;
            border: 1px solid #fecaca;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            margin-bottom: 7px;
            font-size: 14px;
            font-weight: 700;
            color: #334155;
        }

        input,
        textarea,
        select {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #cbd5e1;
            border-radius: 10px;
            font-size: 14px;
            outline: none;
            font-family: inherit;
            transition: .2s;
        }

        input:focus,
        textarea:focus,
        select:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, .1);
        }

        textarea {
            min-height: 100px;
            resize: vertical;
        }

        .section-title {
            margin: 28px 0 18px;
            padding-bottom: 10px;
            border-bottom: 1px solid #e2e8f0;
            font-size: 17px;
            color: #0f172a;
        }

        .btn {
            width: 100%;
            border: none;
            padding: 14px;
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
            box-shadow: 0 8px 18px rgba(37, 99, 235, .25);
        }

        .btn-disabled {
            background: #94a3b8;
            cursor: not-allowed;
        }

        .btn-disabled:hover {
            transform: none;
            box-shadow: none;
        }

        .required {
            color: #ef4444;
        }

        /* FOOTER */
        footer {
            margin-top: 60px;
            padding: 25px;
            text-align: center;
            color: #64748b;
            font-size: 13px;
        }

        /* RESPONSIVE */
        @media (max-width: 800px) {
            .navbar {
                padding: 0 20px;
            }

            .nav-menu {
                gap: 12px;
            }

            .nav-menu a:not(.logout) {
                display: none;
            }

            .content {
                grid-template-columns: 1fr;
            }

            .title h1 {
                font-size: 27px;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar">
        <div class="logo">
            ⚽ Sport<span>Ku</span>
        </div>

        <div class="nav-menu">
            <a href="/">Beranda</a>
            <a href="/event">Event</a>
            <a href="/status-pendaftaran">Status Pendaftaran</a>

            <form action="/logout" method="POST" style="display:inline;">
                @csrf
                <button type="submit"
                        class="logout"
                        style="border:none; cursor:pointer;">
                    Logout
                </button>
            </form>
        </div>
    </nav>


    <main class="page">

        <a href="/event/{{ $event->id }}" class="back">
            ← Kembali ke Detail Event
        </a>

        <div class="title">
            <h1>Daftar Event</h1>
            <p>Isi data di bawah untuk mengikuti event olahraga.</p>
        </div>


        <div class="content">

            <!-- INFORMASI EVENT -->
            <div class="event-card">

                <h2>{{ $event->nama_event }}</h2>

                <div class="event-info">
                    <strong>🏆 Kategori</strong>
                    {{ $event->kategori }}
                </div>

                <div class="event-info">
                    <strong>📅 Tanggal</strong>
                    {{ \Carbon\Carbon::parse($event->tanggal)->translatedFormat('d F Y') }}
                </div>

                <div class="event-info">
                    <strong>📍 Lokasi</strong>
                    {{ $event->lokasi }}
                </div>

                <div class="event-info">
                    <strong>👥 Jenis</strong>
                    {{ $event->jenis }}
                </div>

                @if($event->tingkatan)
                    <div class="event-info">
                        <strong>🎓 Tingkatan</strong>
                        {{ $event->tingkatan }}
                    </div>
                @endif


                <div class="quota-box">
                    <div>Sisa Kuota</div>
                    <strong>{{ $sisaKuota }} peserta</strong>
                </div>

                @if($sisaKuota > 0 && $sisaKuota <= 5)
                    <div class="warning">
                        ⚠️ Kuota hampir penuh. Segera lakukan pendaftaran.
                    </div>
                @endif

            </div>


            <!-- FORM PENDAFTARAN -->
            <div class="form-card">

                <h2>📝 Data Pendaftaran</h2>

                @if(session('error'))
                    <div class="alert alert-error">
                        {{ session('error') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert alert-error">
                        <strong>Periksa kembali data:</strong>

                        <ul style="margin:8px 0 0 18px;">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                @if($sisaKuota > 0)

                    <form
                        action="/event/{{ $event->id }}/daftar"
                        method="POST"
                    >
                        @csrf

                        <div class="form-group">
                            <label>
                                Nama Peserta <span class="required">*</span>
                            </label>

                            <input
                                type="text"
                                name="nama_peserta"
                                value="{{ old('nama_peserta') }}"
                                placeholder="Masukkan nama peserta"
                                required
                            >
                        </div>


                        <div class="form-group">
                            <label>
                                Nomor HP <span class="required">*</span>
                            </label>

                            <input
                                type="text"
                                name="no_hp"
                                value="{{ old('no_hp') }}"
                                placeholder="Contoh: 081234567890"
                                required
                            >
                        </div>


                        <div class="form-group">
                            <label>
                                Alamat <span class="required">*</span>
                            </label>

                            <textarea
                                name="alamat"
                                placeholder="Masukkan alamat lengkap"
                                required
                            >{{ old('alamat') }}</textarea>
                        </div>


                        @if($event->jenis == 'Antar Sekolah')

                            <div class="section-title">
                                Data Sekolah
                            </div>

                            <div class="form-group">
                                <label>
                                    Nama Sekolah
                                </label>

                                <input
                                    type="text"
                                    name="nama_sekolah"
                                    value="{{ old('nama_sekolah') }}"
                                    placeholder="Contoh: SMK Negeri 1 Klaten"
                                >
                            </div>


                            <div class="form-group">
                                <label>
                                    Tingkatan Sekolah
                                </label>

                                <select name="tingkatan_sekolah">

                                    <option value="">
                                        -- Pilih Tingkatan --
                                    </option>

                                    <option value="SD"
                                        {{ old('tingkatan_sekolah') == 'SD' ? 'selected' : '' }}>
                                        SD
                                    </option>

                                    <option value="SMP"
                                        {{ old('tingkatan_sekolah') == 'SMP' ? 'selected' : '' }}>
                                        SMP
                                    </option>

                                    <option value="SMA/SMK"
                                        {{ old('tingkatan_sekolah') == 'SMA/SMK' ? 'selected' : '' }}>
                                        SMA/SMK
                                    </option>

                                </select>
                            </div>

                        @endif


                        <button type="submit" class="btn">
                            Daftar Sekarang →
                        </button>

                    </form>

                @else

                    <div class="alert alert-error">
                        <strong>Kuota Penuh</strong><br>
                        Maaf, kuota untuk event ini sudah tidak tersedia.
                    </div>

                    <button class="btn btn-disabled" disabled>
                        Kuota Penuh
                    </button>

                @endif

            </div>

        </div>

    </main>


    <footer>
        © {{ date('Y') }} SportKu — Platform Event Olahraga Kabupaten Klaten
    </footer>

</body>
</html>