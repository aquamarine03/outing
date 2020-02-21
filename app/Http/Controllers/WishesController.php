<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\Wish;
    
    //=======================================================================
    class WishesController extends Controller
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
                $wishes = Wish::where("id", "LIKE", "%$keyword%")->orWhere("id", "LIKE", "%$keyword%")->orWhere("user_id", "LIKE", "%$keyword%")->orWhere("place_id", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                $wishes = Wish::paginate($perPage);
                
            }          
            return view("wishes.index", compact("wishes"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("wishes.create");
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
    
            return redirect("wishes")->with("flash_message", "Wishes added!");
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
            $wishes = Wish::findOrFail($id);
    
            return view("wishes.show", compact("wishes"));
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
            $wishes = Wish::findOrFail($id);
    
            return view("wishes.edit", compact("wishes"));
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
            
            $wishes = Wish::findOrFail($id);
            $wishes->update($requestData);
    
            return redirect("wishes")->with("flash_message", "Wishes updated!");
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
    
            return redirect("wishes")->with("flash_message", "Wishes deleted!");
        }
    }
    //=======================================================================
    
    