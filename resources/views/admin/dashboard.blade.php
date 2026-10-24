<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - SportKu</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            margin: 0;
            background: #eef2f7;
            color: #1f2937;
        }

        /* NAVBAR */

        nav {
            min-height: 72px;
            background: #0f172a;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 14px 6%;
            color: white;
        }

        .logo {
            font-size: 25px;
            font-weight: bold;
        }

        .logo span {
            color: #38bdf8;
        }

        .nav-right {
            display: flex;
            align-items: center;
            gap: 18px;
        }

        .admin-name {
            font-size: 14px;
            color: #cbd5e1;
        }

        .logout-btn {
            border: none;
            background: #ef4444;
            color: white;
            padding: 9px 15px;
            border-radius: 7px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.2s;
        }

        .logout-btn:hover {
            background: #dc2626;
        }

        /* CONTAINER */

        .container {
            width: 92%;
            max-width: 1450px;
            margin: auto;
            padding: 30px 0 50px;
        }

        /* HEADER */

        .welcome {
            background: linear-gradient(135deg, #0f172a, #1d4ed8);
            color: white;
            padding: 30px;
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            flex-wrap: wrap;
            margin-bottom: 25px;
            box-shadow: 0 12px 30px rgba(15, 23, 42, 0.15);
        }

        .welcome h1 {
            margin: 0 0 8px;
            font-size: 29px;
        }

        .welcome p {
            margin: 0;
            color: #dbeafe;
            font-size: 14px;
        }

        .header-buttons {
            display: flex;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
        }

        .btn-tambah,
        .btn-pendaftar {
            text-decoration: none;
            padding: 12px 18px;
            border-radius: 9px;
            font-weight: bold;
            transition: 0.2s;
            white-space: nowrap;
        }

        .btn-tambah {
            background: #38bdf8;
            color: #082f49;
        }

        .btn-tambah:hover {
            background: #7dd3fc;
            transform: translateY(-2px);
        }

        .btn-pendaftar {
            background: rgba(255, 255, 255, 0.14);
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.25);
        }

        .btn-pendaftar:hover {
            background: rgba(255, 255, 255, 0.24);
            transform: translateY(-2px);
        }

        /* LAYOUT STATISTIK KIRI-KANAN */

        /* Satu panel gabungan untuk seluruh statistik */
        .stats-dashboard-panel {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 20px;
            padding: 24px;
            margin-bottom: 28px;
            box-shadow: 0 8px 25px rgba(15, 23, 42, 0.06);
        }

        .stats-layout {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 26px;
            align-items: stretch;
        }

        .stats-section {
            min-width: 0;
            min-height: 0;
            display: flex;
            flex-direction: column;
        }

        .stats-section + .stats-section {
            border-left: 1px solid #e8edf5;
            padding-left: 26px;
        }

        .section-title {
            display: flex;
            align-items: center;
            gap: 9px;
            margin: 0 0 18px;
            padding-bottom: 13px;
            border-bottom: 1px solid #e8edf5;
            color: #0f172a;
            font-size: 18px;
            line-height: 1.4;
        }

        .stats,
        .stats-pendaftar {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 14px;
        }

        /* Kartu statistik event disusun vertikal agar memenuhi kolom */
        .stats {
            grid-template-columns: minmax(0, 1fr);
            gap: 14px;
        }

        .stats .stat-card {
            min-height: 96px;
            height: 96px;
            padding: 8px 14px;
        }

        .stats .stat-icon {
            width: 27px;
            height: 27px;
            font-size: 15px;
            margin-bottom: 3px;
        }

        .stats .stat-number {
            font-size: 22px;
            line-height: 1.1;
            margin-top: 1px;
        }

        .stats .stat-title {
            font-size: 9px;
            line-height: 1.1;
        }

        .stats .stat-desc {
            line-height: 1.1;
            margin-top: 2px;
            font-size: 9px;
        }

        .stats-pendaftar .stat-card {
            min-height: 145px;
            height: 145px;
        }

        .stat-card {
            min-height: 145px;
            border-radius: 15px;
            padding: 18px;
            color: white;
            position: relative;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(15, 23, 42, 0.12);
            transition: all 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 14px 28px rgba(15, 23, 42, 0.18);
        }

        .stat-card::after {
            content: "";
            position: absolute;
            width: 110px;
            height: 110px;
            right: -35px;
            top: -35px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.12);
        }

        .stat-card::before {
            content: "";
            position: absolute;
            width: 70px;
            height: 70px;
            right: 45px;
            bottom: -45px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.08);
        }

        .stat-blue {
            background: linear-gradient(135deg, #2563eb, #06b6d4);
        }

        .stat-green {
            background: linear-gradient(135deg, #059669, #22c55e);
        }

        .stat-purple {
            background: linear-gradient(135deg, #7c3aed, #c026d3);
        }

        .stat-orange {
            background: linear-gradient(135deg, #ea580c, #f59e0b);
        }

        .stat-red {
            background: linear-gradient(135deg, #dc2626, #f87171);
        }

        .stat-teal {
            background: linear-gradient(135deg, #0f766e, #2dd4bf);
        }

        .stat-icon {
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.18);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            margin-bottom: 12px;
            position: relative;
            z-index: 2;
        }

        .stat-title {
            font-size: 11px;
            font-weight: bold;
            letter-spacing: 0.4px;
            opacity: 0.95;
            position: relative;
            z-index: 2;
        }

        .stat-number {
            font-size: 32px;
            font-weight: bold;
            margin-top: 5px;
            position: relative;
            z-index: 2;
        }

        .stat-desc {
            font-size: 11px;
            opacity: 0.9;
            margin-top: 5px;
            position: relative;
            z-index: 2;
            overflow-wrap: anywhere;
        }

        /* GRAFIK STATISTIK */
        .charts-layout {
            display: grid;
            grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
            gap: 22px;
            margin: 0 0 30px;
        }

        .chart-card {
            background: #fff;
            border: 1px solid #e2e8f0;
            border-radius: 18px;
            padding: 24px;
            min-width: 0;
            box-shadow: 0 8px 25px rgba(15, 23, 42, 0.07);
            transform: translateY(0) scale(1);
            transform-origin: center;
            transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
            position: relative;
            z-index: 1;
        }

        .chart-card:hover {
            transform: translateY(-5px) scale(1.015);
            box-shadow: 0 18px 36px rgba(15, 23, 42, 0.15);
            border-color: #bfdbfe;
            z-index: 3;
        }

        .chart-card canvas {
            cursor: pointer;
        }

        .chart-card h2 {
            margin: 0 0 6px;
            color: #0f172a;
            font-size: 18px;
        }

        .chart-card p {
            margin: 0 0 18px;
            color: #64748b;
            font-size: 12px;
        }

        .chart-container {
            position: relative;
            width: 100%;
            height: 280px;
        }

        /* TABEL EVENT */

        .table-box {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(15, 23, 42, 0.08);
        }

        .table-top {
            background: white;
            padding: 23px 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            border-bottom: 1px solid #e5e7eb;
        }

        .table-top h2 {
            margin: 0;
            font-size: 20px;
            color: #0f172a;
        }

        .table-top p {
            margin: 5px 0 0;
            font-size: 13px;
            color: #64748b;
        }

        .event-count {
            background: #dbeafe;
            color: #1d4ed8;
            padding: 8px 14px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
            white-space: nowrap;
        }

        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 1150px;
        }

        thead th {
            background: #172554;
            color: #dbeafe;
            padding: 16px 14px;
            font-size: 12px;
            text-align: left;
            text-transform: uppercase;
            letter-spacing: 0.4px;
        }

        tbody td {
            padding: 15px 14px;
            border-bottom: 1px solid #edf2f7;
            font-size: 13px;
            vertical-align: middle;
        }

        tbody tr:nth-child(even) {
            background: #f8fbff;
        }

        tbody tr:hover {
            background: #eaf4ff;
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        .nomor {
            color: #94a3b8;
            font-weight: bold;
        }

        .nama-event {
            font-size: 14px;
            font-weight: bold;
            color: #0f172a;
            margin-bottom: 4px;
        }

        .kategori {
            color: #64748b;
            font-size: 12px;
        }

        .tanggal {
            font-weight: bold;
            color: #334155;
        }

        .lokasi {
            color: #64748b;
        }

        /* BADGE */

        .badge {
            display: inline-block;
            padding: 6px 10px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: bold;
        }

        .badge-umum {
            background: #dbeafe;
            color: #1d4ed8;
        }

        .badge-sekolah {
            background: #f3e8ff;
            color: #9333ea;
        }

        /* POSTER */

        .poster {
            width: 58px;
            height: 76px;
            object-fit: cover;
            border-radius: 8px;
            border: 2px solid #dbeafe;
            transition: 0.2s;
        }

        .poster:hover {
            transform: scale(1.08);
        }

        /* DOKUMEN */

        .file-link {
            display: block;
            width: fit-content;
            padding: 6px 10px;
            margin-bottom: 5px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 11px;
            font-weight: bold;
            transition: 0.2s;
        }

        .proposal {
            background: #e0f2fe;
            color: #0369a1;
        }

        .peraturan {
            background: #f3e8ff;
            color: #7e22ce;
        }

        .file-link:hover {
            opacity: 0.8;
            transform: translateX(2px);
        }

        .tidak-ada {
            color: #94a3b8;
            font-size: 12px;
        }

        /* AKSI */

        .aksi {
            white-space: nowrap;
        }

        .edit-btn {
            display: inline-block;
            background: #dbeafe;
            color: #1d4ed8;
            text-decoration: none;
            padding: 7px 11px;
            border-radius: 6px;
            font-size: 12px;
            font-weight: bold;
            margin-right: 5px;
            transition: 0.2s;
        }

        .edit-btn:hover {
            background: #bfdbfe;
            transform: translateY(-1px);
        }

        .delete-btn {
            background: #fee2e2;
            color: #dc2626;
            border: none;
            padding: 7px 11px;
            border-radius: 6px;
            font-size: 12px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.2s;
        }

        .delete-btn:hover {
            background: #fecaca;
            transform: translateY(-1px);
        }

        /* PESAN SUKSES */

        .success {
            background: #dcfce7;
            color: #166534;
            border: 1px solid #bbf7d0;
            padding: 13px 16px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 13px;
        }

        /* KOSONG */

        .empty {
            text-align: center;
            padding: 55px 20px;
            color: #64748b;
        }

        .empty-icon {
            font-size: 40px;
            margin-bottom: 10px;
        }

        /* RESPONSIVE */

        @media (max-width: 1000px) {
            .stats-layout,
            .charts-layout {
                grid-template-columns: 1fr;
            }

            .stats {
                grid-template-columns: minmax(0, 1fr);
            }

            .stats-pendaftar {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 600px) {
            .container {
                width: 94%;
                padding-top: 20px;
            }

            .welcome {
                padding: 23px;
            }

            .welcome h1 {
                font-size: 24px;
            }

            .header-buttons {
                width: 100%;
            }

            .btn-pendaftar,
            .btn-tambah {
                width: 100%;
                text-align: center;
            }

            .admin-name {
                display: none;
            }

            .stats-dashboard-panel {
                padding: 16px;
            }

            .stats {
                grid-template-columns: minmax(0, 1fr);
                gap: 10px;
            }

            .stats-pendaftar {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 10px;
            }

            .stats-section {
                padding: 15px;
            }

            .chart-card {
                padding: 18px;
            }

            .chart-card:hover {
                transform: translateY(-3px) scale(1.005);
            }

            .stat-card {
                min-height: 135px;
                padding: 13px;
            }

            .stats .stat-card {
                height: auto;
                min-height: 100px;
            }

            .stats-pendaftar .stat-card {
                height: auto;
                min-height: 135px;
            }

            .stat-number {
                font-size: 27px;
            }

            .stat-title {
                font-size: 10px;
            }

            .stat-desc {
                font-size: 10px;
            }

            .table-top {
                align-items: flex-start;
                flex-direction: column;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->

    <nav>
        <div class="logo">
            Sport<span>Ku</span>
        </div>

        <div class="nav-right">
            <div class="admin-name">
                {{ auth()->user()->name }}
            </div>

            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="logout-btn">Logout</button>
            </form>
        </div>
    </nav>

    <div class="container">

        <!-- PESAN SUKSES -->

        @if(session('success'))
            <div class="success">
                ✓ {{ session('success') }}
            </div>
        @endif

        <!-- HEADER -->

        <div class="welcome">
            <div>
                <h1>Dashboard Admin</h1>
                <p>Kelola event olahraga Kabupaten Klaten melalui SportKu.</p>
            </div>

            <div class="header-buttons">
                <a href="/admin/pendaftar" class="btn-pendaftar">
                    👥 Daftar Pendaftar
                </a>

                <a href="/admin/event/tambah" class="btn-tambah">
                    + Tambah Event
                </a>
            </div>
        </div>

        <!-- PANEL GABUNGAN STATISTIK -->

        <div class="stats-dashboard-panel">
        <div class="stats-layout">

            <!-- KOLOM KIRI: STATISTIK EVENT -->

            <div class="stats-section">

                <h2 class="section-title">🏆 Statistik Event</h2>

                <div class="stats">

                    <div class="stat-card stat-blue">
                        <div class="stat-icon">🏆</div>
                        <div class="stat-title">TOTAL EVENT</div>
                        <div class="stat-number">{{ $totalEvent }}</div>
                        <div class="stat-desc">Seluruh event olahraga</div>
                    </div>

                    <div class="stat-card stat-green">
                        <div class="stat-icon">🌎</div>
                        <div class="stat-title">EVENT UMUM</div>
                        <div class="stat-number">
                            {{ $eventUmum }}
                        </div>
                        <div class="stat-desc">Terbuka untuk umum</div>
                    </div>

                    <div class="stat-card stat-purple">
                        <div class="stat-icon">🏫</div>
                        <div class="stat-title">ANTAR SEKOLAH</div>
                        <div class="stat-number">
                            {{ $eventAntarSekolah }}
                        </div>
                        <div class="stat-desc">Kompetisi antar sekolah</div>
                    </div>

                </div>
            </div>

            <!-- KOLOM KANAN: STATISTIK PENDAFTARAN -->

            <div class="stats-section">

                <h2 class="section-title">👥 Statistik Pendaftaran</h2>

                <div class="stats-pendaftar">

                    <div class="stat-card stat-teal">
                        <div class="stat-icon">👥</div>
                        <div class="stat-title">TOTAL PENDAFTARAN</div>
                        <div class="stat-number">{{ $totalPendaftar }}</div>
                        <div class="stat-desc">Semua data pendaftaran</div>
                    </div>

                    <div class="stat-card stat-orange">
                        <div class="stat-icon">⏳</div>
                        <div class="stat-title">MENUNGGU</div>
                        <div class="stat-number">{{ $pendaftarMenunggu }}</div>
                        <div class="stat-desc">Menunggu keputusan admin</div>
                    </div>

                    <div class="stat-card stat-green">
                        <div class="stat-icon">✅</div>
                        <div class="stat-title">DITERIMA</div>
                        <div class="stat-number">{{ $pendaftarDiterima }}</div>
                        <div class="stat-desc">Pendaftaran diterima</div>
                    </div>

                    <div class="stat-card stat-red">
                        <div class="stat-icon">❌</div>
                        <div class="stat-title">DITOLAK</div>
                        <div class="stat-number">{{ $pendaftarDitolak }}</div>
                        <div class="stat-desc">Pendaftaran ditolak</div>
                    </div>

                </div>
            </div>

        </div>
        </div>

        <!-- GRAFIK STATISTIK -->
        <div class="charts-layout">
            <div class="chart-card">
                <h2>📊 Status Pendaftaran</h2>
                <p>Perbandingan pendaftar berdasarkan status saat ini.</p>
                <div class="chart-container">
                    <canvas id="grafikPendaftaran"></canvas>
                </div>
            </div>

            <div class="chart-card">
                <h2>🏆 Jenis Event</h2>
                <p>Perbandingan event umum dan antar sekolah.</p>
                <div class="chart-container">
                    <canvas id="grafikEvent"></canvas>
                </div>
            </div>
        </div>

        <!-- TABEL EVENT -->

        <div class="table-box">

            <div class="table-top">
                <div>
                    <h2>Event Olahraga</h2>
                    <p>Daftar event yang telah ditambahkan admin.</p>
                </div>

                <div class="event-count">
                    {{ $events->count() }} Event
                </div>
            </div>

            @if($events->count() > 0)

                <div class="table-wrapper">
                    <table>

                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Event</th>
                                <th>Tanggal</th>
                                <th>Lokasi</th>
                                <th>Jenis</th>
                                <th>Poster</th>
                                <th>Dokumen</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($events as $event)
                                <tr>

                                    <td class="nomor">
                                        {{ $loop->iteration }}
                                    </td>

                                    <td>
                                        <div class="nama-event">
                                            {{ $event->nama_event }}
                                        </div>
                                        <div class="kategori">
                                            {{ $event->kategori }}
                                        </div>
                                    </td>

                                    <td class="tanggal">
                                        {{ \Carbon\Carbon::parse($event->tanggal)->format('d-m-Y') }}
                                    </td>

                                    <td class="lokasi">
                                        📍 {{ $event->lokasi }}
                                    </td>

                                    <td>
                                        @if($event->jenis == 'Umum')
                                            <span class="badge badge-umum">Umum</span>
                                        @else
                                            <span class="badge badge-sekolah">Antar Sekolah</span>
                                        @endif
                                    </td>

                                    <td>
                                        @if($event->poster)
                                            <a
                                                href="{{ asset('storage/' . $event->poster) }}"
                                                target="_blank">

                                                <img
                                                    src="{{ asset('storage/' . $event->poster) }}"
                                                    class="poster"
                                                    alt="Poster {{ $event->nama_event }}">
                                            </a>
                                        @else
                                            <span class="tidak-ada">Tidak ada</span>
                                        @endif
                                    </td>

                                    <td>
                                        @if($event->proposal)
                                            <a
                                                href="{{ asset('storage/' . $event->proposal) }}"
                                                target="_blank"
                                                class="file-link proposal">
                                                📄 Proposal
                                            </a>
                                        @endif

                                        @if($event->peraturan)
                                            <a
                                                href="{{ asset('storage/' . $event->peraturan) }}"
                                                target="_blank"
                                                class="file-link peraturan">
                                                📘 Peraturan
                                            </a>
                                        @endif

                                        @if(!$event->proposal && !$event->peraturan)
                                            <span class="tidak-ada">Tidak ada</span>
                                        @endif
                                    </td>

                                    <td class="aksi">
                                        <a
                                            href="/admin/event/{{ $event->id }}/edit"
                                            class="edit-btn">
                                            ✏ Edit
                                        </a>

                                        <form
                                            action="/admin/event/{{ $event->id }}"
                                            method="POST"
                                            style="display:inline;"
                                            onsubmit="return confirm('Yakin ingin menghapus event ini?')">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="delete-btn">
                                                🗑 Hapus
                                            </button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>

            @else

                <div class="empty">
                    <div class="empty-icon">🏆</div>
                    <strong>Belum ada event olahraga</strong>
                    <p>Silakan tambahkan event terlebih dahulu.</p>
                </div>

            @endif

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Grafik status pendaftaran (data langsung dari Laravel)
        const dataPendaftaran = {
            labels: ['Menunggu', 'Diterima', 'Ditolak'],
            datasets: [{
                data: [
                    {{ $pendaftarMenunggu }},
                    {{ $pendaftarDiterima }},
                    {{ $pendaftarDitolak }}
                ],
                backgroundColor: ['#f59e0b', '#22c55e', '#ef4444'],
                borderColor: '#ffffff',
                borderWidth: 3,
                hoverOffset: 8
            }]
        };

        new Chart(document.getElementById('grafikPendaftaran'), {
            type: 'doughnut',
            data: dataPendaftaran,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                cutout: '62%',
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: { padding: 18, usePointStyle: true }
                    },
                    tooltip: { enabled: true }
                }
            }
        });

        // Grafik jumlah event berdasarkan jenis
        new Chart(document.getElementById('grafikEvent'), {
            type: 'bar',
            data: {
                labels: ['Umum', 'Antar Sekolah'],
                datasets: [{
                    label: 'Jumlah Event',
                    data: [{{ $eventUmum }}, {{ $eventAntarSekolah }}],
                    backgroundColor: ['#10b981', '#a855f7'],
                    borderRadius: 9,
                    maxBarThickness: 75
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: { precision: 0, stepSize: 1 }
                    }
                },
                plugins: {
                    legend: { display: false },
                    tooltip: { enabled: true }
                }
            }
        });
    </script>
</body>
</html>
