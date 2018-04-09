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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/addfarmers', 'FarmersController@insertfarmers')->name('addfarmers');
Route::get('/add_farmers', 'FarmersController@add_farmers')->name('add_farmers');
Route::get('/farmers_list', 'FarmersController@farmers_list')->name('farmers_list');
Route::get('/edit_farmers/{id}', 'FarmersController@edit_farmers')->name('edit_farmers');
Route::get('/delete_farmers/{id}', 'FarmersController@delete_farmers')->name('delete_farmers');
Route::post('/updatefarmer/{id}', 'FarmersController@updatefarmer')->name('updatefarmer');
Route::get('/employees_list', function () {
    return view('employees/employees_list');
});
Route::get('/add_employees', function () {
    return view('employees/add_employees');
});
Route::get('/deliveries', function () {
    return view('deliveries/delivery_list');
});
Route::get('/new_deiveries', function () {
    return view('deliveries/new_deiveries');
});
Route::get('/sales_reports', function () {
    return view('reports/sales_reports');
});
Route::get('/per_farmers', function () {
    return view('reports/per_farmers');
});
Route::get('/total', function () {
    return view('reports/total');
});
Route::get('/issues', function () {
    return view('issues');
});
Route::get('/products', function () {
    return view('product/product_list');
});
Route::get('/add_product', function () {
    return view('product/add_product');
    });
Route::get('/edit_product', function () {
    return view('product/edit_product');
    });

Route::get('/add_inventory', function () {
    return view('inventory/add_inventory');
    });

Route::get('/edit_inventory', function () {
    return view('inventory/edit_inventory');
    });

Route::get('/inventory', function () {
    return view('inventory/inventory_list');
    
    });