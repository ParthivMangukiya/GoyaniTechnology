<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix'=>'report','middleware' => ['config']],function(){
    Route::post('/roughPayment','PaymentReportController@getRoughPaymentData');
    Route::post('/polishPayment','PaymentReportController@getPolishPaymentData');
    Route::post('/roughReceipt','ReceiptReportController@getRoughReceiptData');
    Route::post('/polishReceipt','ReceiptReportController@getPolishReceiptData');
    Route::post('/roughStock','StockReportController@getRoughStockData');
    Route::post('/polishStock','StockReportController@getPolishStockData');
    Route::post('/shapeStock','StockReportController@getShapeStockData');
    Route::post('/pendingKapanStock','StockReportController@getPendingKapanStockData');
    Route::post('/kapanStock','StockReportController@getKapanStockData');
});