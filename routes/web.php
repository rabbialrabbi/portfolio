<?php

use App\message;
use Illuminate\Http\Request;
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
    return view('profile');
});
Route::view('/test','test');

Route::post('/message', function (Request $request){
    try{
        Message::create($request->all());
        return "Thanks for message. I will be in touch very soon";
    }catch (Exception $e){
        return "Message submission Error. Error Code: ".$e->getCode();
    }

})->name("submit.message");

Auth::routes(['register' => false]);

Route::get('/all',function (){
     $msg = Message::all();
     return view('messages',['msg'=>$msg]);
})->middleware('auth')->name('message');

Route::get('/home', 'HomeController@index')->name('home');
