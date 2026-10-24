
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Pendaftaran | SportKu</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f3f6fb;
            color: #1e293b;
        }

        nav {
            background: #123b75;
            color: white;
            padding: 17px 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        .brand {
            font-size: 24px;
            font-weight: bold;
            letter-spacing: .5px;
        }

        .brand span {
            color: #ffc857;
        }

        .nav-links {
            display: flex;
            gap: 22px;
            flex-wrap: wrap;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-size: 14px;
        }

        nav a:hover {
            color: #ffc857;
        }

        .container {
            max-width: 1100px;
            margin: 35px auto;
            padding: 0 20px;
        }

        .page-heading {
            margin-bottom: 25px;
        }

        .page-heading h1 {
            margin: 0 0 8px;
            color: #123b75;
            font-size: 29px;
        }

        .page-heading p {
            margin: 0;
            color: #64748b;
            line-height: 1.6;
        }

        .registration-card {
            background: white;
            border-radius: 15px;
            margin-bottom: 25px;
            overflow: hidden;
            border: 1px solid #e2e8f0;
            box-shadow: 0 5px 18px rgba(15, 23, 42, .06);
        }

        .card-top {
            background: linear-gradient(120deg, #123b75, #2165b5);
            color: white;
            padding: 22px 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            flex-wrap: wrap;
        }

        .card-top small {
            display: block;
            color: #dbeafe;
            margin-bottom: 7px;
        }

        .card-top h2 {
            margin: 0;
            font-size: 21px;
        }

        .status {
            display: inline-block;
            padding: 9px 14px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
            background: white;
            white-space: nowrap;
        }

        .status-menunggu {
            color: #92400e;
            background: #fef3c7;
        }

        .status-diterima {
            color: #166534;
            background: #dcfce7;
        }

        .status-ditolak {
            color: #991b1b;
            background: #fee2e2;
        }

        .card-content {
            padding: 25px;
        }

        .section-title {
            font-size: 15px;
            color: #123b75;
            border-bottom: 1px solid #e2e8f0;
            padding-bottom: 10px;
            margin: 0 0 17px;
        }

        .detail-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 18px 30px;
        }

        .detail-item small {
            display: block;
            color: #64748b;
            font-size: 12px;
            margin-bottom: 6px;
        }

        .detail-item strong {
            display: block;
            font-size: 14px;
            line-height: 1.5;
            overflow-wrap: anywhere;
        }

        .status-info {
            background: #eff6ff;
            border-left: 4px solid #2563eb;
            color: #1e40af;
            padding: 13px 15px;
            margin-top: 23px;
            border-radius: 5px;
            font-size: 13px;
            line-height: 1.6;
        }

        .status-info.diterima {
            background: #f0fdf4;
            border-color: #16a34a;
            color: #166534;
        }

        .status-info.ditolak {
            background: #fef2f2;
            border-color: #dc2626;
            color: #991b1b;
        }

        .card-actions {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            margin-top: 23px;
        }

        .btn {
            border: none;
            border-radius: 8px;
            padding: 11px 16px;
            font-weight: bold;
            font-size: 13px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }

        .btn-print {
            color: white;
            background: #123b75;
        }

        .btn-print:hover {
            background: #1d4f91;
        }

        .btn-detail {
            color: #123b75;
            background: #e8f1ff;
        }

        .empty-state {
            background: white;
            text-align: center;
            padding: 50px 20px;
            border-radius: 15px;
            border: 1px solid #e2e8f0;
        }

        .empty-state h2 {
            color: #123b75;
        }

        .empty-state p {
            color: #64748b;
        }

        /* BAGIAN KHUSUS CETAK */
        .print-header,
        .print-signature,
        .print-footer {
            display: none;
        }

        @media print {
            @page {
                size: A4 portrait;
                margin: 15mm;
            }

            body {
                background: white !important;
                color: #111827;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 12px;
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }

            nav,
            .page-heading,
            .card-actions,
            .status-info,
            .no-print,
            .empty-state {
                display: none !important;
            }

            .container {
                max-width: none;
                margin: 0;
                padding: 0;
            }

            .registration-card {
                display: none !important;
            }

            .registration-card.print-target {
                display: block !important;
                border: 1px solid #cbd5e1;
                border-radius: 0;
                box-shadow: none;
                margin: 0;
                overflow: visible;
                page-break-inside: avoid;
            }

            .registration-card.print-target .card-top {
                display: none !important;
            }

            .registration-card.print-target .card-content {
                padding: 18px;
            }

            .print-header {
                display: block !important;
                text-align: center;
                padding-bottom: 15px;
                border-bottom: 3px solid #123b75;
                margin-bottom: 22px;
            }

            .print-brand {
                font-size: 25px;
                font-weight: bold;
                color: #123b75;
                letter-spacing: 1px;
            }

            .print-brand span {
                color: #d99b16;
            }

            .print-header p {
                margin: 5px 0;
                color: #334155;
            }

            .print-header h2 {
                font-size: 18px;
                margin: 17px 0 5px;
                text-transform: uppercase;
            }

            .print-header .subtitle {
                font-size: 11px;
                color: #64748b;
            }

            .section-title {
                font-size: 12px;
                margin-top: 22px;
                color: #123b75;
                border-bottom: 1px solid #94a3b8;
            }

            .detail-grid {
                grid-template-columns: 1fr 1fr;
                gap: 17px 25px;
            }

            .detail-item small {
                font-size: 10px;
                color: #475569;
            }

            .detail-item strong {
                font-size: 12px;
                color: #111827;
            }

            .print-status-box {
                display: block !important;
                margin-top: 20px;
                border: 1px solid #cbd5e1;
                padding: 12px;
            }

            .print-status-box strong {
                display: inline-block;
                margin-bottom: 5px;
            }

            .print-signature {
                display: flex !important;
                justify-content: flex-end;
                margin-top: 38px;
                page-break-inside: avoid;
            }

            .signature-box {
                text-align: center;
                width: 220px;
                line-height: 1.5;
            }

            .signature-space {
                height: 70px;
            }

            .signature-line {
                border-bottom: 1px solid #111827;
                margin: 0 8px 5px;
            }

            .print-footer {
                display: block !important;
                margin-top: 25px;
                padding-top: 8px;
                border-top: 1px solid #cbd5e1;
                color: #64748b;
                text-align: center;
                font-size: 9px;
            }
        }

        @media (max-width: 650px) {
            nav {
                padding: 16px 5%;
            }

            .container {
                margin-top: 25px;
                padding: 0 13px;
            }

            .detail-grid {
                grid-template-columns: 1fr;
                gap: 15px;
            }

            .card-top,
            .card-content {
                padding: 19px;
            }

            .page-heading h1 {
                font-size: 25px;
            }
        }
    </style>
</head>

<body>

<nav>
    <div class="brand">Sport<span>Ku</span></div>

    <div class="nav-links">
        <a href="/">Beranda</a>
        <a href="/event">Event</a>
        <a href="/dashboard">Dashboard</a>
        <a href="/profil">Profil</a>
    </div>
</nav>

<div class="container">

    <div class="page-heading">
        <h1>Status Pendaftaran</h1>
        <p>Pantau status pendaftaran event olahraga dan cetak bukti pendaftaranmu di sini.</p>
    </div>

    @forelse ($pendaftarans as $pendaftaran)

        @php
            $status = strtolower($pendaftaran->status ?? 'menunggu');

            $statusClass = match ($status) {
                'diterima' => 'status-diterima',
                'ditolak' => 'status-ditolak',
                default => 'status-menunggu',
            };

            $statusText = ucfirst($status);

            $event = $pendaftaran->event;
        @endphp

        <div class="registration-card"
             id="bukti-{{ $pendaftaran->id }}">

            <div class="card-top">
                <div>
                    <small>BUKTI PENDAFTARAN EVENT</small>
                    <h2>{{ $event->nama_event ?? 'Event tidak tersedia' }}</h2>
                </div>

                <span class="status {{ $statusClass }}">
                    {{ $statusText }}
                </span>
            </div>

            <div class="card-content">

                <!-- Bagian kop hanya muncul saat dicetak -->
                <div class="print-header">
                    <div class="print-brand">Sport<span>Ku</span></div>
                    <p>Informasi dan Pendaftaran Event Olahraga</p>
                    <p>Kabupaten Klaten</p>

                    <h2>Bukti Pendaftaran Peserta</h2>
                    <div class="subtitle">
                        Dokumen bukti pendaftaran event olahraga
                    </div>
                </div>

                <h3 class="section-title">INFORMASI EVENT</h3>

                <div class="detail-grid">
                    <div class="detail-item">
                        <small>Nama Event</small>
                        <strong>{{ $event->nama_event ?? '-' }}</strong>
                    </div>

                    <div class="detail-item">
                        <small>Tanggal Pelaksanaan</small>
                        <strong>
                            @if ($event && $event->tanggal)
                                {{ \Carbon\Carbon::parse($event->tanggal)->translatedFormat('d F Y') }}
                            @else
                                -
                            @endif
                        </strong>
                    </div>

                    <div class="detail-item">
                        <small>Lokasi</small>
                        <strong>{{ $event->lokasi ?? '-' }}</strong>
                    </div>

                    <div class="detail-item">
                        <small>Nomor Pendaftaran</small>
                        <strong>SK-{{ str_pad($pendaftaran->id, 5, '0', STR_PAD_LEFT) }}</strong>
                    </div>
                </div>

                <h3 class="section-title">DATA PESERTA</h3>

                <div class="detail-grid">
                    <div class="detail-item">
                        <small>Nama Peserta</small>
                        <strong>
                            {{ $pendaftaran->nama_peserta ?? $pendaftaran->nama ?? auth()->user()->name ?? '-' }}
                        </strong>
                    </div>

                    <div class="detail-item">
                            <small>Asal Sekolah / Instansi</small>
                            <strong>{{ $pendaftaran->nama_sekolah ?? '-' }}</strong>
                    </div>

                    <div class="detail-item">
                            <small>Tingkatan</small>
                            <strong>{{ $pendaftaran->tingkatan_sekolah ?? '-' }}</strong>
                    </div>

                    <div class="detail-item">
                        <small>Tanggal Pendaftaran</small>
                        <strong>
                            @if ($pendaftaran->created_at)
                                {{ $pendaftaran->created_at->translatedFormat('d F Y') }}
                            @else
                                -
                            @endif
                        </strong>
                    </div>
                </div>

                <!-- Status versi cetak -->
                <div class="print-status-box" style="display:none;">
                    <strong>Status Pendaftaran: {{ $statusText }}</strong>
                    <div>
                        Dokumen ini merupakan bukti bahwa data peserta tercatat
                        pada sistem pendaftaran SportKu. Status penerimaan mengikuti
                        hasil verifikasi panitia penyelenggara.
                    </div>
                </div>

                <!-- Catatan versi layar -->
                <div class="status-info
                    {{ $status === 'diterima' ? 'diterima' : ($status === 'ditolak' ? 'ditolak' : '') }}">

                    @if ($status === 'diterima')
                        <strong>Selamat!</strong> Pendaftaran kamu telah diterima.
                        Simpan atau cetak bukti ini sebagai arsip pendaftaran.
                    @elseif ($status === 'ditolak')
                        Pendaftaran ini belum diterima oleh panitia.
                        Hubungi panitia penyelenggara jika membutuhkan informasi lebih lanjut.
                    @else
                        Pendaftaran kamu sedang menunggu verifikasi panitia.
                        Bukti ini dapat dicetak, tetapi status penerimaan belum final.
                    @endif
                </div>

                <!-- Tanda tangan hanya muncul di kertas -->
                <div class="print-signature">
                    <div class="signature-box">
                        <div>
                            Klaten,
                            {{ now()->translatedFormat('d F Y') }}
                        </div>
                        <div>Panitia Penyelenggara,</div>

                        <div class="signature-space"></div>

                        <div class="signature-line"></div>
                        <strong>( ................................ )</strong>
                    </div>
                </div>

                <div class="print-footer">
                    Bukti pendaftaran dibuat melalui sistem SportKu.
                    Tanda tangan dan pengesahan dilakukan oleh panitia penyelenggara.
                </div>

                <div class="card-actions">
                    <button class="btn btn-print"
                            type="button"
                            onclick="cetakBukti('bukti-{{ $pendaftaran->id }}')">
                        Cetak Bukti
                    </button>

                    @if ($event)
                        <a href="{{ url('/event/' . $event->id) }}"
                           class="btn btn-detail">
                            Lihat Detail Event
                        </a>
                    @endif
                </div>

            </div>
        </div>

    @empty

        <div class="empty-state">
            <h2>Belum Ada Pendaftaran</h2>
            <p>Kamu belum mendaftar event olahraga apa pun.</p>
            <a href="/event" class="btn btn-print">Jelajahi Event</a>
        </div>

    @endforelse

</div>

<script>
    function cetakBukti(id) {
        const target = document.getElementById(id);

        if (!target) {
            alert('Bukti pendaftaran tidak ditemukan.');
            return;
        }

        document.querySelectorAll('.registration-card').forEach(function(card) {
            card.classList.remove('print-target');
        });

        target.classList.add('print-target');

        window.print();
    }

    window.addEventListener('afterprint', function() {
        document.querySelectorAll('.registration-card').forEach(function(card) {
            card.classList.remove('print-target');
        });
    });
</script>

</body>
</html>
