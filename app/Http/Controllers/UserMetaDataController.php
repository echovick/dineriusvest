<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserMetaDataRequest;
use App\Http\Requests\UpdateUserMetaDataRequest;
use App\Models\UserMetaData;
use Illuminate\Support\Facades\Auth;

class UserMetaDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreUserMetaDataRequest $request)
    {
        try {
            $request->merge(['user_id' => Auth::id()]);

            UserMetaData::create($request->all());

            return redirect()->route('dashboard.index');
        } catch (\Exception $e) {
            return redirect()->route('dashboard.setup-account')->with("msg", "Could not successfully save user data: {$e->getMessage()}");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(UserMetaData $userMetaData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserMetaData $userMetaData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserMetaDataRequest $request, UserMetaData $userMetaData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserMetaData $userMetaData)
    {
        //
    }
}
