<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use DB;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function insert(Request $request)
    {



      $messages = [
        'name.required' => 'Name field is required.',
        'name.max' =>  'Maximum length for name is 100 chars.',

        'desc.required' =>  'Description field is required.',
        'desc.max' =>  'Maximum length for description is 2000 chars.',

        'p_image.required'  =>  'Image field is required.',
        'p_image.image'  =>  'Invalid Image format. Allowed formats (png,jpg,jpeg)',
        'p_image.max'  =>  'Image size must be less than 10MB.',
        'p_image.mimes'  =>  'Invalid Image format. Allowed formats (png,jpg,jpeg)',
        'batch_number.required' => 'batch number is required',
        'hsn_code.required' => 'HSN code  is required',
        // 'anabolic.required' => 'anabolic is required',
        'Exp.required' => 'Exp date  is required',
        'Mfg.required' => 'Mfg date  is required'
      ];

      $this->validate($request,
      [
      'name' => 'required|max:100',
      'desc' =>  'required|max:2000',
      'p_image'  =>  'required|image|mimes:png,jpg,jpeg|max:10000',
      'cats' => 'required',
      'batch_number' => 'required',
      'hsn_code' => 'required',
      'composition'=>'required',
       'packing'=>'required',
     'formula'=>'required',
   'molecular_mass'=>'required',
       'active_life'=>'required',
     'anabolic'=>'required',
       'dosage'=>'required',
      'Exp' => 'required',
      'Mfg' => 'required',
      ], $messages);

    $pname = $request->name;
     $pdesc = $request->desc;
     $cats = $request->cats;
    $batch = $request->batch_number;
    $hsn = $request->hsn_code;
    $composition = $request->composition;
      $packing = $request->packing;
            $formula = $request->formula;
              $molecular_mass = $request->molecular_mass;
                $active_life = $request->active_life;
                  $anabolic = $request->anabolic;
                    $dosage = $request->dosage;
      $Exp = $request->Exp;
      $Mfg = $request->Mfg;
// dd($request);

     if($pimage = $request->hasFile('p_image'))
     {
          $file = $request->file('p_image');

         $filename = $file->getClientOriginalName();
         //$ext = $file->getClientOriginalExtension();
         $path = public_path('images/products/');
         $filename = time().$filename;

         $file->move($path, $filename);
     }

     else
     {
         $filename = 'product.jpg';
     }
          $product = new product;
           $product->pro_name = $pname;
           $product->pro_desc = $pdesc;
           $product->pro_img = $filename;
           $product->cid = $cats;
           $product->batch_number = $batch;
           $product->HSN_code = $hsn;
           $product->composition = $composition;
           $product->packing= $packing;
           $product->formula = $formula;
           $product->molecular_mass = $molecular_mass;
           $product->active_life = $active_life;
           $product->anabolic = $anabolic;
           $product->dosage = $dosage;
           $product->Exp = $Exp;
           $product->Mfg = $Mfg;
           $product->created_at =  \Carbon\Carbon::now();
           $product->updated_at =  \Carbon\Carbon::now();

           $product->save();

           if($product)
          {
              return response()->json([
                'status' => 200, //data inserted Successfully respnose code
                'success' => 'Product inserted Successfully!'
              ]);
          }
          return response()->json([
            'status' => 500, //server error
            'error' => 'Erorr! Something Went Wrong.'
          ]);
         //return back();
    }

   //  public function select()
   //  {
   // $abc = DB::table('product')->get();
   // return view('admin/genrate')->with('abc',$abc);
   //  }


public function code()
   {
      $product= DB::table('product')->get();
      return view('admin/view')->with('product', $product);

    }
public function delete($id)
   {
     $res=product::find($id)->delete();
     return back();
   // if ($res)
   // {
   //   $data=
   //   [
   //   'status'=>'1',
   //   'msg'=>'success'
   // ];
   // }
   // else
   // {
   //   $data=
   //   [
   //   'status'=>'0',
   //   'msg'=>'fail'
   // ];
   // return response()->json($data);
   }

public function updateproduct(Request $request, $id)
{
  $messages = [
    'name.required' => 'Name field is required.',//name.required ethe .required da matlab aa ki je name field ch required waali error aandi aa ta ki message dikhna
    'name.max' =>  'Maximum length for name is 100 chars.',

    'desc.required' =>  'Description field is required.',
    'desc.max' =>  'Maximum length for description is 2000 chars.'
    ];

  $validated = $this->validate($request,
  [
    'name' => 'required|max:100',
    'desc' =>  'required|max:2000'

  ], $messages);

        $product = product::where('id', $id)->update([
          'pro_name' => $validated['name'],
          'pro_desc' => $validated['desc']
        ]);

        if($product)
       {
           return response()->json([
             'status' => 200, //data inserted Successfully respnose code
             'success' => 'Product updated Successfully!'
           ]);
       }
       return response()->json([
         'status' => 500, //server error
         'error' => 'Erorr! Something Went Wrong.'
       ]);

}

public function imageupdate(Request $request)
{
  $messages = [
    'video_thumbnail.required' => 'Image field is required.',//name.required ethe .required da matlab aa ki je name field ch required waali error aandi aa ta ki message dikhna
    'video_thumbnail.max' =>  'Maximum length for image is 1mb.',
    'video_thumbnail.image' =>  'Must Be type of image.',
    'video_thumbnail.mimes' =>  'Image format must be type of png,jpg,jpeg only.',
    ];
  $this->validate($request,
  [
    'video_thumbnail'  =>  'required|image|mimes:png,jpg,jpeg|max:10000'
  ], $messages);

  $id= $request->id;
  if($pimage = $request->hasFile('video_thumbnail'))
  {
       $file = $request->file('video_thumbnail');
      $filename = $file->getClientOriginalName();// ethe apa $filename ch file da name add krwa rahie aa man la $filename = product.jpg
      $ext = $file->getClientOriginalExtension();
      $path = public_path('images/products/');
      $filename = time().'_'.$filename.'_.'.$ext;//jo file apa save karwa rhe aa product folder ch os da naam the bna rahe aa
                                              // ethe name banega 12342524343_product.jpg_.jpg
      $file->move($path, $filename);

  }
  else
  {
    Session::flash('error', 'something went wrong');
    return back();
  }
  $image=product::where('id',$id)->update([
    'pro_img' => $filename,//database vi fer eh save krna
  ]);

   if($image)
   {
     Session::flash('success', 'image upload successfully');
     return back();
   }
   else
   {
     Session::flash('error', 'something went wrong');
     return back();
   }

}
public function dc($id)
{
$single=DB::table('product')->where('id',$id)->get();
return view('front.single', compact('single'));
}
public function ramp($id)
{
$ranjha=DB::table('product')->where('id',$id)->get();
return view('front.single2', compact('ranjha'));
}



public function edit($id)
         {
             $product= product::findOrFail($id);
              return view('admin.updateproduct', compact('product'));
         }



         public function detail($id)
                  {
                    $details= DB::table('product')->where('cid',$id)->get();
                       return view('front.product', compact('details'));
                  }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
