<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home_index()
    {
        return Inertia('Dashboard/home');
    }

    public function shop_index()
    {
        return Inertia('Dashboard/shop');
    }

    public function about_index()
    {
        return Inertia('Dashboard/about');
    }

    public function services_index()
    {
        return Inertia('Dashboard/services');
    }

    public function blog_index()
    {
        return Inertia('Dashboard/blog');
    }

    public function contact_index()
    {
        return Inertia('Dashboard/contact');
    }

}
