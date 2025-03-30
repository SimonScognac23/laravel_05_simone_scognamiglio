<?php



use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PublicController; 










//-------------------- PAGINA HOME PAGE  ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------





Route::get('/', [PublicController::class , 'homepage'])->name('paginaHomepage'); 




//-------------------------- PAGINA PERSONAGGIO ------------------------------------------------------------------------------------------------------------------------------------------------------



Route::get('/character{id}' , [PublicController::class , 'personaggio'] )->name('paginaPersonaggio'); 





//------------------------------ PAGINA INDICE ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------



Route::get('/index',  [PublicController::class , 'indice'] )->name('paginaIndice');






//---------------------------------- PAGINA STORIA------------------------------------------------------------------------------------------------------------------

Route::get('/story',  [PublicController::class , 'storia'] )->name('paginaStoria');




//--------------------------------------ROTTA DI CONTATTO---------------------------------------------------------------------

Route::get('/contactUs',  [PublicController::class , 'contattaci'] )->name('contact.us');






//-------------------------------------ROTTA POST----------------------------------------------------------------
// SERVE PER SPEDIRE DEI DATI

Route::post('/contactUs/submit' , [PublicController::class , 'submit'])->name('contact.submit'); 
// metodo della classe route
// funzionano esattamente come le rotte get, hanno un uri,controller e funzione




//---------------------------------------THANK YOU PAGE----------------------------------------------------------------------------


Route::get('/thank-you' , [PublicController::class , 'thankYou'])->name('thankYou.page');










