<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;

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

// Route::get('/', function (){
//     return view('welcome');
// });

// Route::get('/', function () {
//     echo "Selamat Datang";
// });

// Route::get('/about', function () {
//     echo "NIM   : 2141720125";
//     echo "NAMA  : FARHAN DWII PRAMANA";
//     echo "KELAS : 2H";
// });

// Route::get('/articles/{id}', function ($id) {
//     echo "Halaman Artikel dengan ".$id;
// });

// Route::get('/index', [PageController::class, 'index']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/articles/{id}', [PageController::class, 'articles']);

// Route::get('/index', [HomeController::class, 'index']);
// Route::get('/about', [AboutController::class, 'about']);
// Route::get('/articles/{id}', [ArticleController::class, 'articles']);

Route::get('/', [HomeController::class, 'home']);

//product
Route::prefix('product')->group(function(){
    Route::get('/',[ProductController::class, 'home']);
    Route::get('/1', function(){
        return redirect("https://www.educastudio.com/category/marbel-edu-games");
    });
    Route::get('/2', function(){
        return redirect("https://www.educastudio.com/category/marbel-and-friends-kids-games");
    });
    Route::get('/3', function(){
        return redirect("https://www.educastudio.com/category/riri-story-books");
    });
    Route::get('/4', function(){
        return redirect("https://www.educastudio.com/category/kolak-kids-songs");
    });
});

//news
Route::get('/news', [NewsController::class, 'home']);
Route::get('/news/{id}', function($id){
    if($id == 1){
        return redirect("https://www.educastudio.com/category/news");
    }else if($id == 2) {
        return redirect("https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19");
    }
});

//program 
Route::prefix('program')->group(function(){
    Route::get('/',[ProgramController::class, 'home']);
    Route::get('/karir', function(){
        return redirect("https://www.educastudio.com/program/karir");
    });
    Route::get('/magang', function(){
        return redirect("https://www.educastudio.com/program/magang");
    });
    Route::get('/kunjungan', function(){
        return redirect("https://www.educastudio.com/program/kunjungan-industri");
    });
});

//contact us
Route::get('/contact', function(){
        return redirect("https://www.educastudio.com/contact-us");
});

//about us
Route::get('/about', function(){
        return redirect("https://www.educastudio.com/about-us");
});
