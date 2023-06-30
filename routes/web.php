<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BookSeriesController;
use App\Http\Controllers\Admin\BuyBookController;
use App\Http\Controllers\Admin\DailyProgramController;
use App\Http\Controllers\Admin\PhrasesController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\ShowingAuthorController;
use App\Http\Controllers\Admin\TrailerController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VidepageController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Author\AuthorBookController;
use App\Http\Controllers\Author\AuthorPageController;
use App\Http\Controllers\Author\AuthorPhrasesController;
use App\Http\Controllers\Author\AuthorTrailler;
use App\Http\Controllers\Author\AuthorVideController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DailyController;
use App\Http\Controllers\DisciplineController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberForm;
use App\Http\Controllers\PhrasesController as ControllersPhrasesController;
use App\Http\Controllers\PhrasesUserController;
use App\Http\Controllers\ProfolioController;
use App\Http\Controllers\UsingController;
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

Route::get('/',[MemberForm::class,'create']);
Route::post('/',[MemberForm::class,'store']);
Route::get('/user/login',[AuthenticatedSessionController::class,'create']);
Route::post('/user/login',[AuthenticatedSessionController::class,'store']);
Route::get('/user/logout',[AuthenticatedSessionController::class,'destroy']);
Route::get('/home',[HomePageController::class,'index']);
Route::get('/profolio',[ProfolioController::class,'index']);
Route::get('/profolio/edit/{id}',[ProfolioController::class,'edit']);
Route::post('/profolio/edit/{id}',[ProfolioController::class,'update']);
Route::get('/daily',[DailyController::class,'index']);
Route::get('/daily/like/{id}',[LikeController::class,'like']);
Route::get('/daily/like/show/{id}',[LikeController::class,'show']);
Route::get('/daily/comment/{id}',[DailyController::class,'show']);
Route::get('/comment/show/{id}',[CommentController::class,'show']);
Route::post('/comment/show/{id}',[CommentController::class,'store']);
Route::get('/books',[BookController::class,'index']);
Route::get('books/အချိန်ခရီးသွား/{id}',[BookController::class,'timebook']);
Route::get('books/စွမ်းအင်ကျင့်ကြံခြင်း/{id}',[BookController::class,'engybook']);
Route::get('books/မှော်ပညာ/{id}',[BookController::class,'magicbook']);
Route::get('books/ဂိမ်းအမျိုးအစား/{id}',[BookController::class,'gamebook']);
Route::get('books/ပြန်လည်ဝင်စားခြင်း/{id}',[BookController::class,'replacebook']);
Route::get('books/သိုင်းစာစဉ်/{id}',[BookController::class,'fightbook']);
Route::get('/author',[AuthorController::class,'index']);
Route::get('/using',[UsingController::class,'index']);
Route::get('/phrases',[PhrasesUserController::class,'index']);
Route::get('/phrases/show/{id}',[PhrasesUserController::class,'show']);


Route::group(array('prefix'=>'author','namespace'=>'author','middleware'=>'author'),function(){
    Route::get('profolio',[AuthorPageController::class,'index']);
    Route::get('profolio/edit/{id}',[AuthorPageController::class,'edit']);
    Route::post('profolio/edit/{id}',[AuthorPageController::class,'update']);

    Route::get('vider/index',[AuthorVideController::class,'index']);
    Route::get('vider/create',[AuthorVideController::class,'create']);
    Route::post('vider/create',[AuthorVideController::class,'store']);
    Route::get('vider/edit/{id}',[AuthorVideController::class,'edit']);
    Route::post('vider/edit/{id}',[AuthorVideController::class,'update']);
    Route::get('vider/delete/{id}',[AuthorVideController::class,'destroy']);

    Route::get('phrases/index',[AuthorPhrasesController::class,'index']);
    Route::get('phrases/create',[AuthorPhrasesController::class,'create']);
    Route::post('phrases/create',[AuthorPhrasesController::class,'store']);
    Route::get('phrases/show/{id}',[AuthorPhrasesController::class,'show']);
    Route::get('phrases/edit/{id}',[AuthorPhrasesController::class,'edit']);
    Route::post('phrases/edit/{id}',[AuthorPhrasesController::class,'update']);
    Route::get('phrases/delete/{id}',[AuthorPhrasesController::class,'destroy']);
    Route::get('phrases/like/{id}',[AuthorPhrasesController::class,'like']);
    Route::get('phrases/comment/{id}',[AuthorPhrasesController::class,'comment']);

    Route::get('book/index',[AuthorBookController::class,'index']);
    Route::get('book/create',[AuthorBookController::class,'create']);
    Route::post('book/create',[AuthorBookController::class,'store']);
    Route::get('book/show/{id}',[AuthorBookController::class,'show']);
    Route::get('book/edit/{id}',[AuthorBookController::class,'edit']);
    Route::post('book/edit/{id}',[AuthorBookController::class,'update']);
    Route::get('book/delete/{id}',[AuthorBookController::class,'destroy']);

    Route::get('trailer/index',[AuthorTrailler::class,'index']);
    Route::get('trailer/create',[AuthorTrailler::class,'create']);
    Route::post('trailer/create',[AuthorTrailler::class,'store']);
    Route::get('trailer/show/{id}',[AuthorTrailler::class,'show']);
    Route::get('trailer/edit/{id}',[AuthorTrailler::class,'edit']);
    Route::post('trailer/edit/{id}',[AuthorTrailler::class,'update']);
    Route::get('trailer/delete/{id}',[AuthorTrailler::class,'destroy']);

});


