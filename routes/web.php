<?php

use App\Http\Controllers\DocumentController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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

Route::get('/', [DocumentController::class, 'index'])->middleware('dropbox');

Route::get('oauth/dropbox/callback', function () {
    $user = Socialite::driver('dropbox')->user();

    session()->push('user.token', $user->token);
    session()->push('user.name', $user->getName());
    session()->push('user.email', $user->getEmail());

    return redirect()->to('/');
});
