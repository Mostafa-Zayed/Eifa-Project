<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegisterCourse;
use App\Models\Category;
use App\Models\Course;
use App\Models\Founder;
use App\Models\Media;
use App\Models\Message;
use App\Models\Page;
use App\Models\Partner;
use App\Models\Reservation;
use App\Models\Service;
use App\Models\ServiceList;
use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\Validator;
use App\Models\Article;

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

    public function sendMessage(Request $request)
    {
        $validation = Validator::make($request->all(),[
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required'
        ]);

        if ($validation->fails()){
            $messages = $validation->messages();
            foreach ($messages->all() as $message) {
                toastr()->error($message);
            }
            return redirect()->route('contact');
        }
        Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'status' => 'not-reading'
        ]);

        toastr()->success('Your Message Send Successfully');
        return redirect()->route('contact');
    }

    public function media()
    {
        $pages = Page::all();
        $settings = Setting::select('key','value')->pluck('value','key');
        $media = Media::with(['category'])->get();
        $categories = Category::where('status',1)->get();
        return view('frontend.media',[
            'pages' => $pages,
            'settings' => $settings,
            'categories' => $categories,
            'media' => $media
        ]);
    }

    public function registration()
    {
        $pages = Page::all();
        $settings = Setting::select('key','value')->pluck('value','key');
        return view('frontend.registration',[
            'pages' => $pages,
            'settings' => $settings
        ]);
    }

    public function blogs()
    {

        $pages = Page::all();
        $settings = Setting::select('key','value')->pluck('value','key');
        $articles = Article::where('status',1)->simplePaginate(5);
        return view('frontend.blogs',[
            'pages' => $pages,
            'settings' => $settings,
            'articles' => $articles
        ]);
    }

    public function getArticle($id)
    {
        dd($id);
    }
}
