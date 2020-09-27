<?php




// pages controller
Route::get('/post', 'BlogController@index')->name('blog');
Route::get('/Posts/{post}', 'BlogController@post');





// admin routes 
// if you use it with auth validation remove /admin from routes

		// Posts routes
    Route::resource('/admin/posts', 'PostController');
    Route::get('admin/posts/{id}/delete','PostController@destroy');

    Route::put('/admin/posts/{post}/publish', 'PostController@publish')->middleware('admin');










