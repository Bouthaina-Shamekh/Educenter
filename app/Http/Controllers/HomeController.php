<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $courses_slider = Course::orderByDesc('id')->take(3)->get();
        $abouts = About::orderByDesc('id')->take(1)->get();
        $courses = Course::orderByDesc('id')->take(6)->get();
        $events = Event::orderByDesc('id')->take(3)->get();
        $teachers = Teacher::orderByDesc('id')->take(3)->get();
        $news = News::orderByDesc('id')->take(3)->get();

        return view('site.index', compact('courses_slider','abouts','courses','events','teachers','news'));
    }

   // public function login()
   // {
      //  return view('auth.login');
    //}

   // public function register()
   // {
    //    return view('auth.register');
   // }
}
