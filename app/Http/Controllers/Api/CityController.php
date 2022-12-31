<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\city;
use Illuminate\Http\Request;
use App\Http\Requests\cityRequest;
use App\Http\Resources\cityResource; 
class cityController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return cityResource::collection(city::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(cityRequest $request)
    {
        $city=city::create($request->validated());
        return new cityResource($city);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\city  $city
     * @return \Illuminate\Http\Response
     */
    public function show(city $city)
    {
        return new cityResource($city);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\city  $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, city $city)
    {
        $city->update($request->validated());
        return new cityResource($city);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\city  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy(city $city)
    {
        $city->delete();
        return response()->nocontent();
    }

}
