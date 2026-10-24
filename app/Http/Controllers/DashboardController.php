<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $pendaftarans = Pendaftaran::with('event')
            ->where('user_id', $user->id)
            ->latest()
            ->get();

        $totalPendaftaran = $pendaftarans->count();

        $menunggu = $pendaftarans
            ->where('status', 'Menunggu')
            ->count();

        $diterima = $pendaftarans
            ->where('status', 'Diterima')
            ->count();

        $ditolak = $pendaftarans
            ->where('status', 'Ditolak')
            ->count();

        return view('dashboard', [
            'user' => $user,
            'pendaftarans' => $pendaftarans,
            'totalPendaftaran' => $totalPendaftaran,
            'menunggu' => $menunggu,
            'diterima' => $diterima,
            'ditolak' => $ditolak,
        ]);
    }
}