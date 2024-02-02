<?php

namespace App\Http\Controllers;

use App\Services\MenuServiceInterface;
use Illuminate\Http\Request;

class IndexController extends Controller
{  
    private MenuServiceInterface $menuService;
    public function __construct(MenuServiceInterface $menuService) 
    {
        $this->menuService = $menuService;
    }
        public function main()
    {
       return view('main', ['menu' => $this->menuService->getMenu()]);    
    }
}
