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

Route::get('/', function () {

    // //upload
    //
    // Storage::disk('s3')->put('/sylvano/test-image.jpg', file_get_contents('../test-image.jpg'));
    //
    // //view img
    //
    // var_dump(Storage::disk('s3')->files('sylvano') );
    //
    // foreach (Storage::disk('s3')->files('sylvano') as $file)
    //     echo '<img src ="data:image/jpeg;base64, '.base64_encode(Storage::disk('s3')->get($file)). '">';

        //delete
        Storage::disk('s3')->delete('/sylvano/test-image.jpg');

    return view('welcome');
});
