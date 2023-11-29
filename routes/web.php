<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\clientController;
use App\Http\Controllers\factureController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\paiementController;
use App\Http\Controllers\reservationController;

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
    return view('acceuil');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//gestion des clients
Route::get('/listeClient',[App\Http\Controllers\clientController::class, 'index'])->name('client');
Route::get('/Modifier/client/{client}',[App\Http\Controllers\clientController::class, 'show'])->name('client.show');
Route::put('/Modifier/client/{client}',[App\Http\Controllers\clientController::class, 'update'])->name('client.update');
Route::post('/Supprimer/utlisateur/{client}',[App\Http\Controllers\clientController::class, 'destroy'])->name('client.destroy');
Route::get('/ajouter/client',[App\Http\Controllers\clientController::class, 'create'])->name('client.afficher');
Route::post('/ajouter/client',[App\Http\Controllers\clientController::class, 'store'])->name('client.create');


// gestion des chambres
Route::get('/listeChambre',[App\Http\Controllers\chambreController::class, 'index'])->name('chambre');
Route::get('/Modifier/chambre/{chambre}',[App\Http\Controllers\chambreController::class, 'show'])->name('chambre.show');
Route::get('/ajouter/chambre',[App\Http\Controllers\chambreController::class, 'create'])->name('chambre.create');
Route::put('/Modifier/chambre/{chambre}',[App\Http\Controllers\chambreController::class, 'update'])->name('chambre.update');
Route::post('/Supprimer/chambre/{chambre}',[App\Http\Controllers\chambreController::class, 'destroy'])->name('chambre.destroy');
Route::get('/chambre/reservation/{chambre}',[App\Http\Controllers\chambreController::class, 'afficher'])->name('chambre.afficher');
Route::put('/chambre/reservation/{chambre}',[App\Http\Controllers\chambreController::class, 'reserver'])->name('chambre.reservation');

// gestion des reservations
Route::get('/listeReservation',[App\Http\Controllers\reservationController::class, 'index'])->name('reservation');
Route::get('/Modifier/reservation/{reservation}',[App\Http\Controllers\reservationController::class, 'show'])->name('reservation.show');
Route::put('/Modifier/reservation/{reservation}',[App\Http\Controllers\reservationController::class, 'update'])->name('reservation.update');
Route::post('/Supprimer/utlisateur/{reservation}',[App\Http\Controllers\reservationController::class, 'destroy'])->name('reservation.destroy');
Route::get('/reservation/facturation/{chambre}',[App\Http\Controllers\chambreController::class, 'afficher'])->name('chambre.afficher');
Route::put('/chambre/reservation/{chambre}',[App\Http\Controllers\chambreController::class, 'reserver'])->name('chambre.reservation');

//gestion des factures
Route::get('/listefacture',[factureController::class, 'index'])->name('facture');
Route::get('/ajouter/facture',[factureController::class, 'edit'])->name('facture.afficher');
Route::post('/Modifier/facture',[factureController::class, 'store'])->name('facture.create');
Route::get('/Modifier/facture/{facture}',[factureController::class, 'show'])->name('facture.show');
Route::put('/Modifier/facture/{facture}',[App\Http\Controllers\factureController::class, 'update'])->name('facture.update');
Route::post('/Supprimer/facture/{facture}',[App\Http\Controllers\factureController::class, 'destroy'])->name('facture.destroy');

//gestion des paiement
Route::get('/listepaiement',[paiementController::class, 'index'])->name('paiement');
Route::get('/Modifier/utlisateur/{facture}',[App\Http\Controllers\paiementController::class, 'show'])->name('paiement.show');
Route::put('/Modifier/utlisateur/{facture}',[App\Http\Controllers\paiementController::class, 'update'])->name('paiement.update');
Route::post('/Supprimer/utlisateur/{facture}',[App\Http\Controllers\paiementController::class, 'destroy'])->name('paiement.destroy');


// generer par blade
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// gestion des agents 
Route::get('/listeUtilisateur',[adminController::class, 'index'])->name('user');
Route::get('/Modifier/utlisateur/{user}',[App\Http\Controllers\adminController::class, 'show'])->name('user.show');
Route::put('/Modifier/utlisateur/{user}',[App\Http\Controllers\adminController::class, 'update'])->name('user.update');
Route::post('/Supprimer/utlisateur/{user}',[App\Http\Controllers\adminController::class, 'destroy'])->name('user.destroy');


require __DIR__.'/auth.php';
