<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Validator;
use App\Http\Requests\create_req;

class RegistrationController extends Controller
{
    public function index( Request $req){

    

        return view('registration.index');

    }

    public function store(create_req $req){

            $customer = new Customer();
            $customer->username         = $req->username;
            $customer->password         = $req->password;
            $customer->full_name        = $req->full_name;
            $customer->email            = $req->email;
            $customer->country          = $req->country;
            $customer->phone            = $req->phone;
            $customer->city             = $req->city;
            $customer->company_name     = $req->company_name;
            $customer->user_type        = 'active';
            //$customer->date_added       = $req->date_added;
            $customer->save();
            return redirect()->route('login');

        }

        
    }

