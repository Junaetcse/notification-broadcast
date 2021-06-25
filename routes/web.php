<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

class Task {
    public $id;

    public function __construct($id){
        $this->id = $id;
    }
}

Route::get('/', function () {
    App\Events\TaskUpdate::dispatch(new Task(1));
    return view('welcome');
});

Route::get('/send-notification', [HomeController::class, 'notificationSent']);

