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


// Route::get('/', 'HomeController@nampil')->name('kegiatan');
Route::get('/', function() {
    return redirect(route('rumah.web'));
});

// Route::get('/home', function() {
//     return redirect(route('login'));
// });

Route::get('/registrasi', function() {
    return redirect(route('register'));
});

    Route::resource('/kontak', 'KontakController');
    Route::get('/rumah', 'RumahController@web')->name('rumah.web');
// frontend single kegiatan


    Route::get('/kegiatan/{id}/{name}','PostingController@show')->name('posting.single');
    Route::resource('/kegiatan', 'PostingController');
// frontend index postingan menjadi -> kegiatan
    Route::get('/kegiatan', 'PostingController@web')->name('posting.web');
// frontend index kontak menjadi -> kontak
    Route::get('/kontak', 'KontakController@web')->name('kontak.web');
// frontend produk single
    Route::get('/produk/{id}','ProductController@show')->name('produk.single');
// frontend index product menjadi -> produk
    Route::get('/produk', 'ProductController@web')->name('produk.web');    


    // Route::get('/login2', 'HomeController@login2')->name('auth.login2');

// Autentikasi Untuk Masuk Ke login

Auth::routes();

// Komentar kegiatan
    Route::get('/komentar/{pageId}', function($pageId){
    return view('page',['pageId' => $pageId]);
});
Route::get('comments/{pageId}', 'CommentController@index');
Route::post('comments', 'CommentController@store');
Route::post('comments/{commentId}/{type}', 'CommentController@update');

Route::group(['middleware' => 'auth'], function() {

    Route::group(['middleware' => ['role:admin']], function () {
        Route::resource('/role', 'RoleController')->except([
            'create', 'show', 'edit', 'update'
        ]);

        Route::resource('/users', 'UserController')->except([
            'show'
        ]);
        Route::get('/users/roles/{id}', 'UserController@roles')->name('users.roles');
        Route::put('/users/roles/{id}', 'UserController@setRole')->name('users.set_role');
        Route::post('/users/permission', 'UserController@addPermission')->name('users.add_permission');
        Route::get('/users/role-permission', 'UserController@rolePermission')->name('users.roles_permission');
        Route::put('/users/permission/{role}', 'UserController@setRolePermission')->name('users.setRolePermission');
    });

    Route::group(['middleware' => ['permission:show products|create products|delete products']], function() {
        Route::resource('/kategori-produk', 'CategoryController')->except([
            'create', 'show'
        ]);
        Route::resource('/manajemen-produk', 'ProductController');
    });


    Route::group(['middleware' => ['role:kasir']], function() {
        Route::get('/transaksi', 'OrderController@addOrder')->name('order.transaksi');
        Route::get('/checkout', 'OrderController@checkout')->name('order.checkout');
        Route::post('/checkout', 'OrderController@storeOrder')->name('order.storeOrder');
    });

    Route::group(['middleware' => ['role:admin']], function() {
        Route::resource('/kategori-produk', 'CategoryController')->except([
            'create', 'show'
        ]);
        Route::resource('/manajemen-produk', 'ProductController');
        Route::get('/order', 'OrderController@index')->name('order.index');
        Route::get('/order/pdf/{invoice}', 'OrderController@invoicePdf')->name('order.pdf');
        Route::get('/order/excel/{invoice}', 'OrderController@invoiceExcel')->name('order.excel');
    });

//Postingan
    Route::group(['middleware' => ['permission:show postings|create postings|delete postings']], function() {
        Route::resource('/kategoriposting', 'KategoriPostingController')->except([
            'create', 'show'
        ]);
        Route::resource('/posting', 'PostingController');
    });

    // postingan ntah
    Route::group(['middleware' => ['role:admin']], function() {
        Route::resource('/kategoriposting', 'KategoriPostingController')->except([
            'create', 'show'
        ]);
        Route::resource('/posting', 'PostingController');
    });




// frontend single
    Route::get('/kegiatan/{id}','PostingController@show')->name('posting.single');
// frontend index

    Route::get('/home', 'HomeController@index')->name('home');

});