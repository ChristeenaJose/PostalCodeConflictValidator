<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Validator;

class ValidatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        request()->validate([
            "txtPostcode" => [
                    "required",             
                    'regex:/[0-9]{5}|[0-9]{4}\*$|[0-9]{3}\*$|[0-9]{2}\*$|[0-9]{1}\*$/'            
                            ]
        ]);

        $Postcode = request('txtPostcode');

        if (strpos($Postcode, '*'))
            {
                $Postcode = str_replace('*', '', $Postcode);
            }

        $dbPostConflicts = Validator::select(
            "validators.id", 
            "validators.postCode",
            "validators.salesPersonId", 
            "sales_person_details.name as salesPersonName"

        )
        ->where('validators.postCode', 'REGEXP', $Postcode .'\d*$' )
        ->leftJoin("sales_person_details", "sales_person_details.id", "=", "validators.salesPersonId")
        ->get();


        $data = [
            "dbPostConflicts" => $dbPostConflicts,
            "searchQry" => request('txtPostcode')
        ];

        return view('welcome', $data);
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
        //
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
