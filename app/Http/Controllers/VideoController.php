<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Role;
use App\Models\Video;
use App\Http\Requests\StoreVideoRequest;
use App\Http\Requests\UpdateVideoRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->role->position === "teacher") {
            $videos = Video::where('user_id', '=', Auth::user()->id)->get();
        } else {
            $videos = Video::all();
        }

        return view('backend.video.index', [
            'videos' => $videos,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', Video::class);

        if (Auth::user()->role->position === "teacher") {
            $courses = Course::where('user_id', '=', Auth::user()->id)->get();
        } else {
            $courses = Course::all();
        }
        return view('backend.video.create', [
            'courses' => $courses,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVideoRequest $request)
    {
        $this->authorize('create', Video::class);

        if ($request->hasFile('thumbnail')) {
            $path = $request->file('thumbnail')->store('video/thumbnail', 'public');
        }
        if ($request->hasFile('video')) {
            $video = $request->file('video')->store('video/file', 'public');
        }

        Video::create([
            'name' => $request->name,
            'course_id' => $request->course_id,
            'user_id' => $request->user_id,
            'min' => $request->min,
            'sec' => $request->sec,
            'thumbnail' => $path,
            'video' => $video,
            'status' => $request->status,
        ]);

        return redirect()->route('videos.index')->with('message', "Siz videoni muvaffaqqiyatli tarzda qo'shdingiz!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Video $video)
    {
        $this->authorize('view', $video);

        return view('backend.video.show', [
            'video' => $video,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Video $video)
    {
        $this->authorize('update', $video);

        if (Auth::user()->role->position === "teacher") {
            $courses = Course::where('user_id', '=', Auth::user()->id)->get();
        } else {
            $courses = Course::all();
        }
        return view('backend.video.edit', [
            'video' => $video,
            'courses' => $courses,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVideoRequest $request, Video $video)
    {
        $this->authorize('update', $video);

        if ($request->hasFile('thumbnail')) {
            if (!empty($video->thumbnail)) {
                Storage::delete($video->thumbnail);
            }
            $path = $request->file('thumbnail')->store('video/thumbnail', 'public');
        } else {
            $path = $video->thumbnail;
        }

        if ($request->hasFile('video')) {
            if (!empty($video->video)) {
                Storage::delete($video->video);
            }
            $file = $request->file('video')->store('video/file', 'public');
        } else {
            $file = $video->video;
        }

        $video->update([
            'name' => $request->name,
            'course_id' => $request->course_id,
            'user_id' => $request->user_id,
            'min' => $request->min,
            'sec' => $request->sec,
            'thumbnail' => $path,
            'video' => $file,
            'status' => $request->status,
        ]);

        return redirect()->route('videos.index')->with('message', "Siz videoni muvaffaqqiyatli tarzda tahrirladingiz!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Video $video)
    {
        $this->authorize('delete', $video);

        if (!empty($video->thumbnail) && !empty($video->video)) {
            Storage::delete($video->thumbnail);
            Storage::delete($video->video);
            $video->delete();
        }

        return redirect()->route('videos.index')->with('message', "Siz videoni muvaffaqqiyatli tarzda o'chirdingiz!");
    }
}
