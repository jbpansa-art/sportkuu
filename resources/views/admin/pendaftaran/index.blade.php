<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Daftar Pendaftar - SportKu</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            margin: 0;
            background: #eef2f7;
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
            color: white;
            font-size: 24px;
            font-weight: bold;
        }

        .logo span {
            color: #38bdf8;
        }

        .back {
            color: #cbd5e1;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
        }

        .back:hover {
            color: white;
        }

        /* =========================
           CONTAINER
        ========================= */

        .container {
            width: 88%;
            max-width: 1450px;
            margin: auto;
            padding: 35px 0 50px;
        }

        /* =========================
           PESAN
        ========================= */

        .success {
            background: #dcfce7;
            color: #166534;
            border: 1px solid #bbf7d0;
            padding: 13px 16px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 13px;
        }

        /* =========================
           HEADER
        ========================= */

        .header {
            background: linear-gradient(135deg, #0f172a, #1d4ed8);
            color: white;
            padding: 30px;
            border-radius: 15px;
            margin-bottom: 25px;
            box-shadow: 0 10px 25px rgba(15, 23, 42, 0.15);
        }

        .header h1 {
            margin: 0 0 8px;
            font-size: 28px;
        }

        .header p {
            margin: 0;
            color: #dbeafe;
            font-size: 14px;
        }

        /* =========================
           TABLE
        ========================= */

        .table-box {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 7px 20px rgba(15, 23, 42, 0.07);
        }

        .table-top {
            padding: 22px 25px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid #e5e7eb;
        }

        .table-top h2 {
            margin: 0;
            color: #0f172a;
            font-size: 20px;
        }

        .table-top p {
            margin: 5px 0 0;
            color: #64748b;
            font-size: 13px;
        }

        .count {
            background: #dbeafe;
            color: #1d4ed8;
            padding: 8px 13px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
        }

        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 1150px;
        }

        /* HEADER TABEL */

        thead th {
            background: #172554;
            color: #dbeafe;
            padding: 15px;
            text-align: left;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 0.4px;
        }

        /* ISI */

        tbody td {
            padding: 15px;
            border-bottom: 1px solid #e5e7eb;
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

        /* =========================
           NAMA
        ========================= */

        .participant-name {
            font-weight: bold;
            color: #0f172a;
            margin-bottom: 4px;
        }

        .participant-info {
            color: #64748b;
            font-size: 12px;
        }

        .event-name {
            font-weight: bold;
            color: #0f172a;
            margin-bottom: 4px;
        }

        .event-info {
            color: #64748b;
            font-size: 12px;
        }

        /* =========================
           STATUS
        ========================= */

        .status {
            display: inline-block;
            padding: 6px 10px;
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

        /* =========================
           AKSI
        ========================= */

        .aksi {
            white-space: nowrap;
        }

        .btn-terima {
            background: #dcfce7;
            color: #166534;
            border: 1px solid #bbf7d0;
            padding: 7px 10px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 12px;
            font-weight: bold;
            margin-right: 5px;
            transition: 0.2s;
        }

        .btn-terima:hover {
            background: #bbf7d0;
        }

        .btn-tolak {
            background: #fee2e2;
            color: #dc2626;
            border: 1px solid #fecaca;
            padding: 7px 10px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 12px;
            font-weight: bold;
            transition: 0.2s;
        }

        .btn-tolak:hover {
            background: #fecaca;
        }

        .sudah-diterima {
            color: #16a34a;
            font-weight: bold;
            font-size: 12px;
        }

        .sudah-ditolak {
            color: #dc2626;
            font-weight: bold;
            font-size: 12px;
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
            font-size: 40px;
            margin-bottom: 10px;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 800px) {

            .container {
                width: 92%;
            }

            .table-top {
                align-items: flex-start;
                gap: 15px;
                flex-direction: column;
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
            Sport<span>Ku</span> Admin
        </div>

        <a href="/admin" class="back">
            ← Dashboard Admin
        </a>

    </nav>


    <div class="container">

        <!-- =========================
             PESAN SUKSES
        ========================= -->

        @if(session('success'))

            <div class="success">
                ✓ {{ session('success') }}
            </div>

        @endif


        <!-- =========================
             HEADER
        ========================= -->

        <div class="header">

            <h1>
                Daftar Pendaftar
            </h1>

            <p>
                Kelola peserta yang telah mendaftar event olahraga di SportKu.
            </p>

        </div>


        <!-- =========================
             TABLE
        ========================= -->

        <div class="table-box">

            <div class="table-top">

                <div>

                    <h2>
                        Data Pendaftar
                    </h2>

                    <p>
                        Admin dapat menerima atau menolak pendaftaran.
                    </p>

                </div>

                <div class="count">
                    {{ $pendaftarans->count() }} Pendaftar
                </div>

            </div>


            @if($pendaftarans->count() > 0)

                <div class="table-wrapper">

                    <table>

                        <thead>

                            <tr>

                                <th>No</th>
                                <th>Peserta</th>
                                <th>Event</th>
                                <th>No. HP</th>
                                <th>Alamat</th>
                                <th>Sekolah</th>
                                <th>Tingkatan</th>
                                <th>Status</th>
                                <th>Aksi</th>

                            </tr>

                        </thead>


                        <tbody>

                            @foreach($pendaftarans as $pendaftaran)

                                <tr>

                                    <!-- NOMOR -->

                                    <td>
                                        {{ $loop->iteration }}
                                    </td>


                                    <!-- PESERTA -->

                                    <td>

                                        <div class="participant-name">
                                            {{ $pendaftaran->nama_peserta }}
                                        </div>

                                        <div class="participant-info">
                                            Peserta
                                        </div>

                                    </td>


                                    <!-- EVENT -->

                                    <td>

                                        <div class="event-name">
                                            {{ $pendaftaran->event->nama_event }}
                                        </div>

                                        <div class="event-info">
                                            {{ $pendaftaran->event->kategori }}
                                        </div>

                                    </td>


                                    <!-- NO HP -->

                                    <td>
                                        {{ $pendaftaran->no_hp }}
                                    </td>


                                    <!-- ALAMAT -->

                                    <td>
                                        {{ $pendaftaran->alamat }}
                                    </td>


                                    <!-- SEKOLAH -->

                                    <td>

                                        @if($pendaftaran->nama_sekolah)

                                            {{ $pendaftaran->nama_sekolah }}

                                        @else

                                            <span style="color:#94a3b8;">
                                                -
                                            </span>

                                        @endif

                                    </td>


                                    <!-- TINGKATAN -->

                                    <td>

                                        @if($pendaftaran->tingkatan_sekolah)

                                            {{ $pendaftaran->tingkatan_sekolah }}

                                        @else

                                            <span style="color:#94a3b8;">
                                                -
                                            </span>

                                        @endif

                                    </td>


                                    <!-- STATUS -->

                                    <td>

                                        @if($pendaftaran->status == 'Menunggu')

                                            <span class="status menunggu">
                                                Menunggu
                                            </span>

                                        @elseif($pendaftaran->status == 'Diterima')

                                            <span class="status diterima">
                                                Diterima
                                            </span>

                                        @else

                                            <span class="status ditolak">
                                                Ditolak
                                            </span>

                                        @endif

                                    </td>


                                    <!-- AKSI -->

                                    <td class="aksi">

                                        @if($pendaftaran->status == 'Menunggu')


                                            <!-- TERIMA -->

                                            <form
                                                action="/admin/pendaftar/{{ $pendaftaran->id }}/terima"
                                                method="POST"
                                                style="display:inline;"
                                                onsubmit="return confirm('Yakin ingin menerima pendaftar ini?')">

                                                @csrf

                                                <button
                                                    type="submit"
                                                    class="btn-terima">

                                                    ✓ Terima

                                                </button>

                                            </form>


                                            <!-- TOLAK -->

                                            <form
                                                action="/admin/pendaftar/{{ $pendaftaran->id }}/tolak"
                                                method="POST"
                                                style="display:inline;"
                                                onsubmit="return confirm('Yakin ingin menolak pendaftar ini?')">

                                                @csrf

                                                <button
                                                    type="submit"
                                                    class="btn-tolak">

                                                    ✕ Tolak

                                                </button>

                                            </form>


                                        @elseif($pendaftaran->status == 'Diterima')

                                            <span class="sudah-diterima">
                                                ✓ Sudah Diterima
                                            </span>


                                        @else

                                            <span class="sudah-ditolak">
                                                ✕ Sudah Ditolak
                                            </span>

                                        @endif

                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>


            @else

                <div class="empty">

                    <div class="empty-icon">
                        📋
                    </div>

                    <h3>
                        Belum Ada Pendaftar
                    </h3>

                    <p>
                        Belum ada user yang mendaftar event.
                    </p>

                </div>

            @endif

        </div>

    </div>

</body>

</html>