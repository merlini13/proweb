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

Route::get('/', 'pemrakarsaController@index');
// Admin
Route::get('/admin-login', 'loginController@index');
Route::get('/admin-dashboard', 'SuperAdminController@index');
Route::post('/login', 'loginController@login');
Route::get('/logout', 'SuperAdminController@logout');
Route::get('/admin-registration', 'loginController@register');
Route::post('/save-admin-account', 'loginController@adminregister');
// Admin Dashboard
//pemrakarsa
Route::get('/login-check', 'pemrakarsaloginController@login_check');
Route::post('/pemrakarsa-login', 'pemrakarsaloginController@pemrakarsa_login');
Route::post('/pemrakarsa-register', 'pemrakarsaloginController@pemrakarsa_register');
Route::get('/registrasi', 'pemrakarsaController@registration');
Route::get('/pemrakarsa-logout', 'pemrakarsaController@pemrakarsa_logout');
//Perizinan
Route::get('/add-sppl', 'IzinController@index');
Route::post('/save-data-sppl', 'IzinController@save_data');
Route::get('/profile-pemrakarsa/{id}', 'IzinController@profile');
Route::get('/detail-izin-profile/{izin_id}', 'IzinController@detail_izin_profile');
Route::get('/edit-izin/{izin_id}', 'IzinController@edit_izin');
Route::post('/update-data-sppl/{izin_id}', 'IzinController@update_izin');
Route::get('/download/{izin_id}', 'IzinController@download_page');
Route::get('/download-berkas/{content}', 'IzinController@download_matriks');
//Perizinan admin
Route::get('/perizinan_sppl', 'BackupController@index');
Route::get('/detail-izin/{izin_id}', 'BackupController@detail_izin');
Route::get('/download-sppl/{sppl}', 'BackupController@download_sppl');
Route::get('/download-rencana/{rencana}', 'BackupController@download_rencana');
Route::get('/download-fotocopyktp/{fotocopyktp}', 'BackupController@download_fotocopyktp');
Route::get('/download-fotolokasi/{fotolokasi}', 'BackupController@download_fotolokasi');
Route::get('/download-fotocopyimb/{fotocopyimb}', 'BackupController@download_fotocopyimb');
Route::get('/download-fotocopysertifikattanah/{fotocopysertifikattanah}', 'BackupController@download_fotocopysertifikattanah');
Route::get('/download-fotocopybuktipembayaranpbb/{fotocopybuktipembayaranpbb}', 'BackupController@download_fotocopybuktipembayaranpbb');
Route::get('/download-gambarbangunan/{gambarbangunan}', 'BackupController@download_gambarbangunan');
Route::get('/download-areaparkir/{areaparkir}', 'BackupController@download_areaparkir');
Route::get('/download-denahlokasi/{denahlokasi}', 'BackupController@download_denahlokasi');
Route::get('/download-greasetrap/{greasetrap}', 'BackupController@download_greasetrap');
Route::get('/download-aktapendiriancv/{aktapendiriancv}', 'BackupController@download_aktapendiriancv');
Route::get('/accept/{izin_id}', 'BackupController@accept');
Route::get('/not-accept/{izin_id}', 'BackupController@not_accept');
Route::get('/comment/{izin_id}', 'BackupController@comment');
Route::post('/comment-submit/{izin_id}', 'BackupController@comment_submit');
Route::get('/download-page/{izin_id}','BackupController@download_page');
Route::get('/test/download{content}', 'IzinController@download_content');
//Matriks
Route::get('/index-matriks', 'MatriksController@index');
Route::get('/add-matriks', 'MatriksController@add');
Route::post('/save-matriks', 'MatriksController@save');
Route::get('/update-matriks-page/{matriks_id}', 'MatriksController@update_page');
Route::post('/save-update-matriks/{matriks_id}', 'MatriksController@update_matriks');
