<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Event - SportKu</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            margin: 0;
            background: #f5f7fa;
        }

        nav {
            height: 70px;
            background: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 8%;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }

        .logo {
            color: #1677ff;
            font-size: 25px;
            font-weight: bold;
        }

        .back {
            color: #1677ff;
            text-decoration: none;
            font-weight: bold;
        }

        .container {
            max-width: 850px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .box {
            background: white;
            padding: 35px;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.08);
        }

        h1 {
            margin-top: 0;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 11px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 15px;
        }

        input[type="file"] {
            background: white;
            padding: 9px;
        }

        textarea {
            min-height: 120px;
            resize: vertical;
        }

        .btn {
            background: #1677ff;
            color: white;
            border: none;
            padding: 12px 22px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 15px;
            font-weight: bold;
        }

        .error {
            background: #ffe5e5;
            color: #c62828;
            padding: 12px;
            border-radius: 6px;
            margin-bottom: 20px;
        }

        .info {
            color: #666;
            font-size: 13px;
            margin-top: 5px;
        }

        .file-info {
            color: #666;
            font-size: 13px;
            margin-top: 6px;
        }
    </style>

</head>

<body>

<nav>

    <div class="logo">
        SportKu Admin
    </div>

    <a href="/admin" class="back">
        ← Kembali
    </a>

</nav>


<div class="container">

    <div class="box">

        <h1>
            Tambah Event Olahraga
        </h1>

        <p>
            Masukkan informasi event olahraga yang akan ditampilkan di SportKu.
        </p>


        @if ($errors->any())

            <div class="error">

                <strong>Terjadi kesalahan:</strong>

                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>

            </div>

        @endif


        <form
            action="/admin/event"
            method="POST"
            enctype="multipart/form-data"
        >

            @csrf


            <div class="form-group">

                <label>Nama Event</label>

                <input
                    type="text"
                    name="nama_event"
                    placeholder="Contoh: Futsal Klaten Cup"
                    value="{{ old('nama_event') }}"
                    required
                >

            </div>


            <div class="form-group">

                <label>Kategori Olahraga</label>

                <select name="kategori" required>

                    <option value="">
                        -- Pilih Kategori --
                    </option>

                    <option value="Futsal">Futsal</option>
                    <option value="Sepak Bola">Sepak Bola</option>
                    <option value="Badminton">Badminton</option>
                    <option value="Basket">Basket</option>
                    <option value="Voli">Voli</option>
                    <option value="Tenis Meja">Tenis Meja</option>
                    <option value="Lari">Lari</option>
                    <option value="Lainnya">Lainnya</option>

                </select>

            </div>


            <div class="form-group">

                <label>Tanggal Event</label>

                <input
                    type="date"
                    name="tanggal"
                    value="{{ old('tanggal') }}"
                    required
                >

            </div>


            <div class="form-group">

                <label>Lokasi</label>

                <input
                    type="text"
                    name="lokasi"
                    placeholder="Contoh: GOR Klaten"
                    value="{{ old('lokasi') }}"
                    required
                >

            </div>


            <div class="form-group">

                <label>Deskripsi</label>

                <textarea
                    name="deskripsi"
                    placeholder="Jelaskan tentang event..."
                    required
                >{{ old('deskripsi') }}</textarea>

            </div>


            <div class="form-group">

                <label>Kuota Peserta</label>

                <input
                    type="number"
                    name="kuota"
                    placeholder="Contoh: 32"
                    value="{{ old('kuota') }}"
                    min="1"
                    required
                >

            </div>


            <div class="form-group">

                <label>Jenis Event</label>

                <select name="jenis" required>

                    <option value="">
                        -- Pilih Jenis Event --
                    </option>

                    <option value="Umum">
                        Umum
                    </option>

                    <option value="Antar Sekolah">
                        Antar Sekolah
                    </option>

                </select>

            </div>


            <div class="form-group">

                <label>Tingkatan Sekolah</label>

                <select name="tingkatan">

                    <option value="">
                        -- Tidak Ada / Umum --
                    </option>

                    <option value="SD">
                        SD
                    </option>

                    <option value="SMP">
                        SMP
                    </option>

                    <option value="SMA/SMK">
                        SMA/SMK
                    </option>

                    <option value="Semua Tingkatan">
                        Semua Tingkatan
                    </option>

                </select>

                <div class="info">
                    Diisi jika event merupakan event antar sekolah.
                </div>

            </div>


            <!-- POSTER -->

            <div class="form-group">

                <label>Poster Event</label>

                <input
                    type="file"
                    name="poster"
                    accept="image/*"
                >

                <div class="file-info">
                    Format: JPG, JPEG, PNG, atau WEBP. Maksimal 2 MB.
                </div>

            </div>


            <!-- PROPOSAL -->

            <div class="form-group">

                <label>Proposal Event</label>

                <input
                    type="file"
                    name="proposal"
                    accept=".pdf"
                >

                <div class="file-info">
                    Format: PDF. Maksimal 5 MB.
                </div>

            </div>


            <!-- PERATURAN -->

            <div class="form-group">

                <label>Peraturan Event</label>

                <input
                    type="file"
                    name="peraturan"
                    accept=".pdf"
                >

                <div class="file-info">
                    Format: PDF. Maksimal 5 MB.
                </div>

            </div>


            <button type="submit" class="btn">
                Simpan Event
            </button>

        </form>

    </div>

</div>

</body>

</html>