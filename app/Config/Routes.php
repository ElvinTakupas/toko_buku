<?php

use App\Controllers\Home;
$routes->get('/', 'Home::index');
$routes->get('/admin', 'Books::index');
$routes->get('/admin/books', 'BooksController::index');
$routes->get('/', 'BooksController::books');


// categori tabel
$routes->get('/categories', 'CategoriesController::index');
// Rute untuk menampilkan form tambah categores
$routes->post('/add_category_view', 'CategoriesController::add_category_view');
$routes->post('/orders/create', 'OrdersController::create');
$routes->get('/categories/delete/(:num)', 'CategoriesController::delete/$1');
$routes->get('/orders', 'OrdersController::index');
$routes->get('/orders/delete/(:num)', 'OrdersController::delete/$1');
$routes->get('/orders', 'OrdersController::index');
$routes->get('/orders/create', 'OrdersController::create');
$routes->post('/orders/create', 'OrdersController::create'); // Ensure the method is POST
$routes->get('/orders/delete/(:num)', 'OrdersController::delete/$1');
$routes->get('tambah_customer', 'PelangganController::tambah_customer');
$routes->get('orders/edit/(:num)', 'OrdersController::edit/$1');
$routes->get('/orders/edit/(:num)', 'OrdersController::edit/$1');
$routes->post('/orders/update/(:num)', 'OrdersController::update/$1');

// Rute untuk menampilkan daftar buku
$routes->get('/books', 'BooksController::index');

// Rute untuk menampilkan form tambah buku
$routes->get('/books/add', 'BooksController::addView');

// Rute untuk menangani pengiriman form tambah buku
$routes->post('/books/add', 'BooksController::add');

// Rute untuk menampilkan form edit buku
$routes->get('dashboard/edit/(:num)', 'BooksController::edit/$1');

// Rute untuk menangani pembaruan buku
$routes->post('/books/edit/(:num)', 'BooksController::update/$1');

// Rute untuk menghapus buku
$routes->get('/books/delete/(:num)', 'BooksController::delete/$1');


// Rute untuk menampilkan kategori
$routes->get('/categories', 'CategoriesController::index');
$routes->get('/categories/add', 'CategoriesController::add_category_view');
$routes->post('/categories/add', 'CategoriesController::add');
$routes->get('/categories/edit/(:num)', 'CategoriesController::edit_category_view/$1');
$routes->post('/categories/update/(:num)', 'CategoriesController::update/$1');
$routes->get('/categories/delete/(:num)', 'CategoriesController::delete/$1');
$routes->get('/categories/add', 'CategoriesController::add_category_view'); // Show the form
$routes->post('/categories/add', 'CategoriesController::add'); // Handle form submission


   // Menyimpan kategori ke database




// Rute untuk halaman laporan
$routes->get('/laporan', 'DashboardController::index');

//Rute untuk halaman PromosiDiskon , pelanggan dan pemasokStok
$routes->group('admin', function($routes) {
    // Rute untuk menampilkan promosi diskon
    $routes->get('promosi_diskon', 'AdminController::promosiDiskon');  // Pastikan controller method sudah ada

    // Rute untuk menyimpan dan memperbarui promosi diskon
    $routes->post('promosi_diskon/save/(:segment)', 'AdminController::savePromosiDiskon/$1');
    $routes->post('promosi_diskon/save', 'AdminController::savePromosiDiskon');
    
    // Rute untuk menghapus promosi diskon
    $routes->get('promosi_diskon/delete/(:segment)', 'AdminController::deletePromosiDiskon/$1');
});
$routes->get('/admin/pelanggan', 'PelangganController::pelanggan');
$routes->get('/admin/pemasok_stok', 'AdminController::pemasokStok');  // Rute untuk Pemasok Stok

// Rute untuk halaman pelanggan 
$routes->get('customers', 'CustomersController::customers');
$routes->get('customers', 'App\Controllers\CustomersController::customers');
$routes->get('customers', 'CustomersController::customers');
$routes->get('/pelanggan', 'PelangganController::pelanggan');
// app/Config/Routes.php

$routes->get('pelanggan/tambah_customer', 'PelangganController::tambah_customer');
$routes->post('pelanggan', 'PelangganController::pelanggan');
$routes->get('/pelanggan/edit_customer/(:num)', 'PelangganController::edit_customer/$1');
$routes->post('/pelanggan/update_customer/(:num)', 'PelangganController::update_customer/$1');
$routes->get('/pelanggan/delete_customer/(:num)', 'PelangganController::delete_customer/$1');






// rute login

$routes->get('login', 'AuthController::index');
$routes->post('login', 'AuthController::login');
$routes->get('logout', 'AuthController::logout');



// Membuat rute untuk pendaftaran
$routes->get('register', 'RegisterController::index'); // Menampilkan halaman register (GET request)
$routes->post('register/create', 'RegisterController::create'); // Menangani form pendaftaran (POST request)

// Rute untuk halaman reset password
$routes->get('password/forgot', 'PasswordController::forgot');   // Halaman form "forgot password"
$routes->post('password/reset', 'PasswordController::reset');   // Proses reset password


// kembali ke login

$routes->get('login', 'AuthController::login');


// Membuat rute untuk halaman register

$routes->get('/register', 'RegisterController::index');
$routes->post('/register/create', 'RegisterController::create');
$routes->get('/login', 'AuthController::index');
$routes->post('/login', 'AuthController::login');
$routes->get('/logout', 'AuthController::logout');

// membuat rute halaman pelanggan
$routes->get('/', 'Home::index'); // Rute default
$routes->get('/pelanggan', 'PelangganController::pelanggan'); // Rute untuk menampilkan data pelanggan

 // membuat rute untuk halaman PromosiDiskon
 $routes->get('/', 'Home::index');
 $routes->get('promosi-diskon', 'PromosiDiskonController::promosiDiskon'); // Rute untuk menampilkan data PromosiDiskon
 
 // membuat Rute upload photo
 $routes->post('upload/photo', 'UploadController::photo');

 // membuat rute untuk halaman Dasboard

 $routes->get('/', 'Dashboard::index');
 $routes->get('/dashboard', 'Dashboard::index');

 // membuat rute halaman pesanan

 $routes->get('/pesanan', 'PesananController::index');

 // membuat rute halaman DataBooks

 $routes->get('/books_view', 'DataBooksController::index');


// membuat rute  halaman charts

$routes->get('/charts', 'ChartsController::index');



