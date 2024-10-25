<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\Field;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('developer')->except(['index', 'show']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->role->position === 'teacher') {
            $courses = Course::where('user_id', '=', Auth::user()->id)->get();
        } else {
            $courses = Course::all();
        }
        return view('backend.course.index', [
            'courses' => $courses,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', Course::class);

        $fields = Field::where('status', '=', 1)->get();
        return view('backend.course.create', [
            'fields' => $fields,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourseRequest $request)
    {
        $this->authorize('create', Course::class);

        if ($request->hasFile('thumbnail')) {
            $path = $request->file('thumbnail')->store('courses', 'public');
        }

        Course::create([
            'name' => $request->name,
            'description' => $request->description,
            'user_id' => $request->user_id,
            'field_id' => $request->field_id,
            'status' => $request->status,
            'thumbnail' => $path,
            'for_whom' => $request->for_whom,
        ]);

        return redirect()->route('courses.index')->with('message', "Siz hujjatni muvaffaqqiyatli tarzda qo'shdingiz!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        $this->authorize('view', $course);

        return view('backend.course.show', [
            'course' => $course,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        $this->authorize('update', $course);

        $fields = Field::where('status', '=', 1)->get();
        return view('backend.course.edit', [
            'course' => $course,
            'fields' => $fields,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {
        $this->authorize('update', $course);

        if ($request->hasFile('thumbnail')) {
            if (!empty($course->thumbnail)) {
                Storage::delete($course->thumbnail);
            }
            $photo = $request->file('thumbnail')->store('courses', 'public');
        } else {
            $photo = $course->thumbnail;
        }

        $course->update([
            'name' => $request->name,
            'description' => $request->description,
            'user_id' => $request->user_id,
            'field_id' => $request->field_id,
            'status' => $request->status,
            'thumbnail' => $photo,
            'for_whom' => $request->for_whom,
        ]);

        return redirect()->route('courses.index')->with('message', "Siz hujjatni muvaffaqqiyatli tarzda tahrirladingiz!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $this->authorize('delete', $course);

        if (!empty($course->thumbnail)) {
            Storage::delete($course->thumbnail);
            $course->delete();
        }

        return redirect()->route('courses.index')->with('message', "Siz hujjatni muvaffaqqiyatli tarzda o'chirdingiz!");
    }
}
