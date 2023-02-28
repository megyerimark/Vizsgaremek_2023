<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\TableController;
use App\Http\Controllers\Frontend\CategoryController as FrontendCategoryController;
use App\Http\Controllers\Frontend\MenuController as FrontendMenuController;
use App\Http\Controllers\Frontend\ReservationController as FrontendReservationController;
use App\Http\Controllers\Frontend\WelcomeController as FrontendWelcomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;





Route::get('/', [FrontendWelcomeController::class, "index"]);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//Frontend

Route::get("/kategóriák",[FrontendCategoryController::class,'index'])->name('categories.index');
Route::get("/kategóriák/{category}",[FrontendCategoryController::class,'index'])->name('categories.show.index'); // nem működik
Route::get("/menük",[FrontendMenuController::class,'index'])->name('menus.index');

Route::get("/reservation/elso-lepes",[FrontendReservationController::class,'stepOne'])->name('reservation.step-one');
Route::post("/reservation/elso-lepes",[FrontendReservationController::class,'storeStepOne'])->name('reservation.store.step.one');
Route::get("/reservation/masodik-lepes",[FrontendReservationController::class,'stepTwo'])->name('reservation.step-two');
Route::post("/reservation/masodik-lepes",[FrontendReservationController::class,'storeStepTwo'])->name('reservation.store.step.two');
Route::get('/koszi_a_rendelesed',[FrontendWelcomeController::class,'thankyou'])->name('thankyou');




Route::middleware(["auth", "admin"])->name('admin.')->prefix('admin')->group(function() {
    Route::get("/", [AdminController::class, 'index'])->name('index');
    Route::resource("/categories", CategoryController::class);
    Route::resource('/menus', MenuController::class);
    Route::resource("/tables", TableController::class);
    Route::resource("/reservation", ReservationController::class);
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
