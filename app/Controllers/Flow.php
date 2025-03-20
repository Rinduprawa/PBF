<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Flow extends Controller
{

    public function index()
    {
        return view('flow/index'); // Memuat view dari app/Views/flow/index.php
    }
}
