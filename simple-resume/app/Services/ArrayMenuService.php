<?php

namespace App\Services;

class ArrayMenuService implements MenuServiceInterface
{
    public function getMenu(): array
    {
        return [
            ['href' => route (name: 'portfolio'), 'title' => 'Портфолио'],
            ['href' => route (name: 'about'), 'title' => 'Обо мне'],
            ['href' => route (name: 'contacts'), 'title' => 'Контакты'],
        ];
    }
}
