<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\Banner;
use App\Http\Requests\StoreBannerRequest;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list=Banner::where('status','!=',0)->orderBy('created_at','desc')->get();
        return view("backend.banner.index",compact("list"));
    }

    
    public function store(StoreBannerRequest $request)
    {
        $banner = new Banner();
        $banner -> name=$request->name;
        $banner -> link=$request->link;
        $banner -> position = $request->position;
        if($request->image) {
            if(in_array($request->image->extension(),["jpg","png","webs","gif"]))
            {
                $fileName=$banner -> name.'.'.$request->image->extension();
                $request -> image -> move(public_path("images/banners"),$fileName);
                $banner->image=$fileName;
            }   
        }
        $banner -> description = $request->description;
        $banner -> created_at = date('Y-m-d H:i:s');
        $banner -> created_by = Auth::id()??1;
        $banner -> status =$request -> status;
        $banner -> save();
        return redirect()->route('admin.banner.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $banner= Banner::find($id);
        if($banner==null)
        {
            //chuyen huong trang va bao
        }
        $list=Banner::where('status','!=',0)->orderBy('created_at','desc')->get();
        return view("backend.banner.show",compact("list","banner"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $banner= Banner::find($id);
        if($banner==null)
        {
            //chuyen huong trang va bao
        }
        $list=Banner::where('status','!=',0)->orderBy('created_at','desc')->get();
        return view("backend.banner.edit",compact("list","banner"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $banner= Banner::find($id);
        if($banner==null)
        {
            //chuyen huong trang va bao
        }
        $banner -> name=$request->name;
        $banner -> link=$request->link;
        $banner -> position = $request->position;
        if($request->image) {
            if(in_array($request->image->extension(),["jpg","png","webs","gif"]))
            {
                $fileName=$banner -> name.'.'.$request->image->extension();
                $request -> image -> move(public_path("images/banners"),$fileName);
                $banner->image=$fileName;
            }   
        }
        $banner -> description = $request->description;
        $banner -> created_at = date('Y-m-d H:i:s');
        $banner -> created_by = Auth::id()??1;
        $banner -> status =$request -> status;
        $banner -> save();
        return redirect()->route('admin.banner.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
