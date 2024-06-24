<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreOrderRequest;
use App\Models\User;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list=Order::where('status','!=',0)->orderBy('created_at','desc')->get();
        $list_user= User::where('status','!=',0)
        ->orderBy('created_at','asc')
        ->get();
        $htmluserid="";
        foreach($list_user as $item)
        {
            $htmluserid .= "<option value='" . $item->id . "'>" . $item->name . "</option>";
        }
        return view("backend.order.index",compact("list","htmluserid"));
    }
    
    public function store(StoreOrderRequest $request)
    {
        $order = new Order();
        $order -> user_id=$request->user_id;
        $order -> delivery_name = $request->delivery_name;
        $order -> delivery_gender = $request->delivery_gender;
        $order -> delivery_email = $request->delivery_email;
        $order -> delivery_phone = $request->delivery_phone;
        $order -> delivery_address = $request->delivery_address;
        $order -> note = $request->note;
        $order -> type = $request->type;
        $order -> created_at = date('Y-m-d H:i:s');
        //$order -> created_by = Auth::id()??1;
        $order -> status =$request -> status;
        $order -> save();
        return redirect()->route('admin.order.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order=  Order::find($id);
        if($order==null)
        {
            //chuyen huong trang va bao
        }
        $list=Order::where('status','!=',0)->orderBy('created_at','desc')->get();
        $list_user= User::where('status','!=',0)
        ->orderBy('created_at','asc')
        ->get();
        $htmluserid="";
        foreach($list_user as $item)
        {
            $htmluserid .= "<option value='" . $item->id . "'>" . $item->name . "</option>";
        }
        return view("backend.order.show",compact("list","order","htmluserid"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
