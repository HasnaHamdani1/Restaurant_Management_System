<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenusController;
use App\Http\Controllers\PlatsController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\CommandesController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CommentairesController;
use App\Http\Controllers\ReservationsController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
//////////////////////////////////////////////////////////////////////////////////////




// Route::get('/', function () {
//     return view('welcome');
// })->name('welcome');

// Route::get('/Connexion', function () {
//     return view('dashboard');
// });
// Route::get('/dashboard', function () {
//     return view('dashboard');
// });












Route::get('/Reserver', function () {
    return view('reservation');
});
Route::get('/MenusClients', function () {
    return view('MenusClients');
});

Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');

Route::get('/menus-clients', [MenusController::class, 'menusClients'])->name('MenusClients');



Route::get('/MenusClients', [MenusController::class, 'menusClients']);



Route::get('/MenusClients', [PlatsController::class, 'menusClients']);

Route::get('/menus/create', [MenusController::class, 'index'])->name('menus');

Route::post('/menus', [MenusController::class, 'store'])->name('menus.store');
Route::delete('/menus/{menu}', [MenusController::class, 'destroy'])->name('menus.destroy') ;

Route::get('/plats', [PlatsController::class, 'index'])->name('plats');
Route::get('/plats', [PlatsController::class, 'index'])->name('plats');
Route::post('/plats', [PlatsController::class, 'storePlat'])->name('plats.store');

Route::get('/menus/{menu}/edit', [MenusController::class, 'edit'])->name('ModifierMenus');
Route::put('/menus/{menu}', [MenusController::class, 'update'])->name('menus.update');
Route::get('/search', [MenusController::class, 'search'])->name('search');



Route::get('/plats/menu/{menu_id}', [PlatsController::class, 'showByMenu'])->name('plats.showByMenu');
Route::get('/platsfiltre/{menu_id}', [PlatsController::class, 'showPlatsFiltre'])->name('platsfiltre.show');

Route::delete('/plats/{plat}', [PlatsController::class, 'destroy'])->name('plats.destroy');
Route::put('/plats/{plat}', [PlatsController::class, 'update'])->name('plats.update');
Route::get('/plats/{plat}/edit', [PlatsController::class, 'edit'])->name('modifierPlats');
Route::get('/search/plats', [PlatsController::class, 'search'])->name('search.plats');
Route::get('/plats/{plat}/show', [PlatsController::class, 'show'])->name('plat.show');

// // routes/web.php
// Route::get('/menus/{menu_id}', MenusController::class, 'show')->name('menus.show');

// Route::get('/confirmation/commande',  [MenusController::class, 'showForm'])->name('confirmation.commande');
// Route::post('/store-total-price', [MenusController::class, 'storeTotalPrice'])  ;

Route::get('/confirmation/commande',  [MenusController::class, 'showForm'])->name('confirmation.commande');
Route::get('/search', [MenusController::class, 'search'])->name('search');


//reservation 

// Route::post('/reservationadmin', [MenusController::class, 'store'])->name('Reserver.store');
// routes/web.php
Route::get('/reservationadmin', function () {
    return view('reservationadmin');
}); 

Route::get('/reservation/{id}', [ReservationsController::class, 'showDetails'])->name('reservation.details');

Route::get('/reservationdetaille', function () {
    return view('reservationdetaille');
}); 

Route::get('/reservation', [ReservationsController::class, 'create'])->name('reservation.create');
Route::post('/reservation', [ReservationsController::class, 'store'])->name('reservation.store');
Route::get('/reservations', [ReservationsController::class, 'index'])->name('reservationadmin');

// Route::post('/paimentreservation', [ReservationsController::class, 'create'])->name('paimentreservation');


//commandes 
// Route::get('/Formulaire_ConfirmationC', [CommandesController::class, 'create'])->name('commande.create');
// Route::post('/Formulaire_ConfirmationC', [CommandesController::class, 'store'])->name('commande.store');
// Route::get('/Formulaire_ConfirmationC', [CommandesController::class, 'index'])->name('reservationadmin');

// Route::post('/commande', [CommandesController::class, 'store'])->name('commande.store');
// Route::get('/commandeadmin', [CommandesController::class, 'confirmation'])->name('commande.confirmation');
// Route::get('/Formulaire_ConfirmationC.', function () {
//     return view('Formulaire_ConfirmationC');
// });
// Route::post('/commande/store', 'CommandeController@store')->name('commande.store');
Route::post('/store-commande', [CommandesController::class, 'store'])->name('store.commande');
Route::get('/Formulaire_ConfirmationC', [CommandesController::class, 'showForm'])->name('commande.form');


//contact 
Route::get('/Commentaires', function () {
    return view('Commentaires');
});
Route::get('/commentaires/create', [CommentairesController::class, 'create'])->name('Commentaires.create');

Route::post('/Commentaires', [CommentairesController::class, 'store'])->name('Commentaires.store');
// Route pour afficher le formulaire de création de commentaires



// Route pour afficher la liste des commentaires (ou une vue d'administration des commentaires)
Route::get('/contactadmin', [CommentairesController::class, 'index'])->name('Contactadmin');

Route::get('/Contactadmin', function () {
    return view('Contactadmin');
});
Route::get('/commandeadmin', function () {
    return view('commandeadmin');
})->name('commandeadmin');
Route::get('/commande', [CommandesController::class, 'index'])->name('commande');
Route::get('/commandedetaille/{id}', [CommandesController::class, 'showDetail'])->name('commandedetaille');

// Route pour afficher le formulaire de réservation
use App\Http\Controllers\PayementController;
Route::get('stripe', [PayementController::class,'stripe'])->name('stripe');
Route::post('stripe', [PayementController::class,'stripePost'])->name('stripe.post');

Route::get('/menu/{menu}', [MenusController::class, 'show'])->name('menu.show');

Route::get('/search/reservations', [ReservationsController::class, 'search'])->name('search.reservations');
Route::get('/search/reservations', [ReservationsController::class, 'search'])->name('search.reservations');

Route::get('/search/commandes', [CommandesController::class, 'search'])->name('search.commandes');
//////////////////vider 
Route::get('/vider-commandes', [CommandesController::class, 'viderCommandes'])->name('vider.commandes');
Route::get('/vider-reservations', [ReservationsController::class, 'viderReservations'])->name('vider.reservations');
////////////////delete

Route::delete('commandes/{id}', [CommandesController::class, 'destroy'])->name('commandes.destroy');

Route::delete('reservations/{id}', [ReservationsController::class, 'destroy'])->name('reservations.destroy');
Route::get('/vider-contactes', [CommentairesController::class, 'vidercontacts'])->name('vider.contacts');
Route::delete('Commentaires/{id}', [CommentairesController::class, 'destroy'])->name('contact.destroy');
Route::post('/markAsRead', [CommentairesController::class,'markAsReadAndUpdateCountmarkAsRead'])->name('markAsReadAndUpdateCount');

