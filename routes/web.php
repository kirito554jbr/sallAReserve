<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Authentification;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalleController;
use App\Http\Controllers\ReserveController;

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

Route::get('/', function () {return view('salleAreserve');});
Route::get('/Register', function () {return view('Auth.Register');});
Route::get('/Login', function () {return view('Auth.Login');});
Route::get('/test', function () {return view('Auth.authTest');});
Route::get('/DashClient', function () {return view('Client.Salles');});
Route::get('/createSalle', function() {return view('front.CreateSalle');});
Route::get('/createUser', function() {return view('Admin.CreateUser');});
Route::get('/createReservation', function() {return view('Reserve.CreateReservation');});
Route::get('/ReserveSalle', function() {return view('Client.ReserveSalle');});

// Route::get('/SalleClient', function() {return view('Client.Salles');});


// Route::get('/Salles/update/{id}', function() {return view('front.UpdateSalle');});
// Route::get('/users', function () {return view('Admin.DashboardAdmin');});








Route::get('/role', [RoleController::class, 'index']);
Route::get('/role/create', [RoleController::class, 'create']);
// Route::post('/role', [RoleController::class, 'store'])->name('note.store');
// Route::get('/role/{id}', [RoleController::class, 'show'])->name('note.show');
// Route::get('/role/{id}/edit', [RoleController::class, 'edit'])->name('note.edit');
// Route::put('/role/{id}', [RoleController::class, 'update'])->name('note.update');
// Route::delete('/role/{id}', [RoleController::class, 'destroy'])->name('note.destroy');

Route::get('/Home',[HomeController::class, 'index']);


Route::get('/RegisterForm', [Authentification::class, 'Register']);
Route::get('/LoginForm', [Authentification::class, 'Login']);
Route::get('/Logout', [Authentification::class, 'Logout']);




// Route::get('/DashClient', [])



Route::get('/users', [UserController::class, 'show']);
Route::get('/user/create', [UserController::class, 'create']);
Route::post('/users', [UserController::class, 'delete']);
Route::get('/users/updateUsers', [UserController::class, 'update']);
Route::get('/users/update/{id}', [UserController::class, 'showOne']);











Route::get('/Salles', [SalleController::class, 'show']);
Route::get('/Salles/creat', [SalleController::class, 'create']);
Route::post('/Salles', [SalleController::class, 'delete']);
Route::get('/Salles/updateSalle', [SalleController::class, 'update']);
Route::get('/Salle/update/{id}', [SalleController::class, 'showOne']);







Route::get('/Reservation', [ReserveController::class, 'show']);
Route::get('/Reservation/create', [ReserveController::class, 'create']);
Route::post('/Reservation', [ReserveController::class, 'delete']);
Route::get('/Reservation/updateReservation', [ReserveController::class, 'update']);
Route::get('/Reservation/update/{id}', [ReserveController::class, 'showOne']);

Route::get('/ShowOneReserve', [ReserveController::class, 'showOneReserve']);
Route::post('/ShowOneReserve', [ReserveController::class, 'deleteClient']);



Route::get('/Profile', [UserController::class, 'Profile']);



Route::get('/SalleClient', [SalleController::class, 'showClient']);




