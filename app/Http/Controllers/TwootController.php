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
        return Twoot::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTwootRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTwootRequest $request)
    {
        $twoot = new Twoot([
            'twoot_body' => $request->get('twoot_body'),
            'user_id' => $request->get('user_id')
        ]);

        $twoot->save();

        return new \Illuminate\Http\Response($twoot->created_at);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Twoot
     */
    public function show(int $id): Twoot
    {
        return Twoot::find($id);
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
