<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\User;
    
    //=======================================================================
    class UsersController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\View\View
         */
        public function index(Request $request)
        {
            $keyword = $request->get("search");
            $perPage = 25;
    
            if (!empty($keyword)) {
                $Users = User::where("id", "LIKE", "%$keyword%")->orWhere("id", "LIKE", "%$keyword%")->orWhere("name", "LIKE", "%$keyword%")->orWhere("email", "LIKE", "%$keyword%")->orWhere("password", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                $Users = User::paginate($perPage);
                
            }          
            return view("Users.index", compact("Users"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("Users.create");
        }
    
        /**
         * Store a newly created resource in storage.
         *
         * @param \Illuminate\Http\Request $request
         *
         * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
         */
        public function store(Request $request)
        {
            $this->validate($request, [
				"name" => "nullable|max:255", //string('name',255)->nullable()
				"email" => "required|max:255", //string('email',255)
				"password" => "required|max:255", //string('password',255)

            ]);
            $requestData = $request->all();
            
            User::create($requestData);
    
            return redirect("Users")->with("flash_message", "Users added!");
        }
    
        /**
         * Display the specified resource.
         *
         * @param  int  $id
         *
         * @return \Illuminate\View\View
         */
        public function show($id)
        {
            $Users = User::findOrFail($id);
    
            return view("Users.show", compact("Users"));
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         *
         * @return \Illuminate\View\View
         */
        public function edit($id)
        {
            $Users = User::findOrFail($id);
    
            return view("Users.edit", compact("Users"));
        }
    
        /**
         * Update the specified resource in storage.
         *
         * @param  int  $id
         * @param \Illuminate\Http\Request $request
         *
         * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
         */
        public function update(Request $request, $id)
        {
            $this->validate($request, [
				"name" => "nullable|max:255", //string('name',255)->nullable()
				"email" => "required|max:255", //string('email',255)
				"password" => "required|max:255", //string('password',255)

            ]);
            $requestData = $request->all();
            
            $Users = User::findOrFail($id);
            $Users->update($requestData);
    
            return redirect("Users")->with("flash_message", "Users updated!");
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         *
         * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
         */
        public function destroy($id)
        {
            User::destroy($id);
    
            return redirect("Users")->with("flash_message", "Users deleted!");
        }
    }
    //=======================================================================
    
    