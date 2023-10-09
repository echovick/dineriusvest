<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function home()
    {
        return view('site.home');
    }

    public function about()
    {
        return view('site.about');
    }

    public function products()
    {
        return view('site.products');
    }

    public function contact()
    {
        return view('site.contact');
    }

    public function signin()
    {
        return view('site.signin');
    }

    public function signup()
    {
        return view('site.signup');
    }

    public function guide()
    {
        return view('site.guide');
    }

    public function education(){
        return view('site.education');
    }

    public function forgotPassword()
    {
        return view('site.forgot-password');
    }

    public function resetPassword()
    {
        return view('site.reset-password');
    }

    public function educationChapterInfo($chapter)
    {
        // Get the education chapter
        return view('site.education-chapter', compact('chapter'));
    }

    public function riskManagement()
    {
        return view('site.risk-management');
    }
}
