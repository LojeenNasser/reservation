<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lawyer;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Requests\CourseRequest;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::latest()->paginate(5);
        return view('courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $lawyers = Lawyer::all();
        return view('courses.create', compact('lawyers', 'categories'));;
    }

    public function store(CourseRequest $request)
    {
        $input = $request->validated();
        $avatar = Arr::pull($input, 'avatar');
        $course = Course::create($input);
        $course->addMedia($avatar)->toMediaCollection('avatar');
        return redirect()->route('courses.index')
            ->with('success', 'course created successfully.');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view('courses.edit', compact('course'));
    }
    public function update(CourseRequest $request, $id)
    {
        $input = $request->validated();
        $avatar = Arr::pull($input, 'avatar');
        $course = Course::whereId($id)->update($input);
        if ($avatar) {
            $course->clearMediaCollection('avatar');
            $course->addMedia($avatar)->toMediaCollection('avatar');
        }
        return redirect()->route('courses.index')
            ->with('success', 'course created successfully.');
    }


    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('courses.index')
            ->with('success', 'course deleted successfully');
    }
}
