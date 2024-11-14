<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Http\Requests\StoreTopicRequest;
use App\Http\Requests\UpdateTopicRequest;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $topics = Topic::all();
        return view('admin.topic.index', compact('topics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.topic.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTopicRequest $request)
    {
           // Create a new topic using the validated data from the request
    $topic = Topic::create([
        'title' => $request->title,
        'description' => $request->description,
        'slug' => $request->slug,
        'status' => $request->status,
        'popular' => $request->has('popular') ? 1 : 0, 
    ]);

    // Redirect to the index page with a success message
    return redirect()->route('topics.index')->with('success', 'Topic created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Topic $topic)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Topic $topic)
    {
        return view('admin.topic.edit', compact('topic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTopicRequest $request, Topic $topic)
    {
        $topic->update([
            'title' => $request->title,
            'description' => $request->description,
            'slug' => $request->slug,
            'status' => $request->status,
            'popular' => $request->has('popular') ? 1 : 0, // Checkbox for popular
        ]);
    
        // Redirect to the index page with a success message
        return redirect()->route('topics.index')->with('success', 'Topic updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Topic $topic)
    {
        
    $topic->delete();
    return redirect()->route('topics.index')->with('success', 'Topic deleted successfully.');

    }
}
