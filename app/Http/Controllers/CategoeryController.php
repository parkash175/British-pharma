<?php

namespace App\Http\Controllers;
use DB;
use App\Categoery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoeryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

   }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function more(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categoery  $categoery
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //dd($request);
      $this->validate($request,
      [
         'name'=>'required|max:100',
         'desc'=>'required|max:100',
       ]);

       $name =$request->name;
       $desc =$request->desc;


      $categoery = new Categoery;
      $categoery->name =$name;
      $categoery->desc = $desc;
      $categoery->created_at =  \Carbon\Carbon::now();
      $categoery->updated_at =  \Carbon\Carbon::now();
      $categoery->save();

       if($categoery)
       {
         session()->flash('alert-success', 'Categoery successful added!');
      return back();
       }
       else
       {
         session()->flash('alert-error', 'Something  Went wrong!');
      return back();

       }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categoery  $categoery
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoery $categoery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categoery  $categoery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoery $categoery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categoery  $categoery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoery $categoery)
    {
        //
    }
}
