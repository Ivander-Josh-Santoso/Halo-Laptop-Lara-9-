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

use App\Models\Laptop;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/tes', function () {
    return view('admin.dashboard');
});
Route::get('/tes2', 'sawController@get_matrix_preferensi');
Route::get('/masuk', function () {
    return view('admin.login');
});
// Grup rute untuk admin dengan middleware 'auth'
Route::group(['middleware' => 'auth', 'as' => 'admin.'], function () {
    // Rute dashboard admin
    Route::get('/', function () {
        $data['max_price'] = Laptop::max('Price_euros');
        $data['min_price'] = Laptop::min('Price_euros');
        $data['average_price'] = Laptop::avg('Price_euros');
        $data['count_laptop'] = count(Laptop::all());
        return view('admin.dashboard', $data);
    });

    Route::get('/alaptop', function () {
        return view('admin.laptop.index');
    });
    Route::get('/amatrix_nilai', function () {
        return view('admin.saw.matrix_nilai');
    });
    Route::get('/amatrix_normalisasi', function () {
        return view('admin.saw.matrix_normalisasi');
    });
    Route::get('/amatrix_preferensi', function () {
        return view('admin.saw.matrix_preferensi');
    });
    Route::get('/ahasil_rekomendasi', function () {
        return view('admin.saw.hasil_rekomendasi');
    });
    Route::get('/asetting', function () {
        $options = \App\Models\Setting::getAllKeyValue();
        return view('admin.setting', $options);
    });


    // Grup rute untuk bagian laptop dan SAW
    Route::group(['prefix' => 'admin'], function () {
        // Rute untuk laptop
        Route::group(["as" => "laptop.", "prefix" => "laptop"], function () {
            Route::get('/', 'laptopController@index')->name('index');
            Route::get('/data', 'laptopController@data')->name('data');
            Route::post('/add', 'laptopController@store')->name('add');
            Route::post('/edit', 'laptopController@edit')->name('edit');
            Route::post('/delete', 'laptopController@delete')->name('delete');
        });

        // Rute untuk SAW
        Route::group(['as' => 'saw.', 'prefix' => 'saw'], function () {
            Route::get('/matrix_nilai', 'sawController@matrix_nilai')->name('matrix_nilai');
            Route::get('/matrix_normalisasi', 'sawController@matrix_normalisasi')->name('matrix_normalisasi');
            Route::get('/matrix_preferensi', 'sawController@matrix_preferensi')->name('matrix_preferensi');
        });

        // Rute untuk setting
        Route::group(["as" => "setting.", "prefix" => "setting"], function () {
            Route::post('/bobot', 'settingController@bobot')->name('bobot');
        });
    });
});


Auth::routes();
// Rute halaman utama dan halaman laptop untuk guest
Route::get('/laptops', 'laptopController@index')->name('laptops.index');
Route::post('/laptops/store', 'laptopController@store')->name('laptops.store');
Route::delete('/laptop/delete', 'laptopController@delete')->name('admin.laptop.delete');
