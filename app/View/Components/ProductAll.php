<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Product;

class ProductAll extends Component
{
    public function __construct()
    {
       //
    }
    public $limit=4;
    
    public function render(): View|Closure|string
    {
        // $page=1;
        // $offset = ($page - 1) * $this->limit;
        // $product_all=Product::where('status','=',1)
        // ->orderBy('created_at','desc')
        // ->limit($this->limit)
        // ->get();
        $product_all= Product::where('status','=',1)
        ->orderBy('created_at','desc')
        ->paginate(9);
        
        return view('components.product-all',compact('product_all'));
    }
}
