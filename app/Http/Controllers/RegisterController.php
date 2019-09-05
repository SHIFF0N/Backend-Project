<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\RegisterModel;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return RegisterModel::get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form = $request->all();
        $form['password'] = base64_encode($form['password'] );



        $data = new RegisterModel();
        $data->fill($form);
        $save = $data->save();
        if($save) return'RegisterModel';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return RegisterModel::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
        $form = $request->all();
        $form['password'] = base64_encode($form['password'] );

        $data = RegisterModel::find($id);
        $data->fill($request->all());
        $save = $data->save();
        if($save) return 'update register';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = RegisterModel::find($id);
        $data->status_id = 3 ;
        $save = $data->save();
        if($save) return 'delete register';
    }
}



