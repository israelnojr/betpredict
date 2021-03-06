<?php
Route::get('/', 'WelcomeController@welcome')->name('welcom');
Route::get('/terms', 'WelcomeController@terms')->name('terms');

Auth::routes();

Route::middleware('auth')->group( function(){
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/strategy', 'WelcomeController@strategy')->name('strategy');

});

Route::namespace('Admin')->prefix('admin')->name('admin.')->group( function(){
    Route::resource('users', 'UsersController', ['except' => ['show', 'create', 'store']]);
});

Route::prefix('admin')->name('admin.')->group( function(){
    Route::resource('predictions', 'PredictionController');
    Route::put('prediction/{prediction}', 'PredictionController@premium')->name('predictions.premium');
    
    Route::resource('subscriptions', 'SubscriptionController');
    Route::put('subscriptions/{subscription}/status', 'SubscriptionController@status')->name('subscription.status');
    Route::get('profile/{user}', 'SubscriptionController@profile')->name('profile');
    Route::put('subscriptions/{subscription}/payment', 'SubscriptionController@updateImage')->name('subscription.payment');
    Route::get('plan/{subscription}/renew', 'SubscriptionController@edit')->name('subscriptions.renew');
});
