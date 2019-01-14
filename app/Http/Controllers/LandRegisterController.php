<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $landregisters = \App\LandRegister::with('city')->paginate();
    return view('land_registers/index', ['land_registers' => $landregisters]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   /* public function create()
{
    return view('land_registers/create');
}
*/
    public function create()
    {
        $cities = \App\City::all();
        return view('land_registers/create',['cities'=>$cities]);
    }
 /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
public function store(Request $request)
{
    $validator = \Validator::make($request->all(), [
        
        'city_id' => 'required',
        'name' => 'required|max:255'
        
    ]);

    if ($validator->fails()) {
        return redirect()->action('LandRegisterController@create')
            ->withErrors($validator);
    }
    $data = $request->input();
    \App\LandRegister::create($data);
    return redirect()->action('LandRegisterController@index');
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
        
        \App\LandRegister::destroy($id);
        return redirect()->action('LandRegisterController@index');

    }
}
