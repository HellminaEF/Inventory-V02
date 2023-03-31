<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(true);
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/login', 'Auth::login');
$routes->get('/register', 'Auth::register');

$routes->get('/logout', 'Auth::logout');

$routes->get('/register', 'Register::index');
$routes->post('/register/process', 'Register::process');

// Admin

$routes->get('/admin', 'Admin::index');

$routes->get('/jenis', 'Jenis::jenis');
$routes->get('/add_jenis', 'Jenis::add_jenis');
$routes->post('/save_jenis', 'Jenis::save_jenis');
$routes->post('jenis/update/(:num)', 'jenis::update/$1');
$routes->get('autokode/kode', 'jenis::kode');

$routes->get('/divisi', 'Divisi::divisi');
$routes->get('/add_divisi', 'Divisi::add_divisi');
$routes->post('/save_divisi', 'Divisi::save_divisi');

$routes->get('/karyawan', 'Karyawan::karyawan');
$routes->get('/add_karyawan', 'Karyawan::add_karyawan');
$routes->post('/save_karyawan', 'Karyawan::save_karyawan');

$routes->get('/barang', 'Barang::barang');
$routes->get('/add_barang', 'Barang::add_barang');
$routes->post('/save_barang', 'Barang::save_barang');
$routes->get('/det_barang/(:num)', 'Barang::det_barang/$1');
$routes->get('barang/kode', 'Barang::kode');

$routes->get('/transaksi', 'transaksi::transaksi');

$routes->get('/penanggung_jawab', 'Pj::penanggung_jawab');
$routes->get('/kondisi_dibeli', 'Kondisi_dibeli::kondisi_dibeli');
$routes->get('/kondisi_sekarang', 'Kondisi_sekarang::kondisi_sekarang');
$routes->get('/kode_trans', 'Kode_trans::kode_trans');

$routes->get('/jabatan', 'Jabatan::jabatan');
$routes->get('/add_jabatan', 'Jabatan::add_jabatan');
$routes->post('/save_jabatan', 'Jabatan::save_jabatan');

$routes->get('/status', 'Status::status');

$routes->get('/history', 'History::history');

$routes->get('/komplain', 'Komplain::komplain');

$routes->get('/users', 'Admin::users');
$routes->get('/edit_user', 'Admin::edit_user');

// User

$routes->get('/user', 'User::index');
$routes->get('/u_barang', 'U_barang::u_barang');
$routes->get('/u_komplain', 'Komplain::u_komplain');
$routes->get('/add_komplain', 'Komplain::add_komplain');
$routes->get('/u_history', 'History::u_history');
$routes->get('/add_history', 'History::add_history');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
