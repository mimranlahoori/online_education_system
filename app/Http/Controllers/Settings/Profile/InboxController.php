<?php

namespace App\Http\Controllers\Settings\Profile;

use App\Http\Controllers\Controller;
use App\Models\Settings\Profile\Inbox;
use Illuminate\Http\Request;

class InboxController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('settings.profile.inbox.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Inbox $inbox)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inbox $inbox)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inbox $inbox)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inbox $inbox)
    {
        //
    }
}
