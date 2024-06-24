<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreUserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list=User::where('status','!=',0)->orderBy('created_at','desc')->get();
        return view("backend.user.index",compact("list"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $list=User::where('status','!=',0)->orderBy('created_at','desc')->get();
        return view("backend.user.create",compact("list"));
        //return view('backend.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone =  $request->phone;
        $user->username = $request->username;
        $user->password = $request->password;
        $user->address = $request->address;
        $user->gender = $request->gender;
        $user->roles = $request->roles;
        if($request->image) {
            if(in_array($request->image->extension(),["jpg","png","webs","gif"]))
            {
                $fileName=$user -> slug.'.'.$request->image->extension();
                $request -> image -> move(public_path("images/users"),$fileName);
                $user->image=$fileName;
            }   
        }
        $user->created_at = date('Y-m-d H:i:s');
        $user->created_by = Auth::id() ?? 1;
        $user->status = $request->status;
        $user->save();
        return redirect()->route('admin.user.index');  
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user= User::find($id);
        if($user==null)
        {
            //chuyen huong trang va bao
        }
        $list=User::where('status','!=',0)->orderBy('created_at','desc')->get();
        return view("backend.user.show",compact("list","user"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user= User::find($id);
        if($user==null)
        {
            //chuyen huong trang va bao
        }
        $list=User::where('status','!=',0)->orderBy('created_at','desc')->get();
        return view("backend.user.edit",compact("list","user"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user= User::find($id);
        if($user==null)
        {
            //chuyen huong trang va bao
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone =  $request->phone;
        $user->username = $request->username;
        $user->password = $request->password;
        $user->address = $request->address;
        $user->gender = $request->gender;
        $user->roles = $request->roles;
        if($request->image) {
            if(in_array($request->image->extension(),["jpg","png","webs","gif"]))
            {
                $fileName=$user -> slug.'.'.$request->image->extension();
                $request -> image -> move(public_path("images/users"),$fileName);
                $user->image=$fileName;
            }   
        }
        $user->created_at = date('Y-m-d H:i:s');
        $user->created_by = Auth::id() ?? 1;
        $user->status = $request->status;
        $user->save();
        return redirect()->route('admin.user.index');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
