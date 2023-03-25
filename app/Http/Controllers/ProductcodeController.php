<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\productcode;
use App\product;
use App\Traits\GenrateRandomString;
use App\verifiedproduct;
use Illuminate\Support\Str;
use DB;
use Barryvdh\Snappy\Facades\SnappyPdf as PDF;

class ProductcodeController extends Controller
{
  use GenrateRandomString;

    public function genereateCode(){


      $dates = DB::table('productcodes')
      ->select(DB::raw('DATE(created_at) as date'), DB::raw('count(*) as codes'))
      ->groupBy('date')
      ->orderBy('date', 'DESC')
      ->get();
      return  view('admin.genrate', compact('dates'));
    }

    public function getPDF($date)
    {

      $data = productcode::whereDate('created_at', '=', $date)->get();

      $pdf = PDF::loadView('admin.pdf.productcodes', compact('data'));
              // ethe apa simple jive view te data pass karde aa h i kita pdf da method use kar ke
      $pdf->setOption('footer-right', config('app.name'));
      // ethe apa setOption naal pdf da footer set kita jithe apa app da name print krwaya

      return $pdf->stream($date.'_productcodes.pdf');//je new tab ch open krwani hai pdf bindec
      // return $pdf->download($date.'_productcodes.pdf');// je direct dowunload krwani hai file ena smj gya hmm eh samjh aa gya

    }

    public function verifyproduct(Request $request)
    {

        $data =$request->validate([
            'code'=>'required|min:8|max:8|alpha_num'
        ]);

        $product=productcode::where('code',$data['code'])->first();

        if($product)
        {
          $productData = product::where('batch_number', $product->batch_number)->first();
          $verified=verifiedproduct::create(['code'=>$product->code]);
        //   $product->delete();
          return view('front.detail', compact('productData'));
        }
        else{
            session()->flash('error', 'Invalid code. Please verify your code.
         (Might be its a fake product...)');
            return redirect()->back();
        }

     }

    // public function code(Request $request)
    // {
    //
    //
    //
    // }
    public function check(Request $request)
    {
        $this->validate($request,
        [
          'num' => 'required|string|min:1|max:300',
          'batch_number' =>'required'
        ]);

        $num = $request->num;
        $loda = $request->batch_number;



        for ($i= 0; $i<$num; $i++){
            productcode::insert([
              "code"=>strtoupper($this->generateRandomString()),
              "batch_number"=> $loda,
              "created_at"=>\Carbon\Carbon::now(),
              "updated_at"=>\Carbon\Carbon::now(),]);
        }
        $data = productcode::whereDate('created_at', \Carbon\Carbon::now()->format('Y-m-d'));

        if($data){
            return response('Codes Created Successfully', 201);
        }
    }

    // public function printcode(PrintCodeRequest $request){
    //     // productcode::whereDate('created_at', '2016-12-31')->get();
    // }

}
