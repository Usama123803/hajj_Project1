<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogincontrollerController;
use App\Http\Controllers\PackagesController;
use App\Http\Controllers\AccountDetailsController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('welcome',[LogincontrollerController::class,'index']);
Route::get('login',[LogincontrollerController::class,'login']);

Route::get('create_package',[PackagesController::class,'create_package']);
Route::post('add_package',[PackagesController::class,'add_package']);

Route::get('create_invoice',[PackagesController::class,'create_invoice']);
Route::post('add_invoice',[PackagesController::class,'add_invoice']);

Route::get('inquiry',[PackagesController::class,'inquiry']);
Route::post('add_inquiry',[PackagesController::class,'add_inquiry']);

//Customers
Route::get('acc_Users',[AccountDetailsController::class,'acc_Users']);
Route::get('create_Customers',[AccountDetailsController::class,'create_Customers']);
Route::post('add_Customers',[AccountDetailsController::class,'add_Customers']);
Route::get('edit_acc_Users/{id}',[AccountDetailsController::class,'edit_acc_Users'])->name('edit_acc_Users');
Route::post('update_acc_Users/{id}',[AccountDetailsController::class,'update_acc_Users']);
Route::post('delete_acc_Users/{id}',[AccountDetailsController::class,'delete_acc_Users'])->name('delete_acc_Users');
//Transactions
Route::get('transactions',[AccountDetailsController::class,'transactions']);
Route::get('transactionsInvoice/{id}',[AccountDetailsController::class,'transactionsInvoice']);
Route::get('create_Transaction_Invoice',[AccountDetailsController::class,'create_Transaction_Invoice']);
Route::post('add_Transaction_Invoice',[AccountDetailsController::class,'add_Transaction_Invoice']);
Route::get('recieve_Payment',[AccountDetailsController::class,'recieve_Payment']);
Route::get('recieve_PaymentID/{id}',[AccountDetailsController::class,'recieve_PaymentID']);
Route::post('add_Recieve_Payment',[AccountDetailsController::class,'add_Recieve_Payment']);

Route::view('addDel','addDel');