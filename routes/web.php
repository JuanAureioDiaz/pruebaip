

<?php

use App\Http\Controllers\pageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*

Route::get('/home',[pageController::class,'home'] )->name('home');

Route::get('/blog',[pageController::class,'blog'] )->name('blog');

Route::get('/blog/{slug}', [pageController::class,'post'])->name('post');*/

route::controller(pageController::class)->group(function(){
    
   Route::get('/home','home' )->name('home');

   Route::get('/blog','blog' )->name('blog');

   Route::get('/blog/{post:slug}', 'post')->name('post');

});

route::get('/GA',function(){
return view('mac');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('prueba',function(Request $request){

echo $request->ip();
var_dump($request->secure());
var_dump($request->userAgent());
});
