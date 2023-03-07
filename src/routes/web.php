<?php

//Route::get('/blogable',function(){
//   return 'ok '.config('blogable.prefix');
//});


Route::group(['prefix'=>config('blogable.prefix')],function(){
    Route::get('/',[\Mshukurlu\Blogable\Http\Controllers\Frontend\IndexController::class,'index']);
});
