<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Topic;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Str;
use App\Http\Requests\StoreTopicRequest;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list=Topic::where('status','!=',0)->orderBy('created_at','desc')->get();
        $htmlsortorder = "";
        foreach ($list as $item) {
            $htmlsortorder .="<option value='".($item->sort_order+1)."'>Sau ".$item->name."</option>";
        }
        return view("backend.topic.index",compact("list","htmlsortorder"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $topic = new Topic();
        $topic->name = $request->name;
        $topic->slug = Str::of($request->name)->slug('-');
        $topic->sort_order = $request->sort_order;
        $topic->description = $request->description;
        $topic->created_at = Date('Y-m-d H:i:s');
        $topic->created_by = Auth::id() ?? 1;
        $topic->status = $request->status;
        $topic->save();
        return redirect()->route('admin.topic.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $topic=  Topic::find($id);
        if($topic==null)
        {
            //chuyen huong trang va bao
        }
        $list=Topic::where('status','!=',0)->orderBy('created_at','desc')->get();
        $htmlsortorder = "";
        foreach ($list as $item) {
            $htmlsortorder .="<option value='".($item->sort_order+1)."'>Sau ".$item->name."</option>";
        }
        return view("backend.topic.show",compact("list","topic", "htmlsortorder"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $topic=  Topic::find($id);
        if($topic==null)
        {
            //chuyen huong trang va bao
        }
        $list=Topic::where('status','!=',0)->orderBy('created_at','desc')->get();
        $htmlsortorder = "";
        foreach ($list as $item) {
            if($topic->sort_order-1==$item->sort_order){
                $htmlsortorder .="<option selected value='".($item->sort_order+1)."'>Sau ".$item->name."</option>";
            }else{
                $htmlsortorder .="<option value='".($item->sort_order+1)."'>Sau ".$item->name."</option>";
            }
            
        }
        return view("backend.topic.edit",compact("list","topic", "htmlsortorder"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $topic=  Topic::find($id);
        if($topic==null)
        {
            //chuyen huong trang va bao
        }
        $topic->name = $request->name;
        $topic->slug = Str::of($request->name)->slug('-');
        $topic->sort_order = $request->sort_order;
        $topic->description = $request->description;
        $topic->created_at = Date('Y-m-d H:i:s');
        $topic->created_by = Auth::id() ?? 1;
        $topic->status = $request->status;
        $topic->save();
        return redirect()->route('admin.topic.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
