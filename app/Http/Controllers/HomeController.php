<?php

namespace App\Http\Controllers;

use App\BrandColorGroup;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brandsInstance = new BrandsController();
        $brandColorGroup = BrandColorGroup::all();
        foreach ($brandsInstance->index() as $brandItem){
            $brand = $brandItem;
        }
        if (isset($brand)){
            return view('home.index', compact('brand', 'brandColorGroup'));
        }else{
            $errorCode = 503;
            return view('errors.index', compact('errorCode'));
        }
    }
}
