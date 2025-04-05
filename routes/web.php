<?php

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

Route::get('/Emr', function(){
    return view('Billing.Emr-Ipd');
})->name('Emr');
Route::get('/Advance', function(){
    return view('Billing.Advance');
})->name('Advance');
Route::get('/Billing-Profile', function(){
    return view('Billing.Billing-Profile');
})->name('Billing-Profile');
Route::get('/Patient-Profile', function(){
    return view('Billing.Patient-Profile');
})->name('Patient-Profile');
Route::get('/Emergence', function(){
    return view('Billing.Emergence');
})->name('Emergence');
Route::get('/Ipd', function(){
    return view('Billing.Ipd-Registration');
    })->name('Ipd');
Route::get('/Service-Bill', function(){
    return view('Billing.Service-Bill');
})->name('Service-Bill');
Route::get('/Bill', function(){
    return view('Billing.Bill');
})->name('Bill');
Route::get('/Discharge-Summary', function(){
    return view('Billing.Discharge-Summary');
})->name('Discharge-Summary');
Route::get('/Discount-Scheme', function(){
    return view('Billing.Discount-Scheme');
})->name('Discount-Scheme');

Route::get('/Tabular', function(){
    return view('Billing.Tabular');
})->name('Tabular');
Route::get('/Cumulative-data', function(){
    return view('Billing.Cumulative-data');
})->name('Cumulative-data');
Route::get('/My-Trabsaction', function(){
    return view('Billing.My-Trabsaction');
})->name('My-Trabsaction');
Route::get('/Re-Print', function(){
    return view('Billing.Re-Print');
})->name('Re-Print');
Route::get('/Pathology', function (){
    return view('Department.Pathology');
})->name('Pathology');
Route::get('/Cultural', function(){
    return view('Department.Cultural');
})->name('Cultural');
Route::get('/Old-Report', function(){
    return view('Department.Old-Report');
})->name('Old-Report');
Route::get('/New-Invoice', function(){
    return view('Department.New-Invoice');
})->name('New-Invoice');
Route::get('/Report-search-by-bill', function(){
    return view('Department.Report-search-by-bill');
})->name('Report-search-by-bill');
Route::get('/Pathalogy-patient-report', function(){
    return view('Department.Pathalogy-patient-report');
})->name('Pathalogy-patient-report');
Route::get('/Pathology-Register', function(){
    return view('Department.Pathology-Register');
})->name('Pathology-Register');
Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
