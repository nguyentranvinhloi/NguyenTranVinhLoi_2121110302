<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Topic;

class PostController extends Controller
{
    //Post all
    public function index()
    {
        $top=Topic::where('status','=',1)->select("id","name","slug")->get();
        $post_all= Post::where('status','=',1)
        ->orderBy('created_at','desc')
        ->paginate(6);
        return view("frontend.post",compact('post_all','top'));
    }
    //get list category
    public function getlisttopicid($rowid)
    {
        $listtopid=[];
            array_push( $listtopid,$rowid);
            $list1=Topic::where([['status','=',1],['parent_id','=',$rowid]])->select("id")->get();
            if(count($list1)>0)
            {
                foreach($list1 as $row1)
                {
                    array_push( $listtopid,$row1->id);
                    $list2=Topic::where([['status','=',1],['parent_id','=',$row1->id]])->select("id")->get();
                    if(count($list2)>0)
                    {
                        foreach($list2 as $row2)
                        {
                            array_push( $listtopid,$row2->id);
                        }
                    }
                } 
            }
            return $listtopid;
    } 
    //Product category
    public function topic($slug)
    {
        $top=Topic::where('status','=',1)->select("id","name","slug")->get();
        $row=Topic::where([['status','=',1],['slug','=',$slug]])->select("id","name","slug")->first();
        $listtopid=[];
        if($row!=null)
        {
            $listtopid=$this->getlisttopicid($row->id);
        }
        $post_topic= Post::where('status','=',1)
        ->whereIn('topic_id',$listtopid)
        ->orderBy('created_at','desc')
        ->paginate(6);
        return view("frontend.post_topic",compact('post_topic','row','top'));
    }

    public function post_detail($slug)
    {
        $post=Post::where([['status',1],['slug','=',$slug]])->first();
        $listtopid=$this->getlisttopicid($post->topic_id);
        $post_topic= Post::where([['status',1],['id','!=',$post->id]])
        ->whereIn('topic_id',$listtopid)
        ->orderBy('created_at','desc')
        ->limit(8)
        ->get();
        return view("frontend.post_detail",compact('post','post_topic'));
    }

}
