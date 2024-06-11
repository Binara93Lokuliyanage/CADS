<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageViewController extends Controller
{
    //
    public function showHomePage() {
        return view('front.home');
    }

    public function showAboutPage() {
        return view('front.about');
    }

    public function showAdvisoryPage() {
        return view('front.advisory-council');
    }

    public function showStaffPage() {
        return view('front.staff');
    }

    public function showEventsPage() {
        return view('front.events');
    }

    public function showContactPage() {
        return view('front.contact');
    }

    public function showProgramsPage() {
        return view('front.programs');
    }
}
