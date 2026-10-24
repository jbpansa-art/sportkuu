<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Pendaftaran;

class AdminController extends Controller
{
    public function index()
    {
        $events = Event::latest()->get();

        // Statistik event
        $totalEvent = Event::count();

        $eventUmum = Event::where('jenis', 'Umum')->count();

        $eventAntarSekolah = Event::where(
            'jenis',
            'Antar Sekolah'
        )->count();

        // Statistik pendaftaran
        $totalPendaftar = Pendaftaran::count();

        $pendaftarMenunggu = Pendaftaran::where(
            'status', 'Menunggu'
        )->count();

        $pendaftarDiterima = Pendaftaran::where(
            'status', 'Diterima'
        )->count();

        $pendaftarDitolak = Pendaftaran::where(
            'status', 'Ditolak'
        )->count();

        return view('admin.dashboard', compact(
            'events',
            'totalEvent',
            'eventUmum',
            'eventAntarSekolah',
            'totalPendaftar',
            'pendaftarMenunggu',
            'pendaftarDiterima',
            'pendaftarDitolak'
        ));
    }
}
