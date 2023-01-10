<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Livewire\About;
use App\Http\Livewire\Contact;
use App\Http\Livewire\Main;
use App\Http\Livewire\Project\Main as ProjectMain;
use App\Http\Livewire\Project\Show as ProjectShow;
use App\Http\Livewire\Service\Main as ServiceMain;
use App\Http\Livewire\Service\Show as ServiceShow;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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

Route::get('/', Main::class)->name('main');
Route::get('links/{key}', Main::class)->name('main.links');

Route::get('contact', Contact::class)->name('contact');
Route::get('about', About::class)->name('about');

Route::name('project.')->prefix('project')->group(function() {
   Route::get('{status?}', ProjectMain::class)->name('main');
   Route::get('show/{project}', ProjectShow::class)->name('show');
});
Route::name('service.')->prefix('service')->group(function() {
   Route::get('{category}', ServiceMain::class)->name('main');
   Route::get('show/{service}', ServiceShow::class)->name('show');
});
Route::name('blog.')->prefix('blog')->group(function() {
   Route::get('', [BlogController::class, 'index'])->name('main');
   Route::get('{blog}', [BlogController::class, 'show'])->name('show');
});

Route::name('brand.')->prefix('brand')->group(function() {
   Route::get('', [BrandController::class, 'index'])->name('main');
   Route::get('{brand}', [BrandController::class, 'show'])->name('show');
});
Route::name('product.')->prefix('product')->group(function() {
   Route::get('', [ProductController::class, 'index'])->name('main');
   Route::get('{product}', [ProductController::class, 'show'])->name('show');
});

Route::get('rewards', function () {
    $rewards = \App\Models\Reward::all();

    return view('rewards',compact('rewards'));
})->name('rewards');


Route::get('/lang/{locale}',function ($locale) {
    $langs = ['az', 'en','ru'];

    if(!in_array($locale, $langs)):
        return back();
    endif;

    Session::put('applocale', $locale);

    return redirect()->back();
})->name('lang');
