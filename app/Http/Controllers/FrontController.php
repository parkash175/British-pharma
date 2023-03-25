<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visiter;

class FrontController extends Controller
{ 
    public function index(Request $request)
    {
        Visiter::create(['ip_address' => $request->ip()]);
        $visiter =Visiter::all()->count();
        return view('front.authentication',compact('visiter'));
    }
    public function createvisiter($count)
    {
         //dd(intval($count));
        if(!is_numeric($count)){
            echo "Only numeric value is accepted."; 
        } 
        else{
            if ($count < 10001) {
                $new_user = factory(Visiter::class,intval($count))->create();
                echo "Done";
                 
            } else {
                 echo 'Maximum 10000 entries are allowed in single entry.';
                
            }
        }
    }
}