Route::group(array('prefix'=>'admin','namespace'=>'admin','middleware'=>'admin'),function(){
    Route::get('index',[AdminController::class,'index']);

    Route::get('vide/index',[VidepageController::class,'index']);
    Route::get('vide/show',[VidepageController::class,'show']);
    Route::get('vide/create',[VidepageController::class,'create']);
    Route::post('vide/create',[VidepageController::class,'store']);
    Route::get('vide/edit/{id}',[VidepageController::class,'edit']);
    Route::post('vide/edit/{id}',[VidepageController::class,'update']);
    Route::get('vide/delete/{id}',[VidepageController::class,'destroy']);

    Route::get('phrases/index',[PhrasesController::class,'index']);
    Route::get('phrases/show/{id}',[PhrasesController::class,'show']);
    Route::get('phrases/edit/{id}',[PhrasesController::class,'edit']);
    Route::post('phrases/edit/{id}',[PhrasesController::class,'update']);
    Route::get('phrases/delete/{id}',[PhrasesController::class,'destroy']);
    Route::get('phrases/create',[PhrasesController::class,'create']);
    Route::post('phrases/create',[PhrasesController::class,'store']);

    Route::get('book/index',[BuyBookController::class,'index']);
    Route::get('book/create',[BuyBookController::class,'create']);
    Route::post('book/create',[BuyBookController::class,'store']);
    Route::get('book/show/{id}',[BuyBookController::class,'show']);
    Route::get('book/edit/{id}',[BuyBookController::class,'edit']);
    Route::post('book/edit/{id}',[BuyBookController::class,'update']);
    Route::get('book/delete/{id}',[BuyBookController::class,'destroy']);

    Route::get('bookseries/create',[BookSeriesController::class,'create']);
    Route::post('bookseries/create',[BookSeriesController::class,'store']);
    Route::get('bookseries/အချိန်ခရီးသွား/{id}',[BookSeriesController::class,'timebook']);
    Route::get('bookseries/စွမ်းအင်ကျင့်ကြံခြင်း/{id}',[BookSeriesController::class,'engybook']);
    Route::get('bookseries/မှော်ပညာ/{id}',[BookSeriesController::class,'magicbook']);
    Route::get('bookseries/ဂိမ်းအမျိုးအစား/{id}',[BookSeriesController::class,'gamebook']);
    Route::get('bookseries/ပြန်လည်ဝင်စားခြင်း/{id}',[BookSeriesController::class,'replacebook']);
    Route::get('bookseries/သိုင်းစာစဉ်/{id}',[BookSeriesController::class,'fightbook']);

    Route::get('role',[RoleController::class,'index']);
    Route::get('role/create',[RoleController::class,'create']);
    Route::post('role/create',[RoleController::class,'store']);

    Route::get('users/edit/{id}',[UserController::class,'edit']);
    Route::post('users/edit/{id}',[UserController::class,'update']);

    Route::get('showingAuthor/index',[ShowingAuthorController::class,'index']);
    Route::get('showingAuthor/show/{id}',[ShowingAuthorController::class,'show']);
    Route::get('showingAuthor/edit/{id}',[ShowingAuthorController::class,'edit']);
    Route::post('showingAuthor/edit/{id}',[ShowingAuthorController::class,'update']);
    Route::get('showingAuthor/delete/{id}',[ShowingAuthorController::class,'destroy']);

    Route::get('trailer/index',[TrailerController::class,'index']);
    Route::get('trailer/create',[TrailerController::class,'create']);
    Route::post('trailer/create',[TrailerController::class,'store']);
    Route::get('trailer/show/{id}',[TrailerController::class,'show']);
    Route::get('trailer/edit/{id}',[TrailerController::class,'edit']);
    Route::post('trailer/edit/{id}',[TrailerController::class,'update']);
    Route::get('trailer/delete/{id}',[TrailerController::class,'destroy']);
    

});


