<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Auth::routes();

Route::get('/', 'BlogPageController@index')->name('index');

Route::group(['prefix' => 'user', 'as' => 'user.'] , function () {

    Route::group(['prefix' => '/', 'as' => '/.'], function () {

        Route::get('blog', 'BlogPageController@blog_starting_home_page')->name('blog_starting_home_page');

        Route::get('blogposts', 'BlogPageController@blog_starting_home_allpost')->name('blog_starting_home_allpost');

        Route::get('blogabout', 'BlogPageController@blog_starting_home_about_page')->name('blog_starting_home_about_page');

        Route::get('contact', 'BlogPageController@blog_starting_home_contact_page')->name('blog_starting_home_contact_page');

        Route::get('service', 'BlogPageController@blog_starting_home_service_page')->name('blog_starting_home_service_page');

        Route::get('Team', 'BlogPageController@blog_starting_home_team_page')->name('blog_starting_home_team_page');

        Route::get('testimonial', 'BlogPageController@blog_starting_home_testimonial_page')->name('blog_starting_home_testimonial_page');

        Route::get('quote', 'BlogPageController@blog_starting_home_quote_page')->name('blog_starting_home_quote_page');

        Route::get('feature', 'BlogPageController@blog_starting_home_feature_page')->name('blog_starting_home_feature_page');

        Route::get('{post}/view', 'BlogPageController@blog_starting_home_post_view')->name('blog_starting_home_post_view');

        Route::post('/comment/{post}', 'CommentController@store')->name('comment.store');

        Route::post('commentRpl/{commentpost}', 'CommmentReplyController@store')->name('reply.store');

        Route::get('search', 'BlogPageController@search')->name('search');

    });
});

Auth::routes();
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'admin']], function () {


    Route::group(['prefix' => 'categories', 'as' => 'categories.'], function () {

        Route::get('/', 'CategoryController@index')->name('index');

        Route::get('create', 'CategoryController@create')->name('create');

        Route::post('/', 'CategoryController@store')->name('store');

        Route::get('{category}/edit', 'CategoryController@edit')->name('edit');

        Route::put('{category}', 'CategoryController@update')->name('update');

        Route::delete('{category}/delete', 'CategoryController@destroy')->name('destroy');
    });

    Route::group(['prefix' => 'posts', 'as' => 'posts.'], function () {

        Route::get('/', 'PostController@index')->name('index');

        Route::get('create', 'PostController@create')->name('create');

        Route::post('/', 'PostController@store')->name('store');

        Route::get('{post}/edit', 'PostController@edit')->name('edit');

        Route::put('{post}', 'PostController@update')->name('update');

        Route::delete('{post}/delete', 'PostController@destroy')->name('delete');
    });

    Route::group(['prefix' => 'tags', 'as' => 'tags.'], function () {

        Route::get('/', 'TagController@index')->name('index');

        Route::get('create', 'TagController@create')->name('create');

        Route::post('/', 'TagController@store')->name('store');

        Route::get('{tag}/edit', 'TagController@edit')->name('edit');

        Route::put('{tag}', 'TagController@update')->name('update');

        Route::delete('{tag}/delete', 'TagController@destroy')->name('destroy');
    });
});
