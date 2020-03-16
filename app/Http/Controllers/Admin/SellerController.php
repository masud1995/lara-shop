<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Seller;
use App\Product;
use DB;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view ('back-end.seller.view');

        //$clients=Client::join('done', 'done.id', '=', 'work.work_done')
        $Seller=DB::table('sellers')
        ->Leftjoin('products', 'sellers.id', '=', 'products.seller_id')
        ->select('sellers.name','products.title','sellers.phone')
       ->get();
     return response($Seller);






    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('back-end.seller.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request,[

            'name' => 'required|min:5|max:255',
            'email' => 'nullable|email|max:255|',
            'img' => 'nullable|mimes:jpeg,jpg,png',
            'location' => 'required',
            'phone' => 'required|max:15',
            'bkash' => 'required|max:15',
            'address' => 'required|max:500',
            'description' => 'nullable|max:500',
        ]);


        //print_r($request->all());



        $folder = "back-end/seller/";

        if($image = $request->file('img')){
          $ext = $image->extension();
          $image_name = "Seller".rand(100,999).".".$ext;
          $image_url = $folder.$image_name;
          $image->move($folder,$image_name);
        }

        $data = new Seller();

        $data->name=request('name');
        $data->email=request('email');
        $data->img=$image_url;
        $data->location=request('location');
        $data->phone=request('phone');
        $data->bkash=request('bkash');
        $data->address=request('address');
        $data->description=request('description');

        $data->save();

        return back()->with('status', 'Success!! New Seller added successfully.');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::check()){
            $pre = Seller::find($id);
            $preimg = $pre->img;
            if($preimg){
              unlink($preimg);
            }
            $pre->delete();
    
            return back()->with('msg-success', 'Success!! Image deleted successfully.');


}
    }
}