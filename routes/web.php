<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/course', function () {
//     return view('course-details');
// })->name('accueil');

// page d'accueil
Route::get('/', function () {
    return view('accueil');
})->name('accueil');

// DECOUVRIR l'IMeN
// L'Ecole
Route::get('/ecole', function () {
    return view('decouvrir.ecole');
})->name('decouvrir_ecole');

// Notre Vision
Route::get('/vision', function () {
    return view('decouvrir.vision');
})->name('decouvrir_vision');

// Notre Réseau
Route::get('/reseau', function () {
    return view('decouvrir.reseau');
})->name('decouvrir_reseau');

// Le parcours de certification
Route::get('/le-parcours-de-certification', function () {
    return view('decouvrir.certification');
})->name('decouvrir_certif');


// NOS FORMATIONS
//Pole Numerique
Route::get('/pole-numerique', function () {
    return view('formations.pole.numerique');
})->name('pole_num');

// Cours Poles Numériques
// Big-data & IA
Route::get('/big-data-ia', function () {
    return view('formations.pole.cours.bigdata');
})->name('big_data');

// Programmation Informatique
Route::get('/programmation-informatique', function () {
    return view('formations.pole.cours.programmation');
})->name('programmation');

// Securite Informatique
Route::get('/securite-informatique', function () {
    return view('formations.pole.cours.securite');
})->name('securite');

// Installation et Maintenance Informatique
Route::get('/maintenance-informatique', function () {
    return view('formations.pole.cours.maintenance');
})->name('maintenance');

// Developpement Web & Mobile
Route::get('/dev-web-mobile', function () {
    return view('formations.pole.cours.devweb');
})->name('devweb');

// Pole Design 
Route::get('/pole-design', function () {
    return view('formations.pole.design');
})->name('pole_design');

// Design UI UX
Route::get('/design-ui-ux', function () {
    return view('formations.pole.cours.design_ui');
})->name('design_ui');

// Design Graphique
Route::get('/design-graphique', function () {
    return view('formations.pole.cours.graphique');
})->name('graphique');

// Motion Design
Route::get('/motion-design', function () {
    return view('formations.pole.cours.motion');
})->name('motion');

// Pole Audiovisuel
Route::get('/pole-audiovisuel', function () {
    return view('formations.pole.audiovisuel');
})->name('pole_audio');

//Montage Video
Route::get('/montage-video', function () {
    return view('formations.pole.cours.montage');
})->name('montage');

// Cadrage & Photographie
Route::get('/cadrage-photographie', function () {
    return view('formations.pole.cours.cadrage');
})->name('cadrage');

// Formations Continues
Route::get('/formations-continues', function () {
    return view('formations.continues');
})->name('formations_continues');

// Dev web
Route::get('/developpement-web', function () {
    return view('formations.continues_dev');
})->name('continues_dev');

// Analyse de Données
Route::get('/analyse-de-données', function () {
    return view('formations.continues_data');
})->name('continues_data');

// Maintenance Informatique
Route::get('/maintenanceinformatique', function () {
    return view('formations.continues_maintenance');
})->name('continues_maintenance');

// Montage Video
Route::get('/montagevideo', function () {
    return view('formations.continues_montage');
})->name('continues_montage');

// Graphisme
Route::get('/graphisme', function () {
    return view('formations.continues_graphisme');
})->name('continues_graphisme');

// Web Design
Route::get('/web-design', function () {
    return view('formations.continues_design');
})->name('continues_design');

// Workshops & Ateliers
Route::get('/workshops-ateliers', function () {
    return view('formations.workshops');
})->name('workshops');

// DEVENIR ETUDIANT 
Route::get('/inscription-etudiant', function () {
    return view('inscription.etudiant');
})->name('inscription_etudiant');


// NOS PROGRAMMES
Route::get('/nos-programmes', function () {
    return view('programmes.nos_programmes');
})->name('nos_programmes');

// La foire de l'emploi
Route::get('/foire-emploi', function () {
    return view('programmes.foire_emploi');
})->name('foire_emploi');

// IMeN English Academy
// La foire de l'emploi
// Route::get('/imen-english-academy', function () {
//     return view('programmes.imen_english');
// })->name('imen_english');


// page a propos
// Route::get('/about', function () {
//     return view('apropos');
// })->name('apropos');

// // page filieres
// Route::get('/nos-filieres', function () {
//     return view('filieres');
// })->name('filieres');

// Actualités
// page blog
Route::get('/blog', function () {
    return view('blog');
})->name('blog');

// page single blog
Route::get('/single', function () {
    return view('single');
})->name('single');

// page contact
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Portfolio Etudiants
Route::get('/portfolio-etudiants', function () {
    return view('portfolio.etudiants');
})->name('portfolio_etudants');