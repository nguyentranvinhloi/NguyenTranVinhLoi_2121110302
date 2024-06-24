<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreMenuRequest;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list=Menu::where('status','!=',0)->orderBy('created_at','desc')->get();
        $htmlparentid="";
        $htmlsortorder="";
        foreach($list as $item){
            $htmlparentid .="<option value='".$item->id."'>".$item->name."</option>";
            $htmlsortorder .="<option value='".($item->sort_order+1)."'>Sau ".$item->name."</option>";
        }
        return view("backend.menu.index",compact("list","htmlparentid","htmlsortorder"));
    }

    public function store(Request $request)
    {
        $menu = new Menu();
        $menu->name = $request->name;
        $menu->link = $request->link;
        $menu->sort_order = $request->sort_order;
        $menu->parent_id = $request->parent_id;
        $menu->table_id = $request->table_id;
        $menu->type = $request->type;
        $menu->position = $request->position;
        $menu->created_at = date('Y-m-d H:i:s');
        $menu->created_by = Auth::id() ?? 1;
        $menu->status = $request->status;
        $menu->save();
        return redirect()->route('admin.menu.index');  
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $menu= Menu::find($id);
        if($menu==null)
        {
            //chuyen huong trang va bao
        }
        $list=Menu::where('status','!=',0)->orderBy('created_at','desc')->get();
        $htmlparentid="";
        $htmlsortorder="";
        foreach($list as $item){
            if($menu->parent_id==$item->id){
                $htmlparentid .="<option selected value='".$item->id."'>".$item->name."</option>";
            }else{
                $htmlparentid .="<option value='".$item->id."'>".$item->name."</option>";
            }
            if($menu->sort_order-1==$item->sort_order){
                $htmlsortorder .="<option selected value='".($item->sort_order+1)."'>Sau ".$item->name."</option>";
            }else{
                $htmlsortorder .="<option value='".($item->sort_order+1)."'>Sau ".$item->name."</option>";
            }
        }
        return view("backend.menu.show",compact("list","menu","htmlparentid","htmlsortorder"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $menu= Menu::find($id);
        if($menu==null)
        {
            //chuyen huong trang va bao
        }
        $list=Menu::where('status','!=',0)->orderBy('created_at','desc')->get();
        $htmlparentid="";
        $htmlsortorder="";
        foreach($list as $item){
            if($menu->parent_id==$item->id){
                $htmlparentid .="<option selected value='".$item->id."'>".$item->name."</option>";
            }else{
                $htmlparentid .="<option value='".$item->id."'>".$item->name."</option>";
            }
            if($menu->sort_order-1==$item->sort_order){
                $htmlsortorder .="<option selected value='".($item->sort_order+1)."'>Sau ".$item->name."</option>";
            }else{
                $htmlsortorder .="<option value='".($item->sort_order+1)."'>Sau ".$item->name."</option>";
            }
        }
        return view("backend.menu.edit",compact("list","menu","htmlparentid","htmlsortorder"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $menu= Menu::find($id);
        if($menu==null)
        {
            //chuyen huong trang va bao
        }
        $menu->name = $request->name;
        $menu->link = $request->link;
        $menu->sort_order = $request->sort_order;
        $menu->parent_id = $request->parent_id;
        $menu->table_id = $request->table_id;
        $menu->type = $request->type;
        $menu->position = $request->position;
        $menu->created_at = date('Y-m-d H:i:s');
        $menu->created_by = Auth::id() ?? 1;
        $menu->status = $request->status;
        $menu->save();
        return redirect()->route('admin.menu.index'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
