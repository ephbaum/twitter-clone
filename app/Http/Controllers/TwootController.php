<?php

namespace App\Http\Controllers;

use App\Events\Twooted;
use App\Http\Requests\StoreTwootRequest;
use App\Http\Requests\UpdateTwootRequest;
use App\Models\Twoot;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreTwootRequest $request): RedirectResponse
    {
        $twoot = new Twoot([
            'twoot_body' => $request->get('twoot_body'),
            'user_id' => $request->get('user_id')
        ]);

        $twoot->save();

        Twooted::dispatch($twoot);

        return back();
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
     * @todo improve error handling and add tests.
     *
     * @param \Illuminate\Http\Request $request the request
     * @param int $id the id of the twoot to delete
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, int $id)
    {
	    $twoot = Twoot::where('id', $id)->firstOrFail();

	    if ($request->user()->cannot('delete', $twoot)) {
		abort(403);
	    }

	    if (! $twoot->delete()) {
		    return abort(500);
	    }

	    if (! $twoot->save()) {
		    return abort(500);
	    }

	    return back();

    }

}
