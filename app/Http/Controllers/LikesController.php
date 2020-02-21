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
                $likes = Like::where("id", "LIKE", "%$keyword%")->orWhere("id", "LIKE", "%$keyword%")->orWhere("user_id", "LIKE", "%$keyword%")->orWhere("post_id", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                $likes = Like::paginate($perPage);
                
            }          
            return view("likes.index", compact("likes"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("likes.create");
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
    
            return redirect("likes")->with("flash_message", "likes added!");
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
            $likes = Like::findOrFail($id);
    
            return view("likes.show", compact("likes"));
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
            $likes = Like::findOrFail($id);
    
            return view("likes.edit", compact("likes"));
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
            
            $likes = Like::findOrFail($id);
            $likes->update($requestData);
    
            return redirect("likes")->with("flash_message", "likes updated!");
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
    
            return redirect("likes")->with("flash_message", "likes deleted!");
        }
    }
    //=======================================================================
    
    