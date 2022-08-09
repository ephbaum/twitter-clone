<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoretagsRequest;
use App\Http\Requests\UpdatetagsRequest;
use App\Models\tags;

class TagsController extends Controller
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
     * @param  \App\Http\Requests\StoretagsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoretagsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tags  $tags
     * @return \Illuminate\Http\Response
     */
    public function show(tags $tags)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tags  $tags
     * @return \Illuminate\Http\Response
     */
    public function edit(tags $tags)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetagsRequest  $request
     * @param  \App\Models\tags  $tags
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatetagsRequest $request, tags $tags)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tags  $tags
     * @return \Illuminate\Http\Response
     */
    public function destroy(tags $tags)
    {
        //
    }
}
