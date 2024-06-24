<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreProductRequest;
use App\Models\Brand;
use App\Models\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list=Product::where('product.status','!=',0)
        ->join('category','category.id','=','product.category_id')
        ->join('brand','brand.id','=','product.brand_id')
        ->select('product.id','product.id','product.name','product.image',
        'category.name as categoryname','brand.name as brandname', 
        'brand.id as brandid', 'category.id as categoryid')
        ->orderBy('product.created_at','desc')
        ->get();
        $list_category= Category::where('status','!=',0)
        ->orderBy('created_at','asc')
        ->get();
        $list_brand= Brand::where('status','!=',0)
        ->orderBy('created_at','asc')
        ->get();
        $htmlcategoryid="";
        $htmlbrandid="";
        foreach($list_category as $item)
        {
            $htmlcategoryid .= "<option value='" . $item->id . "'>" . $item->name . "</option>";
        }
        foreach($list_brand as $item)
        {
            $htmlbrandid .= "<option value='" . $item->id . "'>" . $item->name . "</option>";
        }
        return view("backend.product.index",compact("list","htmlcategoryid","htmlbrandid"));
    }

    public function create()
    {
        $list_category= Category::where('status','!=',0)
        ->orderBy('created_at','asc')
        ->get();
        $list_brand= Brand::where('status','!=',0)
        ->orderBy('created_at','asc')
        ->get();
        $htmlcategoryid="";
        $htmlbrandid="";
        foreach($list_category as $item)
        {
            $htmlcategoryid .= "<option value='" . $item->id . "'>" . $item->name . "</option>";
        }
        foreach($list_brand as $item)
        {
            $htmlbrandid .= "<option value='" . $item->id . "'>" . $item->name . "</option>";
        }
        return view("backend.product.create",compact("htmlcategoryid","htmlbrandid"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product=new Product();
        $product->name=$request->name; //form
        $product->slug=Str::of($request->name)->slug('-');
        $product->category_id=$request->category_id;//form
        $product->brand_id=$request->brand_id;//form
        $product->price=$request->price;//form
        $product->pricesale=$request->pricesale;//form
        $product->description=$request->description;//form
        $product->detail=$request->detail;//form
        $product->created_at=date('Y-m-d H:i:s');
        $product->created_by=Auth::id()??1;
        $product->status=$request->status;//form
        //upload file
        // $fileName=date('YmdHis').'.'.
        // $request->file->extension();
        if($request->image) {
            if(in_array($request->image->extension(),["jpg","png","webs","gif"]))
            {
                $fileName=$product -> slug.'.'.$request->image->extension();
                $request -> image -> move(public_path("images/products"),$fileName);
                $product->image=$fileName;
            }   
        }
        $product->save();
        return redirect()->route('admin.product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product=  Product::find($id);
        if($product==null)
        {
            //chuyen huong trang va bao
        }
        $list_category= Category::where('status','!=',0)
        ->orderBy('created_at','asc')
        ->get();
        $list_brand= Brand::where('status','!=',0)
        ->orderBy('created_at','asc')
        ->get();
        $htmlcategoryid="";
        $htmlbrandid="";
        foreach($list_category as $item){
            if($product->category_id==$item->id){
                $htmlcategoryid .="<option selected value='".$item->id."'>".$item->name."</option>";
            }else{
                $htmlcategoryid .="<option value='".$item->id."'>".$item->name."</option>";
            }
        }
        foreach($list_brand as $item){
            if($product->brand_id==$item->id){
                $htmlbrandid .= "<option selected value='" . $item->id . "'>" . $item->name . "</option>";
            }else{
                $htmlbrandid .= "<option value='" . $item->id . "'>" . $item->name . "</option>";
            }
        }
        return view("backend.product.show",compact("product","htmlcategoryid","htmlbrandid"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product=  Product::find($id);
        if($product==null)
        {
            //chuyen huong trang va bao
        }
        $list_category= Category::where('status','!=',0)
        ->orderBy('created_at','asc')
        ->get();
        $list_brand= Brand::where('status','!=',0)
        ->orderBy('created_at','asc')
        ->get();
        $htmlcategoryid="";
        $htmlbrandid="";
        foreach($list_category as $item){
            if($product->category_id==$item->id){
                $htmlcategoryid .="<option selected value='".$item->id."'>".$item->name."</option>";
            }else{
                $htmlcategoryid .="<option value='".$item->id."'>".$item->name."</option>";
            }
        }
        foreach($list_brand as $item){
            if($product->brand_id==$item->id){
                $htmlbrandid .= "<option selected value='" . $item->id . "'>" . $item->name . "</option>";
            }else{
                $htmlbrandid .= "<option value='" . $item->id . "'>" . $item->name . "</option>";
            }
        }
        return view("backend.product.edit",compact("product","htmlcategoryid","htmlbrandid"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product=  Product::find($id);
        if($product==null)
        {
            //chuyen huong trang va bao
        }
        $product->name=$request->name; //form
        $product->slug=Str::of($request->name)->slug('-');
        $product->category_id=$request->category_id;//form
        $product->brand_id=$request->brand_id;//form
        $product->price=$request->price;//form
        $product->pricesale=$request->pricesale;//form
        $product->description=$request->description;//form
        $product->detail=$request->detail;//form
        $product->created_at=date('Y-m-d H:i:s');
        $product->created_by=Auth::id()??1;
        $product->status=$request->status;//form
        //upload file
        // $fileName=date('YmdHis').'.'.
        // $request->file->extension();
        if($request->image) {
            if(in_array($request->image->extension(),["jpg","png","webs","gif"]))
            {
                $fileName=$product -> slug.'.'.$request->image->extension();
                $request -> image -> move(public_path("images/products"),$fileName);
                $product->image=$fileName;
            }   
        }
        $product->save();
        return redirect()->route('admin.product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    
}
