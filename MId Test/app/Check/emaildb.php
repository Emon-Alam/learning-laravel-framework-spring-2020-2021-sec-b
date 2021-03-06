<?php

namespace App\Check;

use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Validation\Rule;

class emaildb implements Rule
{
    /**
     * Create a new Check instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation Check passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
       if(
           DB::table('admins')
            ->where('email',$value)
            ->first()
       ) 
       {
           return false;
       }
       elseif(
        DB::table('accountants')
        ->where('email',$value)
        ->first()
       )
       {
           return false;
       }
       elseif(
        DB::table('vendors')
        ->where('email',$value)
        ->first()
       )
       {
           return false;
       }
       elseif(
        DB::table('customers')
        ->where('email',$value)
        ->first()
       )
       {
           return false;
       }
       else
       {
           return true;
       }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Email Already Exist!';
    }
}
