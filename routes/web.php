<?php

use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('simpan_data', function () {
    DB::table('mahasiswa')->insert(
        [
            [
                'nim'=>'1001',
                'nama'=>'Agus Yulianto',
                'tanggal_lahir'=>'2000-09-07',
                'jenis_kelamin'=>'L'
            ],
            [
                'nim'=>'1002',
                'nama'=>'Citra Kusumawati',
                'tanggal_lahir'=>'2000-01-07',
                'jenis_kelamin'=>'P'
            ],
            [
                'nim'=>'1003',
                'nama'=>'Firda Ajeng',
                'tanggal_lahir'=>'2000-11-09',
                'jenis_kelamin'=>'P'
            ]
        ]
    );
});
Route::get('lihat_data_mahasiswa','MahasiswaController@lihat_data_mahasiswa');
Route::get('input_mahasiswa', 'MahasiswaController@input_mahasiswa');
Route::get('create','MahasiswaController@create');
Route::get('mahasiswa/{mahasiswa}','MahasiswaController@show');
Route::post('mahasiswa', 'MahasiswaController@store');
Route::get('mahasiswa/{mahasiswa}/edit','MahasiswaController@edit');
Route::patch('mahasiswa/{mahasiswa}','MahasiswaController@update');
Route::delete('mahasiswa/{mahasiswa}','MahasiswaController@destroy');
Route::get('date_mutator', 'MahasiswaController@date_mutator');
