<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RealestateTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $realestate_types = \App\RealestateType::paginate();
    return view('realestatetypes/index', ['realestatetypes' => $realestate_types]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('realestatetypes/create');
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
            'realestate_type_name' => 'required|max:255'
        ]);
    
        if ($validator->fails()) {
            return redirect()->action('RealestateTypeController@create')
                ->withErrors($validator);
        }*/
        $data = $request->input();
        \App\RealestateType::create($data);
        return redirect()-> action('RealestateTypeController@index');
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
        \App\RealestateType::destroy($id);
        return redirect()->action('RealestateTypeController@index');
    }
}
