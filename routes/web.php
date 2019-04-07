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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::group(['prefix' => 'admin'], function(){
	Route::group(['middleware' => 'admin'], function(){
		Route::get('/dashboard','AdminController@dashboard')->name('admin.dashboard');
		// CUSTOMER
		Route::get('/customer','AdminController@index_customer')->name('admin.index.customer');
		Route::get('/add/customer','AdminController@add_customer')->name('admin.add.customer');
		Route::post('/add/customer','AdminController@save_customer')->name('admin.save.customer');
		Route::get('/edit/customer/{id}','AdminController@edit_customer')->name('admin.edit.customer');
		Route::post('/edit/customer','AdminController@update_customer')->name('admin.update.customer');
		Route::get('/delete/customer/{id}','AdminController@delete_customer')->name('admin.delete.customer');
		Route::get('/pdf/customer', 'AdminController@pdf_customer')->name('admin.pdf.customer');

		// TARIFF
		Route::get('/tariff','TariffController@index')->name('admin.index.tariff');
		Route::get('/add/tariff','TariffController@add')->name('admin.add.tariff');
		Route::post('/add/tariff','TariffController@save')->name('admin.save.tariff');
		Route::get('/edit/tariff/{id}','TariffController@edit');
		Route::post('/edit/tariff','TariffController@update')->name('admin.update.tariff');
		Route::get('/delete/tariff/{id}','TariffController@delete')->name('admin.delete.tariff');
		Route::get('/pdf/tariff', 'TariffController@pdf_tariff')->name('admin.pdf.tariff');

		// Utilization
		Route::get('/utilization','UtilizationController@index')->name('admin.index.utilization');
		Route::get('/add/utilization','UtilizationController@add')->name('admin.add.utilization');
		Route::post('/add/utilization','UtilizationController@save')->name('admin.save.utilization');
		Route::get('/edit/utilization/{id}','UtilizationController@edit')->name('admin.edit.utilization');
		Route::post('/edit/utilization','UtilizationController@update')->name('admin.update.utilization');
		Route::get('/delete/utilization/{id}','UtilizationController@delete')->name('admin.delete.utilization');
		Route::get('/pdf/utilization', 'UtilizationController@pdf')->name('admin.pdf.utilization');		

		// Billing
		Route::get('/billing','BillingController@index')->name('admin.index.billing');
		Route::get('/add/billing','BillingController@add')->name('admin.add.billing');
		Route::post('/add/billing','BillingController@save')->name('admin.save.billing');
		Route::get('/pdf/billing', 'BillingController@pdf')->name('admin.pdf.bill');

		// Payment
		Route::get('/payment','PaymentController@index')->name('admin.index.payment');
		Route::get('/add/payment/{id}','PaymentController@add')->name('admin.add.payment');
		Route::post('/add/payment','PaymentController@save')->name('admin.save.payment');
		Route::get('/pdf/payment', 'PaymentController@pdf')->name('admin.pdf.payment');
	});
});

Route::group(['middleware' => 'customer'], function(){
	Route::get('/dashboard', 'CustomerController@dashboard')->name('dashboard');
});