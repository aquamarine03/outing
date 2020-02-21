<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\Wish;
    
    //=======================================================================
    class WishsController extends Controller
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
                $Wishs = Wish::where("id", "LIKE", "%$keyword%")->orWhere("id", "LIKE", "%$keyword%")->orWhere("user_id", "LIKE", "%$keyword%")->orWhere("place_id", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                $Wishs = Wish::paginate($perPage);
                
            }          
            return view("Wishs.index", compact("Wishs"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("Wishs.create");
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

            ]);
            $requestData = $request->all();
            
            Wish::create($requestData);
    
            return redirect("Wishs")->with("flash_message", "Wishs added!");
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
            $Wishs = Wish::findOrFail($id);
    
            return view("Wishs.show", compact("Wishs"));
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
            $Wishs = Wish::findOrFail($id);
    
            return view("Wishs.edit", compact("Wishs"));
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

            ]);
            $requestData = $request->all();
            
            $Wishs = Wish::findOrFail($id);
            $Wishs->update($requestData);
    
            return redirect("Wishs")->with("flash_message", "Wishs updated!");
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
            Wish::destroy($id);
    
            return redirect("Wishs")->with("flash_message", "Wishs deleted!");
        }
    }
    //=======================================================================
    
    