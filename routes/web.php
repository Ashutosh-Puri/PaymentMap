<?php
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/aboutus', [App\Http\Controllers\HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/contactus', [App\Http\Controllers\HomeController::class, 'contactus'])->name('contactus');
Route::post('/contactus', [App\Http\Controllers\HomeController::class, 'contact']);
Route::get('/services', [App\Http\Controllers\HomeController::class, 'services'])->name('services');
Route::get('/team', [App\Http\Controllers\HomeController::class, 'team'])->name('team');
Route::get('/projects', [App\Http\Controllers\HomeController::class, 'projects'])->name('projects');
Route::get('/features', [App\Http\Controllers\HomeController::class, 'features'])->name('features');
Route::get('/team', [App\Http\Controllers\HomeController::class, 'team'])->name('team');

Route::post('/subscribe', [App\Http\Controllers\HomeController::class, 'subscribe'])->name('subscribe');
Route::get('/unsubscribe', [App\Http\Controllers\HomeController::class, 'unsub']);
Route::post('/unsubscribe', [App\Http\Controllers\HomeController::class, 'unsubscribe']);
Route::get('view/{store}', [App\Http\Controllers\HomeController::class, 'view'])->name('view');
Auth::routes(['verify'=> true]);



// Admin Routes
Route::middleware(['admin','auth','verified'])->get('aremove/img/{id}/{img}', [App\Http\Controllers\Admin\AStoreController::class, 'remove']);
Route::middleware(['admin','auth','verified'])->name('admin.')->group(function ()
{
    Route::resource('footer', App\Http\Controllers\Admin\FooterController::class);
    Route::get('admin/dashboard', [App\Http\Controllers\Admin\AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::resource('admin', App\Http\Controllers\Admin\AdminController::class);
    Route::resource('icon', App\Http\Controllers\Admin\IconController::class);
    Route::resource('astore', App\Http\Controllers\Admin\AStoreController::class);
    Route::resource('country', App\Http\Controllers\Admin\CountryController::class);
    Route::resource('state', App\Http\Controllers\Admin\StateController::class);
    Route::resource('city', App\Http\Controllers\Admin\CityController::class);
    Route::resource('village', App\Http\Controllers\Admin\VillageController::class);

});



// User Routes
Route::middleware(['auth','verified'])->get('user/dashboard', [App\Http\Controllers\User\UserController::class, 'dashboard'])->name('user.dashboard');
Route::middleware(['auth','verified'])->get('remove/img/{id}/{img}', [App\Http\Controllers\User\StoreController::class, 'remove']);
Route::middleware(['auth','verified'])->name('user.')->group(function ()
{

    Route::resource('store', App\Http\Controllers\User\StoreController::class);
    Route::resource('user', App\Http\Controllers\User\UserController::class);

});
// Route::get('admin/store/create',App\Http\Livewire\Admin\Store\Create::class);
// Route::get('admin/store/{store}/edit',App\Http\Livewire\Admin\Store\Edit::class);
