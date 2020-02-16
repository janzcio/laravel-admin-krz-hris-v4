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

Route::get('/', 'HomeController@welcome')->name('welcome');
Route::get('/home', 'HomeController@welcome')->name('home');
Route::get('/welcome', 'HomeController@welcome');
Route::get('/apply/{id}', 'HomeController@apply');
Route::get('/js/register', 'HomeController@jsRegister');
Route::get('/js/view', 'HomeController@jsView');
Route::post('/js/store', 'HomeController@jsStore');
Route::get('/messages', 'Message\MessageController@index');
Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::get('/notifications', 'HomeController@notifications');
Route::get('/truncateall', 'Admin\TruncateTablesController@trunctateAll');

Auth::routes();



/*View Profile*/
Route::get('/profile', 'Admin\UsersController@profile')->name('profile');
Route::post('/profile/update', 'Admin\UsersController@profileUpdate')->name('profile_update');
Route::post('/profile/save-json', 'Admin\UsersController@saveJson')->name('profile_save_json');
Route::post('/profile/upload-prof-pic', 'Admin\UsersController@upload')->name('profile_upload_profpic');
Route::post('/profile/update-credential', 'Admin\UsersController@updateCredential')->name('profile_update_credential');


Route::get('admin', 'Admin\AdminController@index');
Route::resource('admin/roles', 'Admin\RolesController');
Route::resource('admin/permissions', 'Admin\PermissionsController');
Route::resource('admin/users', 'Admin\UsersController');
Route::get('/admin/jobseekers', 'Admin\UsersController@jobseekers');
Route::get('/admin/rfu/{usertype}/{uid}', 'Admin\UsersController@rfu');

Route::get('admin/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@getGenerator']);
Route::post('admin/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@postGenerator']);

Route::get('logout', 'Auth\LoginController@logout', function () {
    return abort(404);
});


Route::resource('admin/jobhirings', 'jobhirings\\jobhiringsController');

/*applicants*/
Route::get('admin/jobhirings/{jhid}/applicants', 'jobhirings\jobhiringsController@showApplicants');





Route::resource('admin/message', 'Message\\MessageController');

