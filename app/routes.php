<?php
/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */

Route::get('/', array(
    'as' => 'home',
    'uses' => 'homeController@home'
));

// Authenticated group
Route::group(array('before' => 'auth'), function() {
    
    // CSRF protection group
    Route::group(array('before' => 'csrf'), function() {
        
        // Change password (POST)
        Route::post('/account/change-password', array(
            'as' => 'account-change-password-post',
            'uses' => 'accountController@postChangePassword'
        ));
    });    
    
    // Change password (GET)    
    Route::get('/account/change-password', array(
        'as' => 'account-change-password',
        'uses' => 'accountController@getChangePassword'
    ));    
    
    // Logout (GET)    
    Route::get('/account/logout', array(
        'as' => 'account-logout',
        'uses' => 'accountController@getLogout'
    ));    
});

// Unauthenticated group
Route::group(array('before' => 'guest'), function() {
    
    // CSRF protection group
    Route::group(array('before' => 'csrf'), function() {
        
        // Login (POST)
        Route::post('/account/login', array(
            'as' => 'account-login-post',
            'uses' => 'accountController@postLogin'
        ));
        
        // Create account (POST)
        Route::post('/account/create', array(
            'as' => 'account-create-post',
            'uses' => 'accountController@postCreate'
        ));
    });
    
    // Login (GET)
    Route::get('/account/login', array(
        'as' => 'account-login',
        'uses' => 'accountController@getLogin'
    ));
    
    // Create account (GET)
    Route::get('/account/create', array(
        'as' => 'account-create',
        'uses' => 'accountController@getCreate'
    ));
    
    // Activate account (GET)    
    Route::get('/account/activate/{code}', array(
        'as' => 'account-activate',
        'uses' => 'accountController@getActivate'
    ));
});
