<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use App\Models\Topic;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list=Post::where('status','!=',0)->orderBy('created_at','desc')->get();
        $htmltopicid="";
        $listPost = Post::orderBy("created_at", "desc")
        ->rightJoin('topic', 'post.topic_id', '=', 'topic.id')
        ->select('post.*','topic.name as topic_name')
        ->get();
        $list_topic= Topic::where('status','!=',0)
        ->orderBy('created_at','asc')
        ->get();
        foreach($list_topic as $item){
            $htmltopicid .="<option value='".$item->id."'>".$item->name."</option>";
        }
        return view("backend.post.index",compact("list","listPost","htmltopicid"));
    }

    public function store(StorePostRequest $request)
    {
        $post = new Post();
        $post->topic_id = $request->topic_id;
        $post->title = $request->title;
        $post->slug = Str::of($request->title)->slug('-');
        $post->type = $request->type;
        $post->detail = $request->detail;
        if($request->image) {
            if(in_array($request->image->extension(),["jpg","png","webs","gif"]))
            {
                $fileName=$post -> slug.'.'.$request->image->extension();
                $request -> image -> move(public_path("images/posts"),$fileName);
                $post->image=$fileName;
            }   
        }
        $post->description = $request->description;
        $post->created_at = date('Y-m-d H:i:s');
        $post->created_by = Auth::id() ?? 1;
        $post->status = $request->status;
        $post->save();
        return redirect()->route('admin.post.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post= Post::find($id);
        if($post==null)
        {
            //chuyen huong trang va bao
        }
        $list=Post::where('status','!=',0)->orderBy('created_at','desc')->get();
        $htmltopicid="";
        foreach($list as $item){
            $htmltopicid .="<option value='".$item->id."'>".$item->name."</option>";
        }
        $listPost = Post::orderBy("created_at", "desc")
        ->rightJoin('topic', 'post.topic_id', '=', 'topic.id')
        ->select('post.*','topic.name as topic_name')
        ->get();
        return view("backend.post.show",compact("list","listPost","post","htmltopicid"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post= Post::find($id);
        if($post==null)
        {
            //chuyen huong trang va bao
        }
        $list=Post::where('status','!=',0)->orderBy('created_at','desc')->get();
        $htmltopicid="";
        foreach($list as $item){
            $htmltopicid .="<option value='".$item->id."'>".$item->name."</option>";
        }
        $listPost = Post::orderBy("created_at", "desc")
        ->rightJoin('topic', 'post.topic_id', '=', 'topic.id')
        ->select('post.*','topic.name as topic_name')
        ->get();
        return view("backend.post.edit",compact("list","post","htmltopicid","listPost"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post= Post::find($id);
        if($post==null)
        {
            //chuyen huong trang va bao
        }
        $post->topic_id = $request->topic_id;
        $post->title = $request->title;
        $post->slug = Str::of($request->title)->slug('-');
        $post->type = $request->type;
        $post->detail = $request->detail;
        if($request->image) {
            if(in_array($request->image->extension(),["jpg","png","webs","gif"]))
            {
                $fileName=$post -> slug.'.'.$request->image->extension();
                $request -> image -> move(public_path("images/posts"),$fileName);
                $post->image=$fileName;
            }   
        }
        $post->description = $request->description;
        $post->created_at = date('Y-m-d H:i:s');
        $post->created_by = Auth::id() ?? 1;
        $post->status = $request->status;
        $post->save();
        return redirect()->route('admin.post.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
