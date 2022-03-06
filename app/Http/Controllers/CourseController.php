<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        return view('backend.courses.index',[
            'courses' => $courses
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $request->validate([
            'name.en' => 'required',
            'name.ar' => 'required',
            'title.en' => 'required',
            'title.ar' => 'required',
            'min_description.ar' => 'required',
            'min_description.en' => 'required',
            'description.ar'  => 'required',
            'description.en' => 'required',
            'details.ar' => 'required',
            'details.en' => 'required',
            'status' => 'nullable'
        ]);

        Course::create([
            'name' => [
                'ar' => $request->name['ar'],
                'en' => $request->name['en']
            ],
            'title' => [
                'ar' => $request->title['ar'],
                'en' => $request->title['en']
            ],
            'min_description' => [
                'ar' => $request->min_description['ar'],
                'en' => $request->min_description['ar']
            ],
            'description' => [
                'ar' => $request->description['ar'],
                'en' => $request->description['en']
            ],
            'details' => [
                'ar' => $request->details['ar'],
                'en' => $request->details['en']
            ],
            'status' =>  $request->status
        ]);
        toastr()->success('Data has been saved successfully');
        return redirect()->route('courses.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }
}
