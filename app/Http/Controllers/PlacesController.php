<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\Place;
    
    //=======================================================================
    class PlacesController extends Controller
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
                $Places = Place::where("id", "LIKE", "%$keyword%")->orWhere("id", "LIKE", "%$keyword%")->orWhere("place_name", "LIKE", "%$keyword%")->orWhere("place_address", "LIKE", "%$keyword%")->orWhere("place_img", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                $Places = Place::paginate($perPage);
                
            }          
            return view("Places.index", compact("Places"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("Places.create");
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
				"place_name" => "nullable|max:255", //string('place_name',255)->nullable()
				"place_address" => "nullable|max:255", //string('place_address',255)->nullable()
				"place_img" => "nullable|max:255", //string('place_img',255)->nullable()

            ]);
            $requestData = $request->all();
            
            Place::create($requestData);
    
            return redirect("Places")->with("flash_message", "Places added!");
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
            $Places = Place::findOrFail($id);
    
            return view("Places.show", compact("Places"));
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
            $Places = Place::findOrFail($id);
    
            return view("Places.edit", compact("Places"));
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
				"place_name" => "nullable|max:255", //string('place_name',255)->nullable()
				"place_address" => "nullable|max:255", //string('place_address',255)->nullable()
				"place_img" => "nullable|max:255", //string('place_img',255)->nullable()

            ]);
            $requestData = $request->all();
            
            $Places = Place::findOrFail($id);
            $Places->update($requestData);
    
            return redirect("Places")->with("flash_message", "Places updated!");
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
            Place::destroy($id);
    
            return redirect("Places")->with("flash_message", "Places deleted!");
        }
    }
    //=======================================================================
    
    