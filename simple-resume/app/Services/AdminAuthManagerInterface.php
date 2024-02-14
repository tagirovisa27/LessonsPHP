<?php

namespace App\Services;

use Illuminate\Http\Request;

interface AdminAuthManagerInterface
{
   public function isAdmin(Request $request) : bool;
}
