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

/*
  |--------------------------------------------------------------------------
  | ALL
  |--------------------------------------------------------------------------
 */

Route::get('/', array(
    'as' => 'home',
    'uses' => 'HomeController@home'
));

Route::get('/user/{name}', array(
    'as' => 'profile',
    'uses' => 'ProfileController@user'
));

/*
  |--------------------------------------------------------------------------
  | AUTHENTICATED GROUP
  |--------------------------------------------------------------------------
 */

Route::group(array('before' => 'auth'), function() {

    // CSRF protection group
    Route::group(array('before' => 'csrf'), function() {

        // Change password (POST)
        Route::post('/account/change-password', array(
            'as' => 'account-change-password-post',
            'uses' => 'AccountController@postChangePassword'
        ));

        // Settings (POST)    
        Route::post('/account/settings', array(
            'as' => 'account-settings-post',
            'uses' => 'AccountController@postSettings'
        ));

        // Workout entry (POST)    
        Route::post('/account/workout', array(
            'as' => 'account-workout-post',
            'uses' => 'AccountController@postWorkout'
        ));
        
        // Workout creation (POST)    
        Route::post('/create-workout', array(
            'as' => 'create-workout-post',
            'uses' => 'AccountController@postCreateWorkout'
        ));
    });

    // Workout creation (GET)    
    Route::get('/create-workout', array(
        'as' => 'create-workout',
        'uses' => 'AccountController@getCreateWorkout'
    ));
    
    // Exercise creation (GET)    
    Route::get('/add-exercise', array(
        'as' => 'add-exercise',
        'uses' => 'WorkoutController@exercise'
    ));

    // Workout editing (GET)    
    Route::get('/workout/{name}', array(
        'as' => 'workout',
        'uses' => 'WorkoutController@workout'
    ));
    
    // User profile (GET) 
    Route::get('/user/{name}', array(
    'as' => 'profile',
    'uses' => 'ProfileController@user'
));

    // Settings (GET)    
    Route::get('/account/settings', array(
        'as' => 'account-settings',
        'uses' => 'AccountController@getSettings'
    ));

    // Change password (GET)    
    Route::get('/account/change-password', array(
        'as' => 'account-change-password',
        'uses' => 'AccountController@getChangePassword'
    ));

    // Logout (GET)    
    Route::get('/account/logout', array(
        'as' => 'account-logout',
        'uses' => 'AccountController@getLogout'
    ));
});

/*
  |--------------------------------------------------------------------------
  | UNAUTHENTICATED GROUP
  |--------------------------------------------------------------------------
 */

Route::group(array('before' => 'guest'), function() {

    // CSRF protection group
    Route::group(array('before' => 'csrf'), function() {

        // Login (POST)
        Route::post('/account/login', array(
            'as' => 'account-login-post',
            'uses' => 'AccountController@postLogin'
        ));

        // Create account (POST)
        Route::post('/account/create', array(
            'as' => 'account-create-post',
            'uses' => 'AccountController@postCreate'
        ));

        // Recover account (POST)
        Route::post('/account/recovery', array(
            'as' => 'account-recovery-post',
            'uses' => 'AccountController@postRecovery'
        ));
    });

    // Login (GET)
    Route::get('/account/login', array(
        'as' => 'account-login',
        'uses' => 'AccountController@getLogin'
    ));

    // Create account (GET)
    Route::get('/account/create', array(
        'as' => 'account-create',
        'uses' => 'AccountController@getCreate'
    ));

    // Activate account (GET)    
    Route::get('/account/activate/{code}', array(
        'as' => 'account-activate',
        'uses' => 'AccountController@getActivate'
    ));

    // Recover password (GET)    
    Route::get('/account/recovery', array(
        'as' => 'account-recovery',
        'uses' => 'AccountController@getRecovery'
    ));

    // Reactivate account (GET)    
    Route::get('/account/reactivate/{code}', array(
        'as' => 'account-reactivate',
        'uses' => 'AccountController@getReactivate'
    ));
});
