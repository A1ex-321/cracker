<?php

namespace App\Http\Controllers\crack;
use Illuminate\Support\Facades\Redirect;

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
use App\Models\Order;
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
    public function store(Request $request)
    {
        // dd($request->all());
        $order = new Order();
        $order->name = $request->input('name');
        $order->number = $request->input('number');
        $order->address = $request->input('address');
        $order->state = $request->input('state');
        $order->city = $request->input('city');
        $order->pincode = $request->input('pincode');
        $order->cartItems = $request->input('cartItems');
    
        // Save the order to the database
        $order->save();
    
        // Remove cartItems from local storage
    
        // Redirect back with a success message
        return Redirect::route('/')->with('success', 'Order placed successfully!');
    }
}
