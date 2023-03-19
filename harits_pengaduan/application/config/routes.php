<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// all
$route['home'] = 'Welcome';

// ---------------------------------------------------------------------------------
// controller admin
// ---------------------------------------------------------------------------------

//setup app
$route['adminsetup']='Admin/setup';
$route['adminsetup2']='Admin/setup2';

//auth admin
$route['adminlog']='Admin/log';
$route['adminlogin']='admin/login';

// $route['adminreg']='admin/reg';
$route['adminregis']='admin/register';
$route['adminhome'] ='admin';

// kategori admin
$route['adminkategori'] ='admin/kategori';
$route['admintambahkategori'] ='admin/insertkategori';
$route['admineditkategori/(:num)'] ='admin/editkategori/$1';
$route['admindelkategori/(:num)'] ='Admin/delkategori/$1';

// subkategori admin
$route['admintambahsubkat'] = 'admin/insertsubkat';
$route['admineditsubkat/(:num)'] = 'admin/editsubkat/$1';
$route['admindelsubkat/(:num)'] = 'admin/delsubkategori/$1';

// Masyarakat controller
$route['adminmasyarakat']='admin/masyarakat';
$route['admineditmasy/(:num)']='admin/editmasyarakat/$1';
$route['admindelmasy/(:num)']='admin/delmasyarakat/$1';
$route['adminbanmasy/(:num)']='admin/banmasyarakat/$1';

// petugas admin
$route['adminpetugas']='Admin/petugas';
$route['admindelpetugas/(:num)']='Admin/delpetugas/$1';
$route['adminbanpetugas/(:num)'] = 'admin/banpetugas/$1';
$route['admineditpetugas/(:num)'] = 'admin/editpetugas/$1';

// pengaduan
$route['adminpengaduan'] = 'admin/pengaduan';
$route['adminpengaduantindakan/(:num)'] = 'admin/tindakanpengaduan/$1';
$route['adminpengaduanrespon/(:num)'] = 'admin/inserttindakanpengaduan/$1';

// pdf
$route['adminpdf']= 'admin/laporan_pdf';



//-----------------------------------------------------------------------------------
// controller petugas
//-----------------------------------------------------------------------------------
$route['petugas'] = 'petugas';
$route['petugaskategori'] = 'petugas/kategori';
$route['petmasyarakat'] = 'petugas/masyarakat';
$route['petugaspet'] = 'petugas/petugas';
$route['petpengaduan'] = 'petugas/pengaduan';
$route['pettindakan'] = 'petugas/tindakan_pengaduan';
$route['petpengaduantindakan/(:num)'] = 'petugas/tindakan_pengaduan/$1';
$route['petinserttindakan/(:num)'] = 'petugas/inserttindakanpengaduan/$1';



//-----------------------------------------------------------------------------------
// controller user
//-----------------------------------------------------------------------------------

//auth
$route['reg'] = 'Auth/reg';
$route['login'] = 'Auth';
$route['logout'] = 'Auth/logout';

// all
$route['dashboard'] = 'User';
$route['userprofil']= 'user/profil';
$route['editprofilmas/(:num)'] = 'user/editprofil/$1';
$route['resetpasswordms/(:num)'] = 'user/resetpassword/$1';
$route['pengaduan'] = 'User/pengaduan';
$route['pengaduandetail/(:num)'] = 'User/pengaduandetail/$1';
$route['pengaduan2'] = 'User/pengaduan2';
$route['usertambahpengaduan'] = 'User/insertpengaduan';