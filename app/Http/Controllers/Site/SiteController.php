<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App;
use App\About;
use App\Contact;
use App\Seo;
use Illuminate\Support\Facades\URL;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $main = App\Setting::find(1);
        return view('site.pages.index', compact('main'));
    }

    public function about()
    {
        $main = About::find(1);
        $seo = Seo::where('url', URL::current())->get();
        return view('site.pages.about', compact('main', 'seo'));
    }

    public function contact()
    {
        $main = Contact::find(1);
        $seo = Seo::where('url', URL::current())->get();
        return view('site.pages.contact', compact('main', 'seo'));
    }
}
