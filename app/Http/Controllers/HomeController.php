<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegisterCourse;
use App\Models\Course;
use App\Models\Founder;
use App\Models\Page;
use App\Models\Partner;
use App\Models\Reservation;
use App\Models\Service;
use App\Models\ServiceList;
use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        $pages = Page::all();
        $settings = Setting::select('key','value')->pluck('value','key');
        return view('frontend.home',[
            'pages' => $pages,
            'settings' => $settings
        ]);
    }

    public function about()
    {
        return 'about';
    }

    public function services()
    {
        $pages = Page::all();
        $settings = Setting::select('key','value')->pluck('value','key');
        $services = Service::with(['serviceList'])->get();
        return view('frontend.services',[
            'pages' => $pages,
            'services' => $services,
            'settings' => $settings,
        ]);
    }

    public function courses()
    {
        $pages = Page::all();
        $settings = Setting::select('key','value')->pluck('value','key');
        $courses = Course::all();
        return view('frontend.courses',[
            'pages' => $pages,
            'settings' => $settings,
            'courses' => $courses
        ]);
    }

    public function contact()
    {
        $pages = Page::all();
        $settings = Setting::select('key','value')->pluck('value','key');
        return view('frontend.contact',[
            'pages' => $pages,
            'settings' => $settings
        ]);
    }

    public function founders()
    {
        $pages = Page::all();
        $settings = Setting::select('key','value')->pluck('value','key');
        $founders = Founder::all();
        return view('frontend.founders',[
            'pages' => $pages,
            'settings' => $settings,
            'founders' => $founders
        ]);
    }

    public function getFounder($id)
    {
        dd($id);
    }

    public function partners()
    {
        $pages = Page::all();
        $settings = Setting::select('key','value')->pluck('value','key');
        $partners = Partner::all();
        return view('frontend.partners',[
            'pages' => $pages,
            'settings' => $settings,
            'partners' => $partners
        ]);
    }

    public function getCourse($id)
    {
        if($course = Course::find($id)) {
            $pages = Page::all();
            $settings = Setting::select('key','value')->pluck('value','key');
            return view('frontend.course_details',[
                'pages' => $pages,
                'settings' => $settings,
                'course' => $course
            ]);
        }
    }

    public function courseRegister(Request $request,$id)
    {
        if ($course = Course::find($id)){

            $validation = Validator::make($request->all(),
                [
                    'name' => 'required',
                    'phone' => 'required',
                    'company' => 'required',
                    'email' => 'required'
                ]
            );
            if ($validation->fails()){
                $messages = $validation->messages();
                foreach ($messages->all() as $message) {
                    toastr()->error($message);
                }
                session()->flash('registerError',true);
                return redirect()->back();
            }

            Reservation::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'company' => $request->company,
                'course_id' => $course->id,
                'note' => $request->note,
                'status' => 0,
            ]);

            toastr()->success('Data has been Send Successfully');
            return redirect()->back();
        }

    }
}
