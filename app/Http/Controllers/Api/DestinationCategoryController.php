<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDestinationCategoryRequest;
use App\Http\Resources\DestinationCategoryResource;
use App\Models\DestinationCategory;
use Illuminate\Http\Request;

class DestinationCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destinationCategories = DestinationCategory::all();
        return DestinationCategoryResource::collection($destinationCategories);
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
        $destinationCategories = DestinationCategories::create($request->all());
        return new DestinationCategoriesResource($destinationCategories);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DestinationCategory  $destinationCategory
     * @return \Illuminate\Http\Response
     */
    public function show(DestinationCategory $destinationCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DestinationCategory  $destinationCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(DestinationCategory $destinationCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DestinationCategory  $destinationCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DestinationCategory $destinationCategory)
    {
        $destinationCategories->update($request->all());

        return new DestinationResource($destinationCategories);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DestinationCategory  $destinationCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(DestinationCategory $destinationCategory)
    {
        $destinationCategory->delete();

        return response(null, 204);
    }
}
