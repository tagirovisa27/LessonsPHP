<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Technology;
use App\Services\MenuServiceInterface;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IndexController extends Controller
{
    private MenuServiceInterface $menuService;

    public function __construct(MenuServiceInterface $menuService)
    {
      $this->menuService = $menuService;
    }
      public function main()
    {

       return view('main', [
       'menu' => $this->menuService->getMenu(),
      ]);
    }

    public function form()
    {
        return view('layout.form');
    }
}
