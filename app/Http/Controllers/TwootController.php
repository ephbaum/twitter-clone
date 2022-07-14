<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTwootRequest;
use App\Http\Requests\UpdateTwootRequest;
use App\Models\Twoot;

class TwootController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTwootRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTwootRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Twoot  $twoot
     * @return \Illuminate\Http\Response
     */
    public function show(Twoot $twoot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTwootRequest  $request
     * @param  \App\Models\Twoot  $twoot
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTwootRequest $request, Twoot $twoot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Twoot  $twoot
     * @return \Illuminate\Http\Response
     */
    public function destroy(Twoot $twoot)
    {
        //
    }
}
