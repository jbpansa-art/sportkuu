
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PendaftaranController;
use App\Models\Event;

// =========================
// HALAMAN UTAMA
// =========================

Route::get('/', function () {
    $events = Event::latest()->get();

    return view('welcome', [
        'events' => $events
    ]);
});

// =========================
// REGISTER
// =========================

Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);

// =========================
// LOGIN
// =========================

Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login');

Route::post('/login', [AuthController::class, 'login']);

// =========================
// LOGOUT
// =========================

Route::post('/logout', [AuthController::class, 'logout']);

// =========================
// DASHBOARD USER
// =========================

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware('auth');

// =========================
// PROFIL USER
// =========================


Route::get('/profil', function () {
    $user = \Illuminate\Support\Facades\Auth::user();

    $pendaftarans = \App\Models\Pendaftaran::where('user_id', $user->id)
        ->latest()
        ->get();

    return view('profil', [
        'user' => $user,
        'pendaftarans' => $pendaftarans
    ]);
})->middleware('auth');


// =========================
// DASHBOARD ADMIN
// =========================

Route::get('/admin', [AdminController::class, 'index'])
    ->middleware(['auth', 'admin']);

// =========================
// TAMBAH EVENT
// =========================

Route::get('/admin/event/tambah', [EventController::class, 'create'])
    ->middleware(['auth', 'admin']);

Route::post('/admin/event', [EventController::class, 'store'])
    ->middleware(['auth', 'admin']);

// =========================
// EDIT EVENT
// =========================

Route::get('/admin/event/{id}/edit', [EventController::class, 'edit'])
    ->middleware(['auth', 'admin']);

// =========================
// UPDATE EVENT
// =========================

Route::put('/admin/event/{id}', [EventController::class, 'update'])
    ->middleware(['auth', 'admin']);

// =========================
// HAPUS EVENT
// =========================

Route::delete('/admin/event/{id}', [EventController::class, 'destroy'])
    ->middleware(['auth', 'admin']);

// =========================
// DAFTAR EVENT USER
// =========================

Route::get('/event', [EventController::class, 'index']);

// =========================
// DETAIL EVENT
// =========================

Route::get('/event/{id}', [EventController::class, 'show']);

// =========================
// PENDAFTARAN EVENT
// =========================

Route::get('/event/{event_id}/daftar', [PendaftaranController::class, 'create'])
    ->middleware('auth');

Route::post('/event/{event_id}/daftar', [PendaftaranController::class, 'store'])
    ->middleware('auth');

// =========================
// STATUS PENDAFTARAN USER
// =========================

Route::get('/status-pendaftaran', [PendaftaranController::class, 'index'])
    ->middleware('auth');

// =========================
// DAFTAR PENDAFTAR ADMIN
// =========================

Route::get('/admin/pendaftar', [PendaftaranController::class, 'adminIndex'])
    ->middleware(['auth', 'admin']);

// =========================
// TERIMA PENDAFTARAN
// =========================

Route::post('/admin/pendaftar/{id}/terima', [PendaftaranController::class, 'terima'])
    ->middleware(['auth', 'admin']);

// =========================
// TOLAK PENDAFTARAN
// =========================

Route::post('/admin/pendaftar/{id}/tolak', [PendaftaranController::class, 'tolak'])
    ->middleware(['auth', 'admin']);
