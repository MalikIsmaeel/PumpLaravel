<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\tables;
use Illuminate\Http\Request;
use App\Http\Requests\TablesRequest;
use App\Http\Resources\TablesResource; 

class TablesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TablesResource::collection(Tables::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TablesRequest $request)
    {
        $tables=Tables::create($request->validated());
        return new TablesResource($tables);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tables  $tables
     * @return \Illuminate\Http\Response
     */
    public function show(tables $tables)
    {
        return new TablesResource($tables);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tables  $tables
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tables $tables)
    {
        $tables->update($request->validated());
        return new TablesResource($tables);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tables  $tables
     * @return \Illuminate\Http\Response
     */
    public function destroy(tables $tables)
    {
        $tables->delete();
        return response()->nocontent();
    }
}
