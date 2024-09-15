<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


Route::get('/customer.addcustomer', function () {
    return view('admin-pages.customer.addcustomer');
});
Route::get('/customer.customerlist', function(){
    return view('admin-pages.customer.customerlist');
});
Route::get('/customer.customerledger', function(){
    return view('admin-pages.customer.customerledger');
});

Route::get('/medicine.addmedicine', function(){
    return view('admin-pages.medicine.addmedicine');
});

Route::get('/medicine.medicinedetails', function(){
    return view('admin-pages.medicine.medicinedetails');
});

Route::get('/medicine.medicinelist', function(){
    return view('admin-pages.medicine.medicinelist');
});

Route::get('/manufacturer.addmanufacturer', function(){
    return view('admin-pages.manufacturer.addmanufacturer');
});

Route::get('/manufacturer.manufacturerlist', function(){
    return view('admin-pages.manufacturer.manufacturerlist');
});

Route::get('/manufacturer.manufacturerledger', function(){
    return view('admin-pages.manufacturer.manufacturerledger');
});

Route::get('/returns.addwastagereturn', function(){
    return view('admin-pages.returns.addwastagereturn');
});
Route::get('/returns.wastagereturnlist', function(){
    return view('admin-pages.returns.wastagereturnlist');
});

Route::get('/returns.addmanufacturerreturn', function(){
    return view('admin-pages.returns.addmanufacturerreturn');
});
Route::get('/returns.manufacturerreturnlist', function(){
    return view('admin-pages.returns.manufacturerreturnlist');
});

Route::get('/human-resource.employee', function(){
    return view('admin-pages.human-resource.employee');
});

Route::get('/human-resource.employeesprofile', function(){
    return view('admin-pages.human-resource.employeesprofile');
});

Route::get('/human-resource.attendance', function(){
    return view('admin-pages.human-resource.attendance');
});

Route::get('/human-resource.salary', function(){
    return view('admin-pages.human-resource.salary');
});

Route::get('/finance.income', function(){
    return view('admin-pages.finance.income');
});
// Route::get('/admin/customer/add', function () {
//     return view('admin.customer.addcustomer');
// })->name('admin.customer.add');


