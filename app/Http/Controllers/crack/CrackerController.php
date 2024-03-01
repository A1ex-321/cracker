<?php

namespace App\Http\Controllers\crack;

use App\Models\User;
use App\Models\Gallery;
use App\Models\detail;
use App\Models\Banner;
use App\Models\Machineservice;
use App\Models\Scolink;
use App\Models\home;
use App\Models\social;
use App\Models\about;
use App\Models\service;
use App\Models\Item;

use App\Models\contacts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Mailstores;
use App\Models\Blogsco;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;


class CrackerController extends Controller
{
    public function index()
    {
        $data['allrecord'] = Machineservice::with('items')->get();
        //  dd($data['allrecord']);

        return view('crack.index',$data);
    }
    public function about()
    {
        return view('crack.about');
    }
    public function category()
    {
        $data['all']= Machineservice::get();
        // dd($data['all']);
        return view('crack.category',$data);
    }
    public function contact()
    {
        
        return view('crack.contact');
    }
    public function cart()
    {
        
        return view('crack.cart');
    }
}
