<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Event - SportKu</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f7fb;
            margin: 0;
            padding: 30px;
        }

        .container {
            max-width: 700px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
        }

        h2 {
            color: #1565c0;
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input, select, textarea {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        textarea {
            height: 100px;
        }

        button {
            margin-top: 20px;
            padding: 10px 20px;
            background: #1565c0;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .kembali {
            display: inline-block;
            margin-top: 15px;
            color: #1565c0;
            text-decoration: none;
        }
    </style>
</head>

<body>

<div class="container">

    <h2>Edit Event</h2>

    <form action="/admin/event/{{ $event->id }}" method="POST"
          enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <label>Nama Event</label>
        <input type="text" name="nama_event"
               value="{{ $event->nama_event }}" required>

        <label>Kategori</label>
        <input type="text" name="kategori"
               value="{{ $event->kategori }}" required>

        <label>Tanggal</label>
        <input type="date" name="tanggal"
               value="{{ $event->tanggal }}" required>

        <label>Lokasi</label>
        <input type="text" name="lokasi"
               value="{{ $event->lokasi }}" required>

        <label>Deskripsi</label>
        <textarea name="deskripsi" required>{{ $event->deskripsi }}</textarea>

        <label>Kuota</label>
        <input type="number" name="kuota"
               value="{{ $event->kuota }}" required>

        <label>Jenis Event</label>
        <select name="jenis" required>
            <option value="Umum" {{ $event->jenis == 'Umum' ? 'selected' : '' }}>
                Umum
            </option>

            <option value="Antar Sekolah" {{ $event->jenis == 'Antar Sekolah' ? 'selected' : '' }}>
                Antar Sekolah
            </option>
        </select>

        <label>Tingkatan Sekolah</label>
        <select name="tingkatan">
            <option value="">-- Pilih Tingkatan --</option>

            <option value="SD" {{ $event->tingkatan == 'SD' ? 'selected' : '' }}>
                SD
            </option>

            <option value="SMP" {{ $event->tingkatan == 'SMP' ? 'selected' : '' }}>
                SMP
            </option>

            <option value="SMA/SMK" {{ $event->tingkatan == 'SMA/SMK' ? 'selected' : '' }}>
                SMA/SMK
            </option>
        </select>

        <label>Poster Event</label>
        <input type="file" name="poster" accept="image/*">

        <label>Proposal Event</label>
        <input type="file" name="proposal" accept=".pdf">

        <label>Peraturan Event</label>
        <input type="file" name="peraturan" accept=".pdf">

        <button type="submit">
            Simpan Perubahan
        </button>

    </form>

    <a href="/admin" class="kembali">
        ← Kembali ke Dashboard
    </a>

</div>

</body>
</html>