<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\countery;
use Illuminate\Http\Request;
use App\Http\Requests\counteryRequest;
use App\Http\Resources\counteryResource; 
class CounteryController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return counteryResource::collection(countery::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(counteryRequest $request)
    {
        $countery=countery::create($request->validated());
        return new counteryResource($countery);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\countery  $countery
     * @return \Illuminate\Http\Response
     */
    public function show(countery $countery)
    {
        return new counteryResource($countery);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\countery  $countery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, countery $countery)
    {
        $countery->update($request->validated());
        return new counteryResource($countery);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\countery  $countery
     * @return \Illuminate\Http\Response
     */
    public function destroy(countery $countery)
    {
        $countery->delete();
        return response()->nocontent();
    }

}
