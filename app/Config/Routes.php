<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override(function () {
    return view('error/404');
});
$routes->setAutoRoute(true);


/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Web::index');
$routes->get('/home', 'Web::home');
$routes->get('/homes', 'Web::homes');
$routes->get('/pendaftaran', 'Web::pendaftaran');
$routes->get('/pengumuman', 'Web::pengumuman');
$routes->get('/cetakformulir', 'Web::cetakpdf');
$routes->get('/printpdf', 'Web::printpdf');
$routes->get('/web/home', 'Web::home');
$routes->get('/web/sekolah', 'Web::getsekolah');
$routes->get('/web/pendaftaran', 'Web::pendaftaran');
$routes->get('/web/pengumuman', 'Web::pengumuman');
$routes->get('/web/cetakformulir', 'Web::cetakpdf');
$routes->get('/web/printpdf', 'Web::printpdf');
$routes->get('/admin', 'Admin::index', ['filter' => 'role:admin,operator']);
$routes->get('/admin/index', 'Admin::index', ['filter' => 'role:admin,operator']);
$routes->get('/admin/pengumuman', 'Admin::pengumuman', ['filter' => 'role:admin']);
$routes->get('/admin/getpengumuman', 'Admin::viewpengumuman', ['filter' => 'role:admin']);
$routes->get('/admin/login', 'Admin::login');
$routes->get('/admin/register', 'Admin::register');
$routes->get('/admin/users', 'Admin::user');
$routes->get('/crud/view', 'Crud::view');
$routes->get('/crud/save', 'Crud::save');
$routes->get('/crud/editjurusan/(:any)', 'Admin::editjurusan/$1', ['filter' => 'role:admin']);
$routes->get('/crud/updatependaftar/(:any)', 'Crud::updatependaftar/$1', ['filter' => 'role:admin,operator']);
$routes->get('/crud/editpendaftar/(:any)', 'Admin::editpendaftar/$1', ['filter' => 'role:admin,operator']);
$routes->get('/crud/hapuspendaftar/(:any)', 'Admin::hapuspendaftar/$1', ['filter' => 'role:admin,operator']);
$routes->get('/crud/tambahjurusan', 'Admin::tambahjurusan', ['filter' => 'role:admin']);
$routes->get('/admin/syarat', 'Admin::syarat', ['filter' => 'role:admin,login']);
$routes->get('/crud/updatesyarat', 'Crud::updatesyarat', ['filter' => 'role:admin']);
$routes->get('/crud/updatejurusan', 'Crud::updatejurusan', ['filter' => 'role:admin']);
$routes->get('/crud/addjurusan', 'Crud::addjurusan', ['filter' => 'role:admin']);
$routes->get('/crud/hapusjurusan/(:any)', 'Crud::deletejurusan/$1', ['filter' => 'role:admin']);
$routes->get('/admin/pengumumantambah', 'Admin::pengumumantambah', ['filter' => 'role:admin']);
$routes->get('/admin/hapuspengumuman/(:any)', 'Admin::hapuspengumuman/$1', ['filter' => 'role:admin']);
$routes->get('/admin/updatepengumuman/(:any)', 'Admin::updatepengumuman/$1', ['filter' => 'role:admin']);
$routes->get('/admin/pendaftar', 'Admin::pendaftar', ['filter' => 'role:admin,operator']);
$routes->get('/admin/pendaftarditerima', 'Admin::pendaftarditerima', ['filter' => 'role:admin,operator']);
$routes->get('/admin/pendaftarpending', 'Admin::pendaftarditolak', ['filter' => 'role:admin,operator']);
$routes->get('/admin/jurusan', 'Admin::jurusan', ['filter' => 'role:admin']);
$routes->get('/admin/kontak', 'Admin::kontak', ['filter' => 'role:admin']);
$routes->get('/crud/addkontak', 'Crud::addkontak', ['filter' => 'role:admin']);
$routes->get('/crud/hapuskontak/(:any)', 'Admin::hapuskontak/$1', ['filter' => 'role:admin']);
$routes->get('/crud/updatekontak/(:any)', 'Crud::updateontak/$1', ['filter' => 'role:admin']);
$routes->get('/admin/exportdata/(:num)', 'Export::export/$1', ['filter' => 'role:admin,operator']);
$routes->get('/404', 'Error::index');
$routes->get('/export/formpdf/(:any)', 'Export::formpdf/$1');
$routes->get('/admin/wa/device', 'Admin::wadevice', ['filter' => 'role:admin,operator,login']);
$routes->get('/admin/wa/device/hapus/(:any)', 'Admin::wadevicehapus/$1', ['filter' => 'role:admin,operator,login']);
$routes->post('/admin/device/tambah', 'Crud::waadd', ['filter' => 'role:admin,operator,login']);
$routes->post('/admin/device/edit/(:any)', 'Crud::waupdate/$1', ['filter' => 'role:admin,operator,login']);
$routes->get('/admin/wa/pesan', 'Admin::wapesan', ['filter' => 'role:admin,operator,login']);
$routes->post('/admin/wa/blastpesan', 'Blast::blaster', ['filter' => 'role:admin,operator,login']);
$routes->post('/admin/setting', 'Admin::setting', ['filter' => 'role:admin,login']);
$routes->post('/admin/setting/update', 'Admin::settingupdate', ['filter' => 'role:admin,login']);

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
