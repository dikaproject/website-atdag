<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\AgendaController;
use App\Models\Agenda;
use App\Http\Controllers\KomentarController;
use App\Models\Komentar;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $agendas = Agenda::all();
    return view('home.index', compact('agendas'));
});

/* admin routes */
Route::middleware('admin')->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin_dashboard');
});

Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'login'])->name('admin_login');
    Route::post('/login-submit', [AdminController::class, 'login_submit'])->name('admin_login_submit');
    Route::post('/logout', [AdminController::class, 'logout'])->name('admin_logout');
});

Route::post('/', [KomentarController::class, 'store'])->name('komentar.store');


// crud routes agenda
Route::middleware(['admin'])->group(function () {
Route::get('/admin/agenda', [AgendaController::class, 'index'])->name('admin.agenda.index');
Route::get('/admin/agenda/create', [AgendaController::class, 'create'])->name('admin.agenda.create');
Route::post('/admin/agenda/store', [AgendaController::class, 'store'])->name('admin.agenda.store');
Route::get('/admin/agenda/{agenda}/edit', [AgendaController::class, 'edit'])->name('admin.agenda.edit');
Route::put('admin/agenda/update/{agenda}', [AgendaController::class, 'update'])->name('admin.agenda.update');
});



