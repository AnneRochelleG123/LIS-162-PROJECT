<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request as HttpRequest;
use App\Models\Request; // Your custom model

class RequestController extends Controller
{
    /**
     * Display a listing of the requests.
     */
    public function index()
    {
        $requests = Request::all();
        return view('request.index', compact('requests'));
    }

    /**
     * Show the form for creating a new request.
     */
    public function create()
    {
        return view('request.create');
    }

    /**
     * Store a newly created request in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|integer',
            'request_type' => 'required|string|max:50',
            'status' => 'required|string|max:50',
            'date_time_submitted' => 'required|date',
        ]);

        RequestModel::create($validated);

        return redirect()->route('requests.index')->with('success', 'Request created successfully.');
    }

    /**
     * Display the specified request.
     */
    public function show($id)
    {
        $request = RequestModel::findOrFail($id);
        return view('requests.show', compact('request'));
    }

    /**
     * Show the form for editing the specified request.
     */
    public function edit($id)
    {
        $request = RequestModel::findOrFail($id);
        return view('requests.edit', compact('request'));
    }

    /**
     * Update the specified request in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'user_id' => 'required|integer',
            'request_type' => 'required|string|max:50',
            'status' => 'required|string|max:50',
            'date_time_submitted' => 'required|date',
        ]);

        $existingRequest = RequestModel::findOrFail($id);
        $existingRequest->update($validated);

        return redirect()->route('requests.index')->with('success', 'Request updated successfully.');
    }

    /**
     * Remove the specified request from storage.
     */
    public function destroy($id)
    {
        $request = RequestModel::findOrFail($id);
        $request->delete();

        return redirect()->route('requests.index')->with('success', 'Request deleted successfully.');
    }
}
