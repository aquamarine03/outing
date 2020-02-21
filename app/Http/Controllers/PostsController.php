<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\Post;
    
    //=======================================================================
    class PostsController extends Controller
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
                $Posts = Post::where("id", "LIKE", "%$keyword%")->orWhere("id", "LIKE", "%$keyword%")->orWhere("user_id", "LIKE", "%$keyword%")->orWhere("place_id", "LIKE", "%$keyword%")->orWhere("rating", "LIKE", "%$keyword%")->orWhere("comment", "LIKE", "%$keyword%")->orWhere("post_img", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                $Posts = Post::paginate($perPage);
                
            }          
            return view("Posts.index", compact("Posts"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("Posts.create");
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
				"place_id" => "required|integer", //integer('place_id')
				"rating" => "required|max:255", //string('rating',255)
				"comment" => "required|max:255", //string('comment',255)
				"post_img" => "nullable|max:255", //string('post_img',255)->nullable()

            ]);
            $requestData = $request->all();
            
            Post::create($requestData);
    
            return redirect("Posts")->with("flash_message", "Posts added!");
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
            $Posts = Post::findOrFail($id);
    
            return view("Posts.show", compact("Posts"));
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
            $Posts = Post::findOrFail($id);
    
            return view("Posts.edit", compact("Posts"));
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
				"place_id" => "required|integer", //integer('place_id')
				"rating" => "required|max:255", //string('rating',255)
				"comment" => "required|max:255", //string('comment',255)
				"post_img" => "nullable|max:255", //string('post_img',255)->nullable()

            ]);
            $requestData = $request->all();
            
            $Posts = Post::findOrFail($id);
            $Posts->update($requestData);
    
            return redirect("Posts")->with("flash_message", "Posts updated!");
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
            Post::destroy($id);
    
            return redirect("Posts")->with("flash_message", "Posts deleted!");
        }
    }
    //=======================================================================
    
    