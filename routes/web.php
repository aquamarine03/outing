<?php
use Illuminate\Http\Response;

//default
Route::get("/", function () {
    return view("welcome");
});

//=======================================================================
//index
Route::get("Users/", "UsersController@index");
//create
Route::get("Users/create", "UsersController@create");
//show
Route::get("Users/{id}", "UsersController@show");
//store
Route::post("Users/store", "UsersController@store");
//edit
Route::get("Users/{id}/edit", "UsersController@edit");
//update
Route::put("Users/{id}", "UsersController@update");
//destroy
Route::delete("Users/{id}", "UsersController@destroy");
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
Route::get("Wishs/", "WishsController@index");
//create
Route::get("Wishs/create", "WishsController@create");
//show
Route::get("Wishs/{id}", "WishsController@show");
//store
Route::post("Wishs/store", "WishsController@store");
//edit
Route::get("Wishs/{id}/edit", "WishsController@edit");
//update
Route::put("Wishs/{id}", "WishsController@update");
//destroy
Route::delete("Wishs/{id}", "WishsController@destroy");
//=======================================================================
