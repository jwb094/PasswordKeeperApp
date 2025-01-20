<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\PasswordManagerController;
use App\Http\Controllers\PasswordCategoryController;


Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/', [AuthManager::class, 'home'])->name('home');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');
Route::get('/register', [AuthManager::class, 'register'])->name('register');
Route::post('/registeration', [AuthManager::class, 'registerPost'])->name('registeration.post');
Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');

Route::get('/dashboard', [PasswordManagerController::class, 'dashboard'])->name('dashboard');
//Password

Route::get('/newpassword', [PasswordManagerController::class, 'newPassword'])->name('newpassword');
Route::get('/createcategory', [PasswordManagerController::class, 'create'])->name('category.create');
Route::post('/savepassword', [PasswordManagerController::class, 'savePassword'])->name('savepassword');
Route::get('/password/{id}', [PasswordManagerController::class, 'readPassword'])->name('readpassword');
Route::get('/editpassword/{id}', [PasswordManagerController::class, 'editPassword'])->name('editpassword');
Route::post('/updatepassword/{id}', [PasswordManagerController::class, 'updatepassword'])->name('updatepassword');
Route::delete('/deletepassword/{id}', [PasswordManagerController::class, 'deletepassword'])->name('deletepassword');





Route::get('/category/create', [PasswordCategoryController::class, 'showForm']); // Route to display form
Route::post('/category/save', [PasswordCategoryController::class, 'storeData'])->name('store.data'); // Route to handle form submission
Route::get('/category/{id}', [PasswordCategoryController::class, 'readData']);
Route::get('/category/edit/{id}', [PasswordCategoryController::class, 'editData']);
Route::post('/category/update/{id}', [PasswordCategoryController::class, 'updateData'])->name('store.update');
//Route::delete('/deletecategory/{id}', [PasswordCategoryController::class, 'deletecategory']);

Route::delete('/category/delete/{id}', [PasswordCategoryController::class, 'destroy'])->name('categories.destroy');



//Route::post('/savecategory', [PasswordCategoryController::class, 'store'])->name('category.save');




//Route::get('/category', [PasswordCategoryController::class, 'create'])->name('category');
//Route::post('/category', [PasswordCategoryController::class, 'store'])->name('category.store');


//Route::get('/selectpwd/{id}', [PasswordManagerController::class, 'selectpassword'])->name('seepassword');

//
//Password Category
// Route::get('/selectpasswordcat/{id}', [PasswordManagerController::class, 'selectpasswordcat'])->name('seepasswordcat');
// Route::get('/readpasswordcat/{id}', [PasswordManagerController::class, 'readPasswordcat'])->name('readpasswordcat');
// Route::get('/editpasswordcat/{id}', [PasswordManagerController::class, 'editpasswordcat'])->name('editpasswordcat');
// Route::get('/updatepasswordcat/{id}', [PasswordManagerController::class, 'updatepasswordcat'])->name('updatepasswordcat');
// Route::get('/deletepasswordcat/{id}', [PasswordManagerController::class, 'deletepasswordcat'])->name('deletepasswordcat');
