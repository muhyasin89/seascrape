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



Route::get('/','HomeController@index')->name('home');
Route::get('/home', 'HomeController@home');
Route::get('/home1', 'HomeController@home1');
Route::get('/news/{sub?}/{id?}','HomeController@news')->name('news');
Route::get('/about/{sub?}','HomeController@about')->name('about');
Route::get('/project/{sub?}/{id?}','HomeController@project')->name('project');
Route::get('/services/{sub?}/{id?}','HomeController@services')->name('service');
Route::get('/hse','HomeController@hse')->name('hse');
Route::get('/career', 'HomeController@career')->name('career');
Route::get('/contact_us','HomeController@contact')->name('contact_us');


Route::get('/maps/{id}','HomeController@maps_api');
Route::get('/about/key_management/{id}','HomeController@about_key_management_api');



Route::get('/menu', function () {
    return view('main.home_nav');
    // route to show the login form
});

Auth::routes();

#Route::get('/menu', 'HomeController@menu');

Route::prefix('admin')->group(function () {

    Route::get('/','Controller@index');
    Route::get('/email/test','Controller@email_test');
    Route::get('/email/sent/{group}/{newsletter_id}', function ($group, $newsletter) {
        #Artisan::call('email:send',['group'=>$group, 'newsletter'=>$newsletter]);

        return 'Sending Newsletter Complete.';
    });

    Route::resource('newsletter', 'NewsletterController');
    Route::get('newsletter/preview/{id?}','NewsletterController@show');
    Route::post('newsletter/setting','NewsletterController@setting');
    Route::get('send_email/','NewsletterController@send_email');


    Route::get('/subscriber','SubscriberController@index');
    Route::post('/subscriber/store', 'SubscriberController@store');
    Route::get('/subscriber/edit/{id}','SubscriberController@edit');

    Route::match(array('PUT', 'PATCH'), "/subscriber/{id}", array(
        'uses' => 'SubscriberController@update',
        'as' => 'subscriber.update'
    ));

    Route::get('/subscriber/change_status/default','SubscriberController@change_null_default');

    Route::get('/subscriber/category/','SubscriberController@index_category');
    Route::get('/subscriber/category/create','SubscriberController@create_category');
    Route::get('/subscriber/category/edit/{id}','SubscriberController@edit_category');
    Route::post('/subscriber/category/', 'SubscriberController@store_category');
    Route::match(array('PUT', 'PATCH'), "/subscriber/category/{id}", array(
        'uses' => 'SubscriberController@update_category',
        'as' => 'subscriber_category.update'
    ));

    Route::delete('/subscriber/category/{id}','AboutCoreController@delete_category')->name('subscriber_category.delete');


    Route::get('/about/core/', 'AboutCoreController@index');
    Route::get('/about/core/create', 'AboutCoreController@create');
    Route::post('/about/core/', 'AboutCoreController@store');
    Route::get('/about/core/{id}/edit','AboutCoreController@edit');
    Route::match(array('PUT', 'PATCH'), "/about/core/{id}", array(
        'uses' => 'AboutCoreController@update',
        'as' => 'core.update'
    ));

    Route::delete('/about/core/{id}','AboutCoreController@delete')->name('about_core.delete');

    /*--- Start:about management --*/
    Route::get('/about/management/','KeyManagementController@index');
    Route::get('/about/management/create', 'KeyManagementController@create');
    Route::post('/about/management/','KeyManagementController@store');
    Route::get('/about/management/{id}','KeyManagementController@show');
    Route::get('/about/management/{id}/edit','KeyManagementController@edit');

    Route::match(array('PUT', 'PATCH'), "/about/management/{id}", array(
        'uses' => 'KeyManagementController@update',
        'as' => 'management.update'
    ));
    Route::delete('/about/management/{id}','KeyManagementController@delete')->name('management.delete');
    /*--- End:about management --*/

    /*--- Start:service equipment --*/
    Route::get('/service/equipment/','ServiceEquipmentController@index');
    Route::get('/service/equipment/create', 'ServiceEquipmentController@create');
    Route::post('/service/equipment/','ServiceEquipmentController@store');
    Route::get('/service/equipment/{id}','ServiceEquipmentController@show');
    Route::get('/service/equipment/{id}/edit','ServiceEquipmentController@edit');

    Route::match(array('PUT', 'PATCH'), "/service/equipment/{id}", array(
        'uses' => 'ServiceEquipmentController@update',
        'as' => 'service_equipment.update'
    ));
    Route::delete('/service/equipment/{id}','ServiceEquipmentController@delete')->name('service_equipment.delete');
    /*--- End:service equipment --*/


    /*--- Start:client model --*/
    Route::get('/client/model/','ClientModelController@index');
    Route::get('/client/model/create', 'ClientModelController@create');
    Route::post('/client/model/','ClientModelController@store');
    Route::get('/client/model/{id}','ClientModelController@show');
    Route::get('/client/model/{id}/edit','ClientModelController@edit');
    Route::get('/client/model/image/{id}','ClientModelController@image_edit');

    Route::match(array('PUT', 'PATCH'), "/client/model/{id}", array(
        'uses' => 'ClientModelController@update',
        'as' => 'client_model.update'
    ));
    Route::delete('/client/model/{id}','ClientModelController@delete')->name('client_model.delete');
    /*--- End:client model --*/

    /*--- Start:maps --*/
    Route::resource('maps', 'MapsController');
    /*--- End:service equipment --*/

    /*--- Start:maps --*/
    Route::resource('projects', 'ProjectController');
    /*--- End:service equipment --*/

    /*--- Start:maps --*/
    Route::resource('news', 'NewsController');
    /*--- End:service equipment --*/

    Route::get('email/','EmailController@index');
    Route::get('email/custom','EmailController@custom');
    Route::get('email/custom/1','EmailController@custom1');

    Route::get('/newslatter/log/','NewsletterLogController@index');
    Route::post('/newslatter/log/','NewsletterLogController@store');
});

