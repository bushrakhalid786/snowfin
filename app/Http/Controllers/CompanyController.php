<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function edit(Company $company)
    {
        //return $company;
        //return view('company.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {

       
        $company->update($request->all());
        if($request->hasFile('logo')){
           $fileName = pathinfo($request->logo->getClientOriginalName(), PATHINFO_FILENAME);         
           $fileExtension = $request->file('logo')->getClientOriginalExtension();
           $fileNameToStore = sprintf('%s%s%s%s', $fileName, time(),'.',$fileExtension);
           $path = $request->file('logo')->storeAs('public/logo', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg'; 
        }
               
        
        $company->logo = $fileNameToStore;
            $recordUpdate = $company->update();
            if ($recordUpdate){
                $success = true;
                $message = 'Record Updated';
                $code = 200;
            } else {
                $success = false;
                $message = 'Error';
                $code = 422;
            }
            return response()->json(['data' => $company, 'success' => $success, 'message' => $message], $code);
        
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
