<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    // =========================
    // MENAMPILKAN DAFTAR EVENT USER
    // =========================
    public function index(Request $request)
{
    $query = Event::withCount([
        'pendaftarans as pendaftar_aktif_count' => function ($query) {
            $query->where('status', '!=', 'Ditolak');
        }
    ]);

    // Pencarian nama event
    if ($request->filled('search')) {
        $query->where(
            'nama_event',
            'like',
            '%' . $request->search . '%'
        );
    }

    // Filter kategori
    if ($request->filled('kategori')) {
        $query->where(
            'kategori',
            $request->kategori
        );
    }

    // Filter jenis event
    if ($request->filled('jenis')) {
        $query->where(
            'jenis',
            $request->jenis
        );
    }

    $events = $query
        ->latest()
        ->get();

    // Data untuk pilihan filter
    $kategori = Event::select('kategori')
        ->distinct()
        ->orderBy('kategori')
        ->pluck('kategori');

    $jenis = Event::select('jenis')
        ->distinct()
        ->orderBy('jenis')
        ->pluck('jenis');

    return view('events.index', [
        'events' => $events,
        'kategori' => $kategori,
        'jenis' => $jenis,
    ]);
}


    // =========================
    // MENAMPILKAN DETAIL EVENT
    // =========================
    public function show($id)
    {
        $event = Event::withCount([
            'pendaftarans as pendaftar_aktif_count' => function ($query) {
                $query->where('status', '!=', 'Ditolak');
            }
        ])->findOrFail($id);

        return view('events.show', [
            'event' => $event
        ]);
    }


    // =========================
    // MENAMPILKAN FORM TAMBAH
    // =========================
    public function create()
    {
        return view('admin.event.create');
    }


    // =========================
    // MENYIMPAN EVENT BARU
    // =========================
    public function store(Request $request)
    {
        $request->validate([
            'nama_event' => 'required',
            'kategori' => 'required',
            'tanggal' => 'required|date',
            'lokasi' => 'required',
            'deskripsi' => 'required',
            'kuota' => 'required|integer',
            'jenis' => 'required',
            'tingkatan' => 'nullable',

            // File
            'poster' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'proposal' => 'nullable|mimes:pdf|max:5120',
            'peraturan' => 'nullable|mimes:pdf|max:5120',
        ]);


        // =========================
        // UPLOAD POSTER
        // =========================

        $poster = null;

        if ($request->hasFile('poster')) {
            $poster = $request->file('poster')
                ->store('events/posters', 'public');
        }


        // =========================
        // UPLOAD PROPOSAL
        // =========================

        $proposal = null;

        if ($request->hasFile('proposal')) {
            $proposal = $request->file('proposal')
                ->store('events/proposals', 'public');
        }


        // =========================
        // UPLOAD PERATURAN
        // =========================

        $peraturan = null;

        if ($request->hasFile('peraturan')) {
            $peraturan = $request->file('peraturan')
                ->store('events/peraturan', 'public');
        }


        // =========================
        // SIMPAN EVENT
        // =========================

        Event::create([
            'nama_event' => $request->nama_event,
            'kategori' => $request->kategori,
            'tanggal' => $request->tanggal,
            'lokasi' => $request->lokasi,
            'deskripsi' => $request->deskripsi,
            'kuota' => $request->kuota,
            'jenis' => $request->jenis,
            'tingkatan' => $request->tingkatan,

            'poster' => $poster,
            'proposal' => $proposal,
            'peraturan' => $peraturan,
        ]);


        return redirect('/admin')->with(
            'success',
            'Event berhasil ditambahkan!'
        );
    }


    // =========================
    // MENAMPILKAN FORM EDIT
    // =========================
    public function edit($id)
    {
        $event = Event::findOrFail($id);

        return view('admin.event.edit', [
            'event' => $event
        ]);
    }


    // =========================
    // MENYIMPAN PERUBAHAN EVENT
    // =========================
    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);

        $request->validate([
            'nama_event' => 'required',
            'kategori' => 'required',
            'tanggal' => 'required|date',
            'lokasi' => 'required',
            'deskripsi' => 'required',
            'kuota' => 'required|integer',
            'jenis' => 'required',
            'tingkatan' => 'nullable',

            // File boleh kosong saat edit
            'poster' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'proposal' => 'nullable|mimes:pdf|max:5120',
            'peraturan' => 'nullable|mimes:pdf|max:5120',
        ]);


        // =========================
        // FILE LAMA
        // =========================

        $poster = $event->poster;
        $proposal = $event->proposal;
        $peraturan = $event->peraturan;


        // =========================
        // POSTER BARU
        // =========================

        if ($request->hasFile('poster')) {
            $poster = $request->file('poster')
                ->store('events/posters', 'public');
        }


        // =========================
        // PROPOSAL BARU
        // =========================

        if ($request->hasFile('proposal')) {
            $proposal = $request->file('proposal')
                ->store('events/proposals', 'public');
        }


        // =========================
        // PERATURAN BARU
        // =========================

        if ($request->hasFile('peraturan')) {
            $peraturan = $request->file('peraturan')
                ->store('events/peraturan', 'public');
        }


        // =========================
        // UPDATE EVENT
        // =========================

        $event->update([
            'nama_event' => $request->nama_event,
            'kategori' => $request->kategori,
            'tanggal' => $request->tanggal,
            'lokasi' => $request->lokasi,
            'deskripsi' => $request->deskripsi,
            'kuota' => $request->kuota,
            'jenis' => $request->jenis,
            'tingkatan' => $request->tingkatan,

            'poster' => $poster,
            'proposal' => $proposal,
            'peraturan' => $peraturan,
        ]);


        return redirect('/admin')->with(
            'success',
            'Event berhasil diperbarui!'
        );
    }


    // =========================
    // MENGHAPUS EVENT
    // =========================
    public function destroy($id)
    {
        $event = Event::findOrFail($id);

        $event->delete();

        return redirect('/admin')->with(
            'success',
            'Event berhasil dihapus!'
        );
    }
}