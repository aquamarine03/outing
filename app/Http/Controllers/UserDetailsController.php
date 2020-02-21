<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\UserDetail;
    
    //=======================================================================
    class UserDetailsController extends Controller
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
                $userDetails = UserDetail::where("id", "LIKE", "%$keyword%")->orWhere("id", "LIKE", "%$keyword%")->orWhere("user_id", "LIKE", "%$keyword%")->orWhere("address", "LIKE", "%$keyword%")->orWhere("gender", "LIKE", "%$keyword%")->orWhere("age", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                $userDetails = UserDetail::paginate($perPage);
                
            }          
            return view("userDetails.index", compact("userDetails"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("userDetails.create");
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
				"user_id" => "required|integer", //integer('user_id')
				"address" => "required|max:100", //string('address',100)
				"gender" => "nullable|max:255", //string('gender',255)->nullable()
				"age" => "nullable|integer", //integer('age')->nullable()

            ]);
            $requestData = $request->all();
            
            UserDetail::create($requestData);
    
            return redirect("userDetails")->with("flash_message", "UserDetails added!");
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
            $userDetails = UserDetail::findOrFail($id);
    
            return view("userDetails.show", compact("userDetails"));
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
            $userDetails = UserDetail::findOrFail($id);
    
            return view("userDetails.edit", compact("userDetails"));
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
				"user_id" => "required|integer", //integer('user_id')
				"address" => "required|max:100", //string('address',100)
				"gender" => "nullable|max:255", //string('gender',255)->nullable()
				"age" => "nullable|integer", //integer('age')->nullable()

            ]);
            $requestData = $request->all();
            
            $userDetails = UserDetail::findOrFail($id);
            $userDetails->update($requestData);
    
            return redirect("userDetails")->with("flash_message", "UserDetails updated!");
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
            UserDetail::destroy($id);
    
            return redirect("userDetails")->with("flash_message", "UserDetails deleted!");
        }
    }
    //=======================================================================
    
    