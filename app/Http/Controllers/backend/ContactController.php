<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreContactRequest;

class ContactController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list=Contact::where('status','!=',0)->orderBy('created_at','desc')->get();
        $htmllparenid="";
        $htmllsortorder="";
        foreach($list as $item){
            $htmllparenid .="<option value= '" .$item->id . "'>".$item->name . "'</option>";
            $htmllsortorder .="<option value= '" .($item->sort_order+1) . "'>Sau ".$item->name . "'</option>";
        }
        return view("backend.contact.index",compact("list","htmllparenid","htmllsortorder"));
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
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->title = $request->title;
        $contact->content = $request->content;
        $contact->created_at = date('Y-m-d H:i:s');
        $contact->status = $request->status;
        $contact->save();
        return redirect()->route('admin.contact.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $contact=  Contact::find($id);
        if($contact==null)
        {
            //chuyen huong trang va bao
        }
        $list=Contact::where('status','!=',0)->orderBy('created_at','desc')->get();
        $htmllparenid="";
        $htmllsortorder="";
        foreach($list as $item){
            $htmllparenid .="<option value= '" .$item->id . "'>".$item->name . "'</option>";
            $htmllsortorder .="<option value= '" .($item->sort_order+1) . "'>Sau ".$item->name . "'</option>";
        }
        return view("backend.contact.show",compact("list","contact","htmllparenid","htmllsortorder"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $contact=  Contact::find($id);
        if($contact==null)
        {
            //chuyen huong trang va bao
        }
        $list=Contact::where('status','!=',0)->orderBy('created_at','desc')->get();
        $htmllparenid="";
        $htmllsortorder="";
        foreach($list as $item){
            $htmllparenid .="<option value= '" .$item->id . "'>".$item->name . "'</option>";
            $htmllsortorder .="<option value= '" .($item->sort_order+1) . "'>Sau ".$item->name . "'</option>";
        }
        return view("backend.contact.edit",compact("list","contact","htmllparenid","htmllsortorder"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $contact=  Contact::find($id);
        if($contact==null)
        {
            //chuyen huong trang va bao
        }
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->title = $request->title;
        $contact->content = $request->content;
        $contact->created_at = date('Y-m-d H:i:s');
        $contact->status = $request->status;
        $contact->save();
        return redirect()->route('admin.contact.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
