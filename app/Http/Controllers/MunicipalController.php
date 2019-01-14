<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MunicipalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $municipals = \App\Municipal::with('county')->paginate();
        return view('municipals/index', ['municipals' => $municipals]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $counties = \App\County::all();
        return view('municipals/create',['counties'=>$counties]);
    }
    
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$validator = \Validator::make($request->all(), [
            'municipal_name' => 'required|max:255',
            'county_id' => 'required'
        ]);
    
        if ($validator->fails()) {
            return redirect()->action('MunicipalController@create')
                ->withErrors($validator);
        }*/
    
        $data = $request->input();
        \App\Municipal::create($data);
        return redirect()-> action('MunicipalController@index');
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
    \App\Municipal::destroy($id);
    return redirect()->action('MunicipalController@index');
}
    
}
