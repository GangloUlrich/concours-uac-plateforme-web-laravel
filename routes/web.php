<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/////////////////////////////////////////////////////////////////////////////////////////////////////////

//Listes des routes pour les vues invité sur la plateforme 

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/', function () { return view('home.accueil');  })->name('accueil');

Route::get('/a_propos', function () {  return view('apropos.about');  })->name('about');

Route::get('/galerie', 'GalerieController@index0')->name('galerie');

Route::get('/trucs_astuces', 'AstucesController@index0')->name('trucs_astuces');

Route::get('/trucs_astuces/{n}', 'AstucesController@show0')->name('show_astuces');

Route::get('/podcast', function () {   return view('home.poadcast'); })->name('podcast');

Route::get('/foire', 'FoireController@index0')->name('foire');


//Blockage des routes de stages et d'emplois dans la rubriqure opportunites 

Route::middleware(['auth'])->group(function(){

    Route::get('/stage', 'StageController@index0')->name('stage');

    Route::get('/emploi', 'EmploiController@index0')->name('emploi');
});


Route::get('/newsletter', function () {  return view('home.newsletter'); })->name('newsletter');

Route::get('/institutions', function () { return view('home.institutions'); })->name('institutions');

Route::get('/entreprises', function () {  return view('home.entreprises'); })->name('entreprises'); 

Route::get('/login', function () {  return view('auth.login'); })->name('login');

Route::get('/contacter_conseiller_en_emploi', function () {  return view('home.contact');  })->name('contact');

Route::get('/publications', 'PublicationController@index0') ->name('publications');

Route::get('/publications/{n}', 'PublicationController@show0') ->name('show_publication');

Route::get('/actualites', 'ActualiteController@index0') ->name('actualites');

Route::get('/actualites/{n}', 'ActualiteController@show0') ->name('show_actualites');



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//listes des routes pour les vues administrateurs dashboard 

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



            Route::get('/dashboard', 'AccueilController@index') ->name('dashboard');

            Route::get('/profil', 'InscriptionController@profil') ->name('profil');

            Route::get('/utilisateurs', 'InscriptionController@show')->name('utilisateurs');

            Route::get('/actualites_admin', 'ActualiteController@index')->name('actualites_admin');

            Route::get('/ajouter_actualites', 'ActualiteController@editer')->name('add_actualites');

            Route::post('/ajouter_actualites', 'ActualiteController@add')->name('ajouter_actualites');

            Route::get('/edit_actualites/{n}', 'ActualiteController@edit')->name('edit_actualites');

            Route::post('/update_actualites', 'ActualiteController@update')->name('update_actualites');

            Route::get('/delete_actualites/{n}', 'ActualiteController@delete')->name('delete_actualites');

            Route::get('/publications_admin', 'PublicationController@index')->name('publications_admin');

            Route::get('/ajouter_publications', 'PublicationController@editer')->name('add_publications');

            Route::post('/ajouter_publications', 'PublicationController@add')->name('ajouter_publications');

            Route::get('/edit_publications/{n}', 'PublicationController@edit')->name('edit_publications');

            Route::post('/update_publications', 'PublicationController@update')->name('update_publications');

            Route::get('/delete_publications/{n}', 'PublicationController@delete')->name('delete_publications');

            Route::get('/galerie_admin', 'GalerieController@index')->name('galerie_admin');

            Route::post('/ajouter_photos', 'GalerieController@add')->name('ajouter_photos');

            Route::get('/edit_photos/{n}', 'GalerieController@edit')->name('edit_photos');

            Route::post('/update_photos', 'GalerieController@update')->name('update_photos');

            Route::get('/delete_photos/{n}', 'GalerieController@delete')->name('delete_photos');

            Route::get('/stages_admin', 'StageController@index')->name('stages_admin');

            Route::get('/ajouter_opportunites', 'StageController@editer')->name('add_opportunites');

            Route::post('/ajouter_opportunites', 'StageController@add')->name('ajouter_opportunites');

            Route::get('/edit_stages/{n}', 'StageController@edit')->name('edit_stages');

            Route::post('/update_stages', 'StageController@update')->name('update_stages');

            Route::get('/delete_stages/{n}', 'StageController@delete')->name('delete_stages');

            Route::get('/activation_stages/{n}', 'StageController@lock')->name('activation_stages');

            Route::get('/emplois_admin', 'EmploiController@index')->name('emplois_admin');

            Route::get('/poadcast_admin', 'PoadcastController@index')->name('poadcast_admin');

            Route::post('/ajouter_poadcasts', 'PoadcastController@add')->name('ajouter_poadcasts');

            Route::get('/edit_poadcasts/{n}', 'PoadcastController@edit')->name('edit_poadcasts');

            Route::post('/update_poadcasts', 'PoadcastController@update')->name('update_poadcasts');

            Route::get('/delete_poadcasts/{n}', 'PoadcastController@delete')->name('delete_poadcasts');

            Route::get('/trucs_astuces_admin', 'AstucesController@index')->name('trucs_astuces_admin');

            Route::get('/ajouter_trucs_astuces', 'AstucesController@editer')->name('add_trucs_astuces');

            Route::post('/ajouter_trucs_astuces', 'AstucesController@add')->name('ajouter_trucs_astuces');

            Route::get('/edit_trucs_astuces/{n}', 'AstucesController@edit')->name('edit_trucs_astuces');

            Route::post('/update_trucs_astuces', 'AstucesController@update')->name('update_trucs_astuces');

            Route::get('/delete_trucs_astuces/{n}', 'AstucesController@delete')->name('delete_trucs_astuces');

            Route::get('/faq_admin', 'FoireController@index')->name('faq_admin');

            Route::post('/ajouter_questions', 'FoireController@add')->name('ajouter_questions');

            Route::get('/edit_questions/{n}', 'FoireController@edit')->name('edit_questions');

            Route::post('/update_questions', 'FoireController@update')->name('update_questions');

            Route::get('/delete_questions/{n}', 'FoireController@delete')->name('delete_questions');

            Route::get('/delete_utilisateur/{n}', 'InscriptionController@delete')->name('delete_utilisateur');

            Route::get('/view_utilisateur/{n}', 'InscriptionController@show_one')->name('view_utilisateur');

            Route::get('/edit_utilisateur/{n}', 'InscriptionController@edit')->name('edit_utilisateur');

            Route::post('/update_utilisateur', 'InscriptionController@update')->name('update_utilisateur');

            Route::get('/profil_admin',function (){return view('admin.profil');})->name('profil_admin');


            Route::get('/icons', function () {  return view('admin.icons'); })->name('icons');

            Route::get('/map', function () {  return view('admin.map'); })->name('map');

            Route::get('/maps', function () {   return view('admin.maps'); })->name('maps');

            Route::get('/notifications', function () { return view('admin.notifications'); })->name('notifications');

            Route::get('/rtl', function () {  return view('admin.rtl'); })->name('rtl');

            Route::get('/upgrade', function () {  return view('admin.upgrade'); })->name('upgrade');


            Route::get('/admin/login', function () {  return view('admin.connexion'); });

            Route::post('/admin/login', 'InscriptionController@admin') ->name('connexion_admin');







//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Auth routes 

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Auth::routes();

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/inscription', 'InscriptionController@index') ->name('inscription');

Route::post('/inscription', 'InscriptionController@store') ->name('insertion');

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Listes des routes pour les vues etudiants 

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


Route::prefix('/etudiant')->group(function () {

            Route::get('/actualites/{n}', 'ActualiteController@show1') ->name('show_actualites_etudiants');

            Route::get('/accueil', 'AccueilController@index1') ->name('accueil_etudiants');

            Route::get('/actualites', 'ActualiteController@index1') ->name('actualites_etudiants');

            Route::get('/emploi', 'EmploiController@index1') ->name('emploi_etudiants');

            Route::get('/foire', 'FoireController@index1') ->name('foire_etudiants');

            Route::get('/galerie', 'GalerieController@index1') ->name('galerie_etudiants');

            Route::get('/institutions', 'InstitutionController@index1') ->name('institutions_etudiants');

            Route::get('/podcast', 'PoadcastController@index1') ->name('podcast_etudiants');

            Route::get('/publications', 'PublicationController@index1') ->name('publications_etudiants');

            Route::get('/publications/{n}', 'PublicationController@show1') ->name('show_publications_etudiants');

            Route::get('/trucs_et_astuces', 'AstucesController@index1') ->name('trucs_astuces_etudiants');

            Route::get('/trucs_et_astuces/{n}', 'AstucesController@show1') ->name('show_astuces_etudiants');

            Route::get('/stages', 'StageController@index1') ->name('stage_etudiants');

            Route::get('/trucs_astuces/{n}', 'AstucesController@show1') ->name('show_astuces_etudiant');

            Route::get('/profil', function () { return view('etudiant.profil');})->name('profil_etudiant');

            Route::get('/contacter_conseiller_en_emploi', function () {  return view('etudiant.contact'); })->name('contact_etudiant');

            Route::get('/entreprises', function () {  return view('etudiant.entreprises'); })->name('entreprises_etudiants');

            Route::get('/newsletter', function () {  return view('etudiant.newsletter'); })->name('newsletter_etudiants');

            Route::get('/a_propos', function () {  return view('etudiant.about'); })->name('about_etudiants');


});

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Listes des routes pour les vues de recruteur 

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::prefix('/recruteur')->group(function () {

                Route::get('/accueil', 'AccueilController@index2') ->name('accueil_recruteurs');

                Route::get('/actualites', 'ActualiteController@index2') ->name('actualites_recruteurs');

                Route::get('/actualites/{n}', 'ActualiteController@show2') ->name('show_actualites_recruteurs');

                Route::get('/emploi', 'EmploiController@index2') ->name('emploi_recruteurs');

                Route::get('/foire', 'FoireController@index2') ->name('foire_recruteurs');

                Route::get('/galerie', 'GalerieController@index2') ->name('galerie_recruteurs');

                Route::get('/institutions', 'InstitutionController@index2') ->name('institutions_recruteurs');

                Route::get('/poadcast', 'PoadcastController@index2') ->name('podcast_recruteurs');

                Route::get('/publications', 'PublicationController@index2') ->name('publications_recruteurs');

                Route::get('/publications/{n}', 'PublicationController@show2') ->name('show_publication_recruteur');

                Route::get('/stages', 'StageController@index2') ->name('stage_recruteurs');

                Route::get('/trucs_astuces', 'AstucesController@index2') ->name('trucs_astuces_recruteurs');

                Route::get('/trucs_astuces/{n}', 'AstucesController@show2') ->name('show_astuces_recruteurs');

                Route::get('/profil', function () { return view('recruteur.profil'); })->name('profil_recruteur');

                Route::get('/contacter_conseiller_en_emploi', function () {  return view('recruteur.contact'); })->name('contact_recruteur');

                Route::get('/entreprises', function () {    return view('recruteur.entreprises'); })->name('entreprises_recruteurs');

                Route::get('/newsletter', function () { return view('recruteur.newsletter'); })->name('newsletter_recruteurs');
                Route::get('/a_propos', function () { return view('recruteur.about'); })->name('about_recruteur');

});








