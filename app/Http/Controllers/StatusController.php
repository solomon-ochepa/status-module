<?php

namespace Modules\Status\app\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Status\app\Models\Status;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('status::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('status::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param Status $status
     * @return Renderable
     */
    public function show(Status $status)
    {
        return view('status::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param Status $status
     * @return Renderable
     */
    public function edit(Status $status)
    {
        return view('status::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param Status $status
     * @return Renderable
     */
    public function update(Request $request, Status $status)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param Status $status
     * @return Renderable
     */
    public function destroy(Status $status)
    {
        //
    }
}
