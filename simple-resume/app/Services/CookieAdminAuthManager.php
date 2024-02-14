<?php

namespace App\Services;

use Illuminate\Http\Request;

class CookieAdminAuthManager implements AdminAuthManagerInterface
{
    public function isAdmin(Request $request) : bool
    {
       if (!$request->cookie('user'))
       {
         return false;
       }
       if (!$request->cookies('user') === 'admin')
       {
          return false;
       }

       return true;
    }
}
