<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function index(){
        return view('Pricing.index');
    }

    public function features(){
        return view('Pricing.features');
    }

    public function enterprise(){
        return view('Pricing.enterprise');
    }

    public function support(){
        return view('Pricing.support');
    }

}
