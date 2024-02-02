<?php

namespace App\Services;

class ArrayMenuService implements MenuServiceInterface 
{
    public function getMenu(): array 
    {
        return [
            ['href' => route (name: 'qwe'), 'title' => 'Главная'],
        ];
    }
}