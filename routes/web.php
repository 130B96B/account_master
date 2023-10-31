<?php
use Illuminate\Support\Facades\Route;
//ホームページ
Route::get('/home', [App\Http\Controllers\accunt_masterController::class, 'home'])->name('home');
//アカウント一覧ページ
Route::get('/accounts', [App\Http\Controllers\accunt_masterController::class, 'accounts'])->name('accounts');
//新規会員登録ページ
Route::get('/registration',[App\Http\Controllers\accunt_masterController::class, 'registration'])->name('registration');
//確認ページ
Route::post('/confirm',[App\Http\Controllers\accunt_masterController::class, 'confirm'])->name('confirm');
//アカウントリスト
Route::get('/accounts_list',[App\Http\Controllers\accunt_masterController::class, 'accounts_list'])->name('accounts_list');
//編集ページ
Route::get('/edit/{id}',[App\Http\Controllers\accunt_masterController::class, 'edit'])->name('edit');
//修正
Route::put('/update/{id}',[App\Http\Controllers\accunt_masterController::class, 'update'])->name('update');
//削除
Route::delete('/destroy/{id}',[App\Http\Controllers\accunt_masterController::class, 'destroy'])->name('destroy');
//お問い合わせ一覧
Route::get('/contacts',[App\Http\Controllers\accunt_masterController::class, 'contacts'])->name('contacts');
//お問い合わせ編集
Route::get('/contacts_edit/{id}',[App\Http\Controllers\accunt_masterController::class, 'contacts_edit'])->name('contacts_edit');
//修正
Route::put('/contacts_update/{id}',[App\Http\Controllers\accunt_masterController::class, 'contacts_update'])->name('contacts_update');