<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoretagsRequest;
use App\Http\Requests\UpdatetagsRequest;
use App\Models\Tags;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @param int $id
     * @return Application|Factory|View
     */
    public function index(Request $request, int $id): View|Factory|Application
    {
        $tag = Tags::where('id', $id)->firstOrFail();
        return view('dashboard', ['twoots' => $tag->twoots]);
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
