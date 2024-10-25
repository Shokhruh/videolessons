<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Field;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function main() {
        $courses = Course::where('status', '=', 1)->orderBy('created_at', 'DESC')->limit(6)->get();
        return view('page.index', [
            'courses' => $courses,
        ]);
    }

    public function courses() {
        $courses = Course::where('status', '=', 1)->paginate(6);
        return view('page.courses', [
            'courses' => $courses,
        ]);
    }

    public function course(Course $course) {
        $relatedCourses = Course::where('field_id', '=', $course->field_id)->where('id', '!=', $course->id)->get();
        return view('page.course', [
            'course' => $course,
            'relatedCourses' => $relatedCourses,
        ]);
    }

    public function video(Course $course, Video $video) {
        $first = Video::where('course_id', '=', $course->id)->first();
        return view('page.videos', [
            'course' => $course,
            'video' => $video,
            'first' => $first,
        ]);
    }

    public function instructors() {
        $instructors = User::where('status', '=', 1)->where('role_id', '=', 3)->get();
        return view('page.instructors', [
            'instructors' => $instructors,
        ]);
    }

    public function instructor(User $user) {
        $courses = Course::where('status', '=', 1)->where('user_id', '=', $user->id)->get();
        return view('page.instructor', [
            'instructor' => $user,
            'courses' => $courses,
        ]);
    }

    public function field(Field $field) {
        $courses = Course::where('status', '=', 1)->where('field_id', '=', $field->id)->orderBy('created_at', 'DESC')->paginate(9);
        return view('page.field', [
            'field' => $field,
            'courses' => $courses,
        ]);
    }
}
