<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    //
    public function index(Request $req)
    {
        if($req->session()->get('usertype')=='admin')
        {
            return view('home.admin');
            
        }
        elseif($req->session()->get('usertype')=='accountant')
        {
            
            return view('home.accountant');
        }
        elseif($req->session()->get('usertype')=='customer')
        {
            
            return view('home.customer');
        }
        elseif($req->session()->get('usertype')=='vendor')
        {
            
            return view('home.vendor');
        }
    }
}