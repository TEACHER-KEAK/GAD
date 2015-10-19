<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
/*Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');*/

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::get('/', function(){
    return view('home');
});

Route::get('/projects', function(){
   return view('project_list') ;
});

Route::get('/home', function(){
    return view('welcome');
});


Route::get('/admin/login', function () {
    return view('login');
});

/*Route::get('/admin/users', function () {
    $users = App\User::all();
    return view('admin.users.user')->with('users', $users);
});*/

Route::get('admin/users/change_password',[
    'middleware' => ['auth'],
    'uses' => 'Admin\UserController@changePassword'
]);

Route::get('admin',[
    'middleware' => ['auth'],
    'uses' => 'Admin\DashboardController@Index'
]);

Route::get('admin/dashboard',[
    'middleware' => ['auth'],
    'uses' => 'Admin\DashboardController@Index'
]);

Route::group(['prefix' => 'admin'
            , 'namespace' => 'Admin'
            , 'middleware' =>'auth'],function(){
                
    Route::post('categories/updatecategory','CategoryController@UpdateCategory');
    Route::post('categories/translation','CategoryController@Translation');
    Route::resource('categories','CategoryController');  
    
    Route::post('users/updateuser','UserController@UpdateUser');
    Route::resource('users','UserController');
    
    Route::post('contents/updatecontent','ContentController@UpdateContent');
    Route::post('contents/translation','ContentController@Translation');
    Route::resource('contents', 'ContentController');
    
    Route::post('menus/updatemenu/{id}','MenuController@UpdateMenu');
    Route::post('menus/translation','MenuController@Translation');
    //Route::get('menus/translate/{id}','MenuController@Translate');
    Route::resource('menus', 'MenuController');
    
    Route::resource('settings', 'SettingController');
    
    Route::resource('languages', 'LanguageController');
    
    Route::resource('sliders', 'SliderController');
    

});


Route::group(array('middleware' => 'auth'), function(){
    Route::controller('filemanager', 'FilemanagerLaravelController');
});

Route::get('/rest/contents', function(){
   return \App\Content::paginate(); 
});


Route::group(['prefix' => 'rest/admin'
            , 'namespace' => 'Admin'
            , 'middleware' =>'auth'],function(){
                
    Route::post('/contents', ['uses' => 'ContentController@Json']);
    Route::post('/contents/translate', ['uses' => 'ContentController@Translate']);
    
    Route::post('/menus', ['uses' => 'MenuController@Json']);
    Route::post('/menus/translate', ['uses' => 'MenuController@Translate']);

    Route::post('/categories', ['uses' => 'CategoryController@Json']);
    Route::post('/categories/translate', ['uses' => 'CategoryController@Translate']);
    
    Route::post('/users', ['uses' => 'UserController@Json']);
    
});
