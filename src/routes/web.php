<?php


use Teamprodev\LaravelPaymentPayme\Http\Controller\PaycomController;

Route::group([
    'middleware' => 'web',
    'prefix' => 'paycom',
    'as' => 'paycom.',
    'namespace' => 'Teamprodev\LaravelPaymentPayme\Http\Controller'
], function () {

    Route::post('pay', [PaycomController::class,'index'])->name('pay');
});
