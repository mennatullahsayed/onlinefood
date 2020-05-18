<?php

namespace App\Http\Controllers;
use App\Category;
use App\Item;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
    public function index()
    {
        
        if(Auth()->user()->permission == '0')
        {
            return view('home');
        }
        else
        {
           $items = Item::all();
           return view('admin.item.customer',compact('items'));
        } 
   
    }

 
}