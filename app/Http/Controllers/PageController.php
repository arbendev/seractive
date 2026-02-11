<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function industries()
    {
        return view('industries');
    }

    public function products()
    {
        return view('products');
    }

    public function resources()
    {
        return view('resources');
    }

    public function services()
    {
        return view('services');
    }

    public function serviceDetail($service)
    {
        // Check if view exists to avoid 500 error
        if (view()->exists("services.{$service}")) {
             return view("services.{$service}");
        }
        abort(404);
    }

    public function resourceDetail($resource)
    {
        // Check if view exists to avoid 500 error
        if (view()->exists("resources.{$resource}")) {
             return view("resources.{$resource}");
        }
        abort(404);
    }
}
