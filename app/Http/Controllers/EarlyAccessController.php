<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEarlyAccessRequest;
use App\Models\EarlyAccess;

class EarlyAccessController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEarlyAccessRequest $request)
    {
        EarlyAccess::create($request->validated());

        return back()->with('early_access_status', 'Thank you! We will reach out shortly.');
    }
}