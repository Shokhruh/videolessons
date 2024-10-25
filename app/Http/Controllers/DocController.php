<?php

namespace App\Http\Controllers;

use App\Models\Doc;
use App\Http\Requests\StoreDocRequest;
use App\Http\Requests\UpdateDocRequest;
use App\Models\Video;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DocController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->role->position === 'teacher') {
            $docs = Doc::where('user_id', '=', Auth::user()->id)->get();
        } else {
            $docs = Doc::all();
        }
        return view('backend.doc.index', [
            'docs' => $docs,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', Doc::class);

        if (Auth::user()->role->position === 'teacher') {
            $videos = Video::where('user_id', '=', Auth::user()->id)->get();
        } elseif(Auth::user()->role->position === 'developer') {
            $videos = Video::all();
        }
        return view('backend.doc.create', [
            'videos' => $videos,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDocRequest $request)
    {
        $this->authorize('create', Doc::class);

        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('doc', 'public');
        }

        Doc::create([
            'name' => $request->name,
            'user_id' => $request->user_id,
            'video_id' => $request->video_id,
            'file' => $path ?? '',
            'status' => $request->status,
        ]);

        return redirect()->route('docs.index')->with('message', "Siz hujjatni muvaffaqqiyatli tarzda qo'shdingiz!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Doc $doc)
    {
        $this->authorize('view', $doc);

        return view('backend.doc.show', [
            'doc' => $doc,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doc $doc)
    {
        $this->authorize('update', $doc);

        if (Auth::user()->role->position === 'teacher') {
            $videos = Video::where('user_id', '=', Auth::user()->id)->get();
        } elseif(Auth::user()->role->position === 'developer') {
            $videos = Video::all();
        }
        return view('backend.doc.edit', [
            'videos' => $videos,
            'doc' => $doc,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDocRequest $request, Doc $doc)
    {
        $this->authorize('update', $doc);

        if ($request->hasFile('file')) {
            if (!empty($doc->file)) {
                Storage::delete($doc->file);
            }
            $file = $request->file('file')->store('doc', 'public');
        } else {
            $file = $doc->file;
        }

        $doc->update([
            'name' => $request->name,
            'user_id' => $request->user_id,
            'video_id' => $request->video_id,
            'status' => $request->status,
            'file' => $file,
        ]);

        return redirect()->route('docs.index')->with('message', 'Siz hujjatni muvaffaqqiyatli tarzda tahrirlandingiz!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doc $doc)
    {
        $this->authorize('delete', $doc);

        $doc->delete();
        if ($doc->file) {
            Storage::delete($doc->file);
        }

        return redirect()->route('docs.index')->with('message', "Siz hujjatni muvaffaqqiyatli tarzda o'chirdingiz!");
    }
}
