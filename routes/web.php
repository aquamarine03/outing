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
Route::get("Posts/", "PostsController@index");
//create
Route::get("Posts/create", "PostsController@create");
//show
Route::get("Posts/{id}", "PostsController@show");
//store
Route::post("Posts/store", "PostsController@store");
//edit
Route::get("Posts/{id}/edit", "PostsController@edit");
//update
Route::put("Posts/{id}", "PostsController@update");
//destroy
Route::delete("Posts/{id}", "PostsController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("UserRoles/", "UserRolesController@index");
//create
Route::get("UserRoles/create", "UserRolesController@create");
//show
Route::get("UserRoles/{id}", "UserRolesController@show");
//store
Route::post("UserRoles/store", "UserRolesController@store");
//edit
Route::get("UserRoles/{id}/edit", "UserRolesController@edit");
//update
Route::put("UserRoles/{id}", "UserRolesController@update");
//destroy
Route::delete("UserRoles/{id}", "UserRolesController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("UserDetails/", "UserDetailsController@index");
//create
Route::get("UserDetails/create", "UserDetailsController@create");
//show
Route::get("UserDetails/{id}", "UserDetailsController@show");
//store
Route::post("UserDetails/store", "UserDetailsController@store");
//edit
Route::get("UserDetails/{id}/edit", "UserDetailsController@edit");
//update
Route::put("UserDetails/{id}", "UserDetailsController@update");
//destroy
Route::delete("UserDetails/{id}", "UserDetailsController@destroy");
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
