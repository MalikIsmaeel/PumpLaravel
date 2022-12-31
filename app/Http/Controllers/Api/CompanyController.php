<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\company;
use Illuminate\Http\Request;
use App\Http\Requests\CompanyRequest;
use App\Http\Resources\CompanyResource; 
class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return CompanyResource::collection(company::all());

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyRequest $request)
    {
        $company=company::create($request->validated());
        return new companyResource($company);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(company $company)
    {
        return new companyResource($company);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyRequest $request, company $company)
    {
        $company->update($request->validated());
        return new companyResource($company);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(company $company)
    {
        $company->delete();
        return response()->nocontent();
    }
}
