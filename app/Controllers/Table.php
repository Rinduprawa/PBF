<?php

namespace App\Controllers;

class Table extends BaseController
{
    public function index(): string
    {
        return view('table');
    }
    public function table(): string
    {
        $data = [
            'john' => [
                'position' => 'Senior',
                'title' => 'Software Engineer',
                'subtitle' => 'IT department',
            ],
            'alex' => [
                'position' => 'Junior',
                'title' => 'Consultant',
                'subtitle' => 'Designer',
            ],
            'kate' => [
                'position' => 'Senior',
                'title' => 'Designer',
                'subtitle' => 'UI/UX',
            ]
        ];
        return view('table', $data);
    }
}
