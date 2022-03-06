<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Founder;
use App\Models\Page;
use App\Models\Partner;
use App\Models\Service;
use App\Models\ServiceList;
use Database\Seeders\CourseSeeder;
use Illuminate\Http\Request;
use App\Models\Setting;

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
        dd($request->all());
    }
}
