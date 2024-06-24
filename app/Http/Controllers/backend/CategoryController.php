<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list=Category::where('status','!=',0)->orderBy('created_at','desc')->get();
        $htmlparentid="";
        $htmlsortorder="";
        foreach($list as $item){
            $htmlparentid .="<option value='".$item->id."'>".$item->name."</option>";
            $htmlsortorder .="<option value='".($item->sort_order+1)."'>Sau ".$item->name."</option>";
        }
        return view("backend.category.index",compact("list","htmlparentid","htmlsortorder"));
    }

   
    public function store(StoreCategoryRequest $request)
    {
        $category = new Category();
        $category -> name=$request->name;
        $category -> slug = Str::of($request->name)->slug('_');
        $category -> parent_id = $request->parent_id;
        $category -> sort_order = $request->sort_order;
        $category -> description = $request->description;

        //upload file
        // $fileName=date('YmdHis').'.'.
        // $request->file->extension();
        if($request->image) {
            if(in_array($request->image->extension(),["jpg","png","webs","gif"]))
            {
                $fileName=$category -> slug.'.'.$request->image->extension();
                $request -> image -> move(public_path("images/categorys"),$fileName);
                $category->image=$fileName;
            }   
        }
        

        $category -> created_at = date('Y-m-d H:i:s');
        $category -> created_by = Auth::id()??1;
        $category -> status =$request -> status;
        $category -> save();
        return redirect()->route('admin.category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // if(is_numeric($id))
        // {
        //     $category = Category::findOrFail($id);
        // }
        // else
        // {
        //     $category = Category::where('slug',$id)->first();
        // }
        $category=  Category::find($id);
        if($category==null)
        {
            //chuyen huong trang va bao
        }
        $list=Category::where('status','!=',0)->orderBy('created_at','desc')->get();
        $htmlparentid="";
        $htmlsortorder="";
        foreach($list as $item){
            if($category->parent_id==$item->id){
                $htmlparentid .="<option selected value='".$item->id."'>".$item->name."</option>";
            }else{
                $htmlparentid .="<option value='".$item->id."'>".$item->name."</option>";
            }
            if($category->sort_order-1==$item->sort_order){
                $htmlsortorder .="<option selected value='".($item->sort_order+1)."'>Sau ".$item->name."</option>";
            }else{
                $htmlsortorder .="<option value='".($item->sort_order+1)."'>Sau ".$item->name."</option>";
            }
        }
        return view("backend.category.show",compact("list","category","htmlparentid","htmlsortorder"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category=  Category::find($id);
        if($category==null)
        {
            //chuyen huong trang va bao
        }
        $list=Category::where('status','!=',0)->orderBy('created_at','desc')->get();
        $htmlparentid="";
        $htmlsortorder="";
        foreach($list as $item){
            if($category->parent_id==$item->id){
                $htmlparentid .="<option selected value='".$item->id."'>".$item->name."</option>";
            }else{
                $htmlparentid .="<option value='".$item->id."'>".$item->name."</option>";
            }
            if($category->sort_order-1==$item->sort_order){
                $htmlsortorder .="<option selected value='".($item->sort_order+1)."'>Sau ".$item->name."</option>";
            }else{
                $htmlsortorder .="<option value='".($item->sort_order+1)."'>Sau ".$item->name."</option>";
            }
        }
        return view("backend.category.edit",compact("list","category","htmlparentid","htmlsortorder"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category=  Category::find($id);
        if($category==null)
        {
            //chuyen huong trang va bao
        }
        $category -> name=$request->name;
        $category -> slug = Str::of($request->name)->slug('_');
        $category -> parent_id = $request->parent_id;
        $category -> sort_order = $request->sort_order;
        $category -> description = $request->description;

        //upload file
        if($request->image) {
            if(in_array($request->image->extension(),["jpg","png","webs","gif"]))
            {
                $fileName=$category -> slug.'.'.$request->image->extension();
                $request -> image -> move(public_path("images/categorys"),$fileName);
                $category->image=$fileName;
            }   
        }
        $category -> created_at = date('Y-m-d H:i:s');
        $category -> created_by = Auth::id()??1;
        $category -> status =$request -> status;
        $category -> save();
        return redirect()->route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
