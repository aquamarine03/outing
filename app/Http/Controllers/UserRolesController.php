<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\UserRole;
    
    //=======================================================================
    class UserRolesController extends Controller
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
                $userRoles = UserRole::where("id", "LIKE", "%$keyword%")->orWhere("id", "LIKE", "%$keyword%")->orWhere("role_name", "LIKE", "%$keyword%")->orWhere("user_id", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                $userRoles = UserRole::paginate($perPage);
                
            }          
            return view("userRoles.index", compact("userRoles"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("userRoles.create");
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
				"role_name" => "required|max:255", //string('role_name',255)
				"user_id" => "required|integer", //integer('user_id')

            ]);
            $requestData = $request->all();
            
            UserRole::create($requestData);
    
            return redirect("userRoles")->with("flash_message", "UserRoles added!");
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
            $userRoles = UserRole::findOrFail($id);
    
            return view("userRoles.show", compact("userRoles"));
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
            $userRoles = UserRole::findOrFail($id);
    
            return view("userRoles.edit", compact("userRoles"));
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
				"role_name" => "required|max:255", //string('role_name',255)
				"user_id" => "required|integer", //integer('user_id')

            ]);
            $requestData = $request->all();
            
            $userRoles = UserRole::findOrFail($id);
            $userRoles->update($requestData);
    
            return redirect("userRoles")->with("flash_message", "UserRoles updated!");
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
            UserRole::destroy($id);
    
            return redirect("userRoles")->with("flash_message", "UserRoles deleted!");
        }
    }
    //=======================================================================
    
    