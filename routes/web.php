<?php

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

use App\Http\Controllers\CheckController;
use App\Http\Controllers\Detail_passeportController;

use Illuminate\Support\Facades\DB;

// fonction anonyme ou collback
Route::get('/', function () {
    // return dd( DB::select('select * from client') );
    return view('welcome');
});

Route::get('/enregistrement', 'CheckController@check');
// Route::view('enregistrement','check');
Route::post('/enregistrement', 'CheckController@store');

Route::get('/enregistrement/information',

[
'as'=>'/enregistrement/information',
'uses' => 'CheckController@retour',
]);

Route::get('/enregistrement/{num_client},{nom_client},{prenom_client}/detail_passeport',
[
'as'=>'/enregistrement/detail_passeport',
'uses' => 'Detail_passeportController@afficherClient',
]);

Route::post('/enregistrement/{num_client},{nom_client},{prenom_client}/detail_passeport',
[
    'as'=>'/enregistrement/detail_passeport',
    'uses' => 'Detail_passeportController@insertToClient',
    ]);
    
 
Route::get('/enregistrement/informations/bagage',
[
'as'=>'/enregistrement/informations/bagage',
'uses' => 'BagageController@afficherBagage',
]);
Route::post('/enregistrement/informations/bagage','BagageController@storeBagage');
Route::get('/enregistrement/ajouterDesBagages/{num_client},{nom_client},{prenom_client}',
[
'as'=>'/enregistrement/ajouterDesBagages',
'uses' => 'AjouterBagageController@ajouterBagage',
]);

Route::get('/enregistrement/informations/bagage/siège',
[
'as'=>'/enregistrement/informations/bagage/siège',
'uses' => 'SiègeController@afficherSiège',
]);

Route::post('/enregistrement/informations/bagage/siège','SiègeController@storeSiège');

Route::get('/enregistrement/macarte', 'paiementController@carte');

Route::get('/enregistrement/carte_embarquement/{num_client},{nom_client},{prenom_client}',
[
    'as'=>'/enregistrement/carte_embarquement',
    'uses' => 'MacarteController@Imprimer',
    ]);
//  Route::get('/enregistrement/carte_embarquement/{num_client},{nom_client},{prenom_client}', function () {
//         $vol =session()->get('vol');
//         $reservation = session()->get('reservation');
       
//       // return view('enregistrement.testpdf');
//     $pdf = PDF::loadView('/enregistrement/testpdf',['vol'=>$vol,'reservation'=>$reservation ]);
//       return $pdf->stream('Carte d embarquement.pdf');
//     });
Route::get('/enregistrement/supprimer_Enregistrement',
[
    'as'=>'/enregistrement/supprimer_Enregistrement',
    'uses' => 'supprimerEnregController@PageSupprimer',
    ]);

Route::post('/enregistrement/supprimer_Enregistrement',
    [
        'as'=>'/enregistrement/supprimer_Enregistrement',
        'uses' => 'supprimerEnregController@Supprimer',
        ]);    
