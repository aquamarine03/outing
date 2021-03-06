<?php
use Illuminate\Http\Response;

//default
Route::get("/", function () {
    return view("welcome");
});

//=======================================================================
//index
Route::get("users/", "UsersController@index");
//create
Route::get("users/create", "UsersController@create");
//show
Route::get("users/{id}", "UsersController@show");
//store
Route::post("users/store", "UsersController@store");
//edit
Route::get("users/{id}/edit", "UsersController@edit");
//update
Route::put("users/{id}", "UsersController@update");
//destroy
Route::delete("users/{id}", "UsersController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("posts/", "PostsController@index");
//create
Route::get("posts/create", "PostsController@create");
//show
Route::get("posts/{id}", "PostsController@show");
//store
Route::post("posts/store", "PostsController@store");
//edit
Route::get("posts/{id}/edit", "PostsController@edit");
//update
Route::put("posts/{id}", "PostsController@update");
//destroy
Route::delete("posts/{id}", "PostsController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("userRoles/", "UserRolesController@index");
//create
Route::get("userRoles/create", "UserRolesController@create");
//show
Route::get("userRoles/{id}", "UserRolesController@show");
//store
Route::post("userRoles/store", "UserRolesController@store");
//edit
Route::get("userRoles/{id}/edit", "UserRolesController@edit");
//update
Route::put("userRoles/{id}", "UserRolesController@update");
//destroy
Route::delete("userRoles/{id}", "UserRolesController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("userDetails/", "UserDetailsController@index");
//create
Route::get("userDetails/create", "UserDetailsController@create");
//show
Route::get("userDetails/{id}", "UserDetailsController@show");
//store
Route::post("userDetails/store", "UserDetailsController@store");
//edit
Route::get("userDetails/{id}/edit", "UserDetailsController@edit");
//update
Route::put("userDetails/{id}", "UserDetailsController@update");
//destroy
Route::delete("userDetails/{id}", "UserDetailsController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("likes/", "LikesController@index");
//create
Route::get("likes/create", "LikesController@create");
//show
Route::get("likes/{id}", "LikesController@show");
//store
Route::post("likes/store", "LikesController@store");
//edit
Route::get("likes/{id}/edit", "LikesController@edit");
//update
Route::put("likes/{id}", "LikesController@update");
//destroy
Route::delete("likes/{id}", "LikesController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("places/", "PlacesController@index");
//create
Route::get("places/create", "PlacesController@create");
//show
Route::get("places/{id}", "PlacesController@show");
//store
Route::post("places/store", "PlacesController@store");
//edit
Route::get("places/{id}/edit", "PlacesController@edit");
//update
Route::put("places/{id}", "PlacesController@update");
//destroy
Route::delete("places/{id}", "PlacesController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("wishes/", "WishesController@index");
//create
Route::get("wishes/create", "WishesController@create");
//show
Route::get("wishes/{id}", "WishesController@show");
//store
Route::post("wishes/store", "WishesController@store");
//edit
Route::get("wishes/{id}/edit", "WishesController@edit");
//update
Route::put("wishes/{id}", "WishesController@update");
//destroy
Route::delete("wishes/{id}", "WishesController@destroy");
//=======================================================================
