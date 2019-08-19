<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
 */
$api = app('Dingo\Api\Routing\Router');

$api->version('v1', [
    'namespace' => 'App\Http\Controllers\Api\V1'
], function ($api) {
    // create token
    $api->post('auth', [
        'as' => 'authorizations.store',
        'uses' => 'AuthController@store',
    ]);

    // login
    $api->post('login', [
        'as' => 'authorizations.login',
        'uses' => 'AuthController@login',
    ]);

    // register
    $api->post('register', [
        'as' => 'authorizations.register',
        'uses' => 'AuthController@register',
    ]);

    // refresh jwt token
    $api->put('authorizations/current', [
        'as' => 'authorizations.update',
        'uses' => 'AuthController@update',
    ]);
    //PRODUCTS
        //product list
        $api->get('product', [
            'as' => 'product.index',
            'uses' => 'ProductController@index',
        ]);
        
        //product list by id
        $api->get('product/{id}', [
            'as' => 'product.show',
            'uses' => 'ProductController@productShow',
        ]);

        //product comment
        $api->post('product', [
            'as' => 'product.comment',
            'uses' => 'ProductController@productComment',
        ]);


       //CATEGORI
        //categori list
        $api->get('category', [
            'as' => 'category.index',
            'uses' => 'CategoryController@index',
        ]);
        // show categori by id
        $api->get('category/{id}', [
            'as' => 'category.show',
            'uses' => 'CategoryController@categoriShow',
        ]);

        //WISHLIST
        //show wishlist
        $api->get('wishlist', [
            'as' => 'wishlist.index',
            'uses' => 'WishlistController@index',
        ]);
        // wishlist by id
        $api->get('wishlist/{id}', [
            'as' => 'wishlist.show',
            'uses' => 'WishlistController@wishlistShow',
        ]);
        // destroy wishlist by id
        $api->delete('wishlist/{id}', [
            'as' => 'wishlist.destroy',
            'uses' => 'WishlistController@wishlistDestroy',
        ]);
        // adding wishlist
        $api->post('wishlist', [
            'as' => 'wishlist.store',
            'uses' => 'WishlistController@wishlistAdd',
        ]);

        // show list comment
        $api->get('comment', [
            'as' => 'comment.index',
            'uses' => 'ProductController@listComment',
        ]);
        
         // adding comment
         $api->post('comment/add', [
            'as' => 'comment.store',
            'uses' => 'ProductController@storeComment',
        ]);

        // updating comment
        $api->put('comment/update/{id}', [
            'as' => 'comment.update',
            'uses' => 'ProductController@updateComment',
        ]);

        // deleting comment
        $api->delete('comment/delete/{id}', [
            'as' => 'comment.destroy',
            'uses' => 'ProductController@deleteComment',
        ]);

        

    // need authentication
    $api->group(['middleware' => 'api.auth'], function ($api) {
        // logout
        $api->delete('logout', [
            'as' => 'authorizations.logout',
            'uses' => 'AuthController@destroy',
        ]);
        $api->delete('authorizations/current', [
            'as' => 'authorizations.logout',
            'uses' => 'AuthController@destroy',
        ]);

        // userShow
        $api->get('user', [
            'as' => 'user.show',
            'uses' => 'UserController@userShow',
        ]);

        // update profile
        $api->put('user/profile', [
            'as' => 'user.profile.update',
            'uses' => 'UserController@updateProfile',
        ]);

        // update my password
        $api->put('user/password', [
            'as' => 'user.password.update',
            'uses' => 'UserController@updatePassword',
        ]);

        //USER
        //user list
        $api->get('users', [
            'as' => 'users.index',
            'uses' => 'UserController@index',
        ]);
        // User add
        $api->post('users', [
            'as' => 'users.store',
            'uses' => 'UserController@store',
        ]);
        // user detail
        $api->get('users/{id}', [
            'as' => 'users.show',
            'uses' => 'UserController@show',
        ]);
        //user update
        $api->put('users/{id}', [
            'as' => 'users.update',
            'uses' => 'UserController@update',
        ]);
        // user delete
        $api->delete('users/{id}', [
            'as' => 'users.destroy',
            'uses' => 'UserController@destroy',
        ]);

        
        // POST
        // post list
        $api->get('posts', [
            'as' => 'posts.index',
            'uses' => 'PostController@index',
        ]);
        // post detail
        $api->get('posts/{id}', [
            'as' => 'posts.show',
            'uses' => 'PostController@show',
        ]);
        // user's posts index
        $api->get('user/posts', [
            'as' => 'user.posts.index',
            'uses' => 'PostController@userIndex',
        ]);
        // create a post
        $api->post('posts', [
            'as' => 'posts.store',
            'uses' => 'PostController@store',
        ]);
        // update a post
        $api->put('posts/{id}', [
            'as' => 'posts.update',
            'uses' => 'PostController@update',
        ]);
        // update part of a post
        $api->patch('posts/{id}', [
            'as' => 'posts.patch',
            'uses' => 'PostController@patch',
        ]);
        // delete a post
        $api->delete('posts/{id}', [
            'as' => 'posts.destroy',
            'uses' => 'PostController@destroy',
        ]);
        
    });
});