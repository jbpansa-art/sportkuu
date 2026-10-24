<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PendaftaranController extends Controller
{
    // =========================
    // FORM PENDAFTARAN
    // =========================
    public function create($event_id)
    {
        $event = Event::findOrFail($event_id);

        // Hitung pendaftar yang masih memakai kuota
        $jumlahPendaftar = Pendaftaran::where('event_id', $event->id)
            ->where('status', '!=', 'Ditolak')
            ->count();

        $sisaKuota = $event->kuota - $jumlahPendaftar;

        if ($sisaKuota < 0) {
            $sisaKuota = 0;
        }

        return view('pendaftaran.create', [
            'event' => $event,
            'sisaKuota' => $sisaKuota
        ]);
    }


    // =========================
    // SIMPAN PENDAFTARAN
    // =========================
    public function store(Request $request, $event_id)
    {
        $event = Event::findOrFail($event_id);

        // Hitung jumlah pendaftar aktif
        $jumlahPendaftar = Pendaftaran::where('event_id', $event->id)
            ->where('status', '!=', 'Ditolak')
            ->count();

        // Cek kuota
        if ($jumlahPendaftar >= $event->kuota) {
            return back()->with(
                'error',
                'Kuota event sudah penuh!'
            );
        }

        // Cek apakah user sudah pernah mendaftar event ini
        $sudahDaftar = Pendaftaran::where('event_id', $event->id)
            ->where('user_id', Auth::id())
            ->where('status', '!=', 'Ditolak')
            ->exists();

        if ($sudahDaftar) {
            return back()->with(
                'error',
                'Kamu sudah terdaftar pada event ini!'
            );
        }

        $request->validate([
            'nama_peserta' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            'nama_sekolah' => 'nullable',
            'tingkatan_sekolah' => 'nullable',
        ]);

        // Simpan pendaftaran
        Pendaftaran::create([
            'user_id' => Auth::id(),
            'event_id' => $event->id,
            'nama_peserta' => $request->nama_peserta,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'nama_sekolah' => $request->nama_sekolah,
            'tingkatan_sekolah' => $request->tingkatan_sekolah,
            'status' => 'Menunggu',
        ]);

        return redirect('/event/' . $event->id)->with(
            'success',
            'Pendaftaran event berhasil dikirim!'
        );
    }


    // =========================
    // STATUS PENDAFTARAN USER
    // =========================
    public function index()
    {
        $pendaftarans = Pendaftaran::with('event')
            ->where('user_id', Auth::id())
            ->latest()
            ->get();

        return view('pendaftaran.index', [
            'pendaftarans' => $pendaftarans
        ]);
    }


    // =========================
    // DAFTAR PENDAFTAR ADMIN
    // =========================
    public function adminIndex()
    {
        $pendaftarans = Pendaftaran::with('event')
            ->latest()
            ->get();

        return view('admin.pendaftaran.index', [
            'pendaftarans' => $pendaftarans
        ]);
    }


    // =========================
    // TERIMA PENDAFTARAN
    // =========================
    public function terima($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);

        $pendaftaran->update([
            'status' => 'Diterima'
        ]);

        return back()->with(
            'success',
            'Pendaftaran berhasil diterima!'
        );
    }


    // =========================
    // TOLAK PENDAFTARAN
    // =========================
    public function tolak($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);

        $pendaftaran->update([
            'status' => 'Ditolak'
        ]);

        return back()->with(
            'success',
            'Pendaftaran berhasil ditolak!'
        );
    }
}