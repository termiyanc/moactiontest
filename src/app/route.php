<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(
    ['namespace' => 'Termiyanc\Moactiontest\App\Controllers'],
    function (){
        //  Работа с подписками пользователя
        Route::get('termiyanc/moactiontest/users', 'Users@subscriptions');
        Route::get('termiyanc/moactiontest/users/addSubscription/{user_id}/{subscription_id}', "Users@addSubscription");
        Route::get('termiyanc/moactiontest/users/removeSubscription/{user_id}/{subscription_id}', "Users@removeSubscription");
    }
);