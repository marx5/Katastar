<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CountyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $counties = \App\County::with('continent')->paginate();
    return view('counties/index', ['counties' => $counties]);
    }

    /*    $cities = \App\City::with('country')->paginate();
    return view('cities/index', ['cities' => $cities]);*/ 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $continents = \App\Continent::all();
        return view('counties/create', ['continents'=>$continents]);
    }
    
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'continent_id' => 'required',
            'county_name' => 'required|max:255'
            
        ]);
    
        if ($validator->fails()) {
            return redirect()->action('CountyController@create')
                ->withErrors($validator);
        }
    
        $data = $request->input();
        \App\County::create($data);
        return redirect()-> action('CountyController@index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \App\County::destroy($id);
        return redirect()->action('CountyController@index');
    }
  
}
