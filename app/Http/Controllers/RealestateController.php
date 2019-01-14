<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RealestateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $realestates = \App\Realestate::with('realestateType','City','Owner')->paginate();
    return view('realestates/index', ['realestates' => $realestates]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['realestate_types'] = \App\RealestateType::all();
        $data ['cities'] = \App\City::all();
        $data['owners'] = \App\Owner::all();
        $data['land_registers'] = \App\LandRegister::all();
        return view('realestates/create',['data'=>$data]);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->input();
        \App\Realestate::create($data);
        return redirect()-> action('RealestateController@index');
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
        \App\Realestate::destroy($id);
        return redirect()->action('RealestateController@index');
    }
}
