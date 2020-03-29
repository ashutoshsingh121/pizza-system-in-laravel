
<?php



Route::get('/', 'PagesController@getHome')->name('home');

Route::redirect('/home', '/home');

Route::get('/contact', 'PagesController@getContact')->name('contact');

Route::view('/about', 'pages.about')->name('about');

Route::resource('posts','PostController');

Route::get('/category/{category}','PagesController@category');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/dashboard/{name}','PagesController@dashboard')->name('dashboard');

Route::get('/offers/{offers}','PagesController@offers')->name('offers');


?>

