<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth; 


use Illuminate\Http\Request;


use App\Http\Requests;

use App\Corporatee;

use App\User;



class CorporateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('guest');
        
    }

    public function index()
    {
        $id=Auth::user()->id;
        echo $id;

    return view('corporate.create');
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

        
            $this->validate($request, array(
            'company' => 'required|max:255',
            'designation'  => 'required|max:255',
            'qualification'=>'required',
            'college'  => 'required'
            ));


        $corporate=new Corporatee;


        $corporate->company=$request->company;


        $corporate->designation=$request->designation;

        
        $corporate->qualification=$request->qualification;

        
       $corporate->college=$request->college;



        //$corporate->users_id=Auth::user()->id;

        $corporate->save();


        
        
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
        //
    }
}
