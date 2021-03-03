<?php

namespace App\Http\Controllers;
use Illuminate\Http\req;
use App\Http\Requests\login_req;
use App\Admin;
use App\Accountant;
use App\Customer;
use App\Vendor;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index(){

        return view('login.index');
    }

    public function verify(login_req $req)   
     {
        if($user = Admin::where('email',$req->email)
                ->where('password',$req->password)
                ->first())
        {
            $req->session()->put('email', $req->email);
            $req->session()->put('username',$user->username);
            $req->session()->put('usertype','admin');
            return redirect('/home');

        }
        elseif($user = Accountant::where('email',$req->email)
        ->where('password',$req->password)
        ->first())
        {

            $req->session()->put('email', $req->email);
            $req->session()->put('username',$user->username);
            $req->session()->put('usertype','accountant');
            return redirect('/home');
        }
        elseif($user = Customer::where('email',$req->email)
        ->where('password',$req->password)
        ->first())
        {

            $req->session()->put('email', $req->email);
            $req->session()->put('username',$user->username);
            $req->session()->put('usertype','customer');
            return redirect('/home');
        }
        elseif($user = Vendor::where('email',$req->email)
        ->where('password',$req->password)
        ->first())
        {

            $req->session()->put('email', $req->email);
            $req->session()->put('username',$user->username);
            $req->session()->put('usertype','vendor');
            return redirect('/home');
        }
        else
        {
            $req->session()->flash('msg', 'Invalid email or password...');
            return redirect('/login');
        }
       
        
    }

}
