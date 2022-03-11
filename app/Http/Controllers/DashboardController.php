<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Course;
use App\Models\Founder;
use App\Models\Page;
use App\Models\Partner;
use App\Models\Registration;
use App\Models\Reservation;
use App\Models\Service;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $pagesCount = Page::get()->count();
        $servicesCount = Service::get()->count();
        $coursesCount = Course::get()->count();
        $articlesCount = Article::get()->count();
        $reservationsCount = Reservation::get()->count();
        $registrationCount = Registration::get()->count();
        $foundersCount = Founder::get()->count();
        $partnersCount = Partner::get()->count();
        return view('backend.dashboard',[
            'pages' => $pagesCount,
            'services' => $servicesCount,
            'courses' => $coursesCount,
            'articles' => $articlesCount,
            'reservations' => $reservationsCount,
            'registrations' => $registrationCount,
            'founders' => $foundersCount,
            'partners' => $partnersCount
        ]);
    }
}
