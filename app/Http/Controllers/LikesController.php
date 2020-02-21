<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\Like;
    
    //=======================================================================
    class LikesController extends Controller
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
                $Likes = Like::where("id", "LIKE", "%$keyword%")->orWhere("id", "LIKE", "%$keyword%")->orWhere("user_id", "LIKE", "%$keyword%")->orWhere("post_id", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                $Likes = Like::paginate($perPage);
                
            }          
            return view("Likes.index", compact("Likes"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("Likes.create");
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
				"post_id" => "nullable|integer", //integer('post_id')->nullable()

            ]);
            $requestData = $request->all();
            
            Like::create($requestData);
    
            return redirect("Likes")->with("flash_message", "Likes added!");
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
            $Likes = Like::findOrFail($id);
    
            return view("Likes.show", compact("Likes"));
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
            $Likes = Like::findOrFail($id);
    
            return view("Likes.edit", compact("Likes"));
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
				"post_id" => "nullable|integer", //integer('post_id')->nullable()

            ]);
            $requestData = $request->all();
            
            $Likes = Like::findOrFail($id);
            $Likes->update($requestData);
    
            return redirect("Likes")->with("flash_message", "Likes updated!");
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
            Like::destroy($id);
    
            return redirect("Likes")->with("flash_message", "Likes deleted!");
        }
    }
    //=======================================================================
    
    