<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Menu;
class MainMenu extends Component
{
    
    public function __construct()
    {
       
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        //return view('components.main-menu');
        $args1=[
            ['status','=',1],
            ['position','=','mainmenu'],
            ['parent_id','=',0],
        ];
         $listmenu = Menu::where($args1)->orderBy('sort_order','asc')->get();
         return view('components.main-menu',compact('listmenu'));
    }
}
