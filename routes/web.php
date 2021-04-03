<?php
// use App\Http\Livewire\Pos\Pos;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaveTokenContoller;
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
     return redirect()->route('home');
 });
Route::middleware(['auth:sanctum', 'verified'])->get('/home', function () {

    $user=\App\Models\User::where('id',auth()->user()->id)->first();
    return view('welcome')->with('user',$user);

})->name('home');

Route::resource('save_token',SaveTokenContoller::class);
Route::POST('uploadvideo',[SaveTokenContoller::class,'uploadvideo'])->name('uploadvideo');




