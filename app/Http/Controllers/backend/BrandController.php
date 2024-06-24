<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreBrandRequest;
use App\Models\Brand;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list=Brand::where('status','!=',0)->orderBy('created_at','desc')->get();
        $htmlsortorder="";
        foreach($list as $item){
            $htmlsortorder .="<option value='".($item->sort_order+1)."'>Sau ".$item->name."</option>";
        }
        return view("backend.brand.index",compact("list","htmlsortorder"));
    }

   
    public function store(StoreBrandRequest $request)
    {
        $brand = new Brand();
        $brand -> name=$request->name;
        $brand -> slug = Str::of($request->name)->slug('_');
        $brand -> sort_order = $request->sort_order;
        $brand -> description = $request->description;
        //upload file
        if($request->image) {
            if(in_array($request->image->extension(),["jpg","png","webs","gif"]))
            {
                $fileName=$brand -> slug.'.'.$request->image->extension();
                $request -> image -> move(public_path("images/brands"),$fileName);
                $brand->image=$fileName;
            }   
        }
        $brand -> created_at = date('Y-m-d H:i:s');
        $brand -> created_by = Auth::id()??1;
        $brand -> status =$request -> status;
        $brand -> save();
        return redirect()->route('admin.brand.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $brand=  Brand::find($id);
        if($brand==null)
        {
            //chuyen huong trang va bao
        }
        $list=Brand::where('status','!=',0)->orderBy('created_at','desc')->get();
        $htmlsortorder="";
        foreach($list as $item){
            if($brand->sort_order-1==$item->sort_order){
                $htmlsortorder .="<option selected value='".($item->sort_order+1)."'>Sau ".$item->name."</option>";
            }else{
                $htmlsortorder .="<option value='".($item->sort_order+1)."'>Sau ".$item->name."</option>";
            }
        }
        return view("backend.brand.show",compact("list","brand","htmlsortorder"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $brand=  Brand::find($id);
        if($brand==null)
        {
            //chuyen huong trang va bao
        }
        $list=Brand::where('status','!=',0)->orderBy('created_at','desc')->get();
        $htmlsortorder="";
        foreach($list as $item){
            if($brand->sort_order-1==$item->sort_order){
                $htmlsortorder .="<option selected value='".($item->sort_order+1)."'>Sau ".$item->name."</option>";
            }else{
                $htmlsortorder .="<option value='".($item->sort_order+1)."'>Sau ".$item->name."</option>";
            }

        }
        return view("backend.brand.edit",compact("list","brand","htmlsortorder"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $brand= Brand::find($id);
        if($brand==null)
        {
            //chuyen huong trang va bao
        }
        $brand -> name=$request->name;
        $brand -> slug = Str::of($request->name)->slug('_');
        $brand -> sort_order = $request->sort_order;
        $brand -> description = $request->description;
        //upload file
        if($request->image) {
            if(in_array($request->image->extension(),["jpg","png","webs","gif"]))
            {
                $fileName=$brand -> slug.'.'.$request->image->extension();
                $request -> image -> move(public_path("images/categorys"),$fileName);
                $brand->image=$fileName;
            }   
        }
        $brand -> created_at = date('Y-m-d H:i:s');
        $brand -> created_by = Auth::id()??1;
        $brand -> status =$request -> status;
        $brand -> save();
        return redirect()->route('admin.brand.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
