<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function handleAjaxRequest(Request $request)
    {
        // Xử lý request AJAX ở đây
        $data = ['message' => 'Success!'];
        return response()->json($data);
    }
}
