<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Business;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dbBusiness = Business::Latest()->get();
        $data = [
            "message" => "",
            "dbBusiness" => $dbBusiness
        ];
        return view('Business.index', $data);
    }

    /**
     * Display a listing of the resource with Message.
     *
     * @return \Illuminate\Http\Response
     */
    public function showMessage($Msg)
    {

        $dbBusiness = Business::Latest()->get();
        $Message = [
            "AAS" => [
                "content" => "Business Added Sucesfully", 
                "flag" => "success"
            ],
            "ANAS" => [
                "content" => "Business Not Added Sucesfully", 
                "flag" => "Faild"
            ]
        ];
        if(!isset($Message[$Msg])){
            $Message[$Msg] = "";
        }
        $data = [
            "message" => $Message[$Msg],
            "dbBusiness" => $dbBusiness
        ];
        return view('Business.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Business.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rules = [
            'txtName' => 'required',
            'txt1' => 'numeric',
            'txt2' => 'numeric',
            'txt3' => 'numeric',
            'txt4' => 'numeric',
            'txt5' => 'numeric',
            'txt6' => 'numeric',
            'txt7' => 'numeric',
            'txt8' => 'numeric',
            'txt9' => 'numeric',
            'txt10' => 'numeric',
        ];
    
        $customMessages = [
            'required' => 'This field is required.',
            'numeric'  => 'Required a Numeric Number',
        ];
    
        $this->validate($request, $rules, $customMessages);

        $business = new Business();
        $business->name = request("txtName");
        $business->txt1 = request("txt1");
        $business->txt2 = request("txt2");
        $business->txt3 = request("txt3");
        $business->txt4 = request("txt4");
        $business->txt5 = request("txt5");
        $business->txt6 = request("txt6");
        $business->txt7 = request("txt7");
        $business->txt8 = request("txt8");
        $business->txt9 = request("txt9");
        $business->txt10 = request("txt10");

        if($business->save()){
            return redirect("/task2/Msg=AAS"); 
        }
        return redirect("/task2/Msg=ANAS");
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
