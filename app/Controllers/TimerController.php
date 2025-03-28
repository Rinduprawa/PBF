<?php

namespace App\Controllers;

class TimerController extends BaseController
{
    public function index()
    {
        return view('focus-mode');
    }

    public function countdown()
    {
        $duration = $this->request->getPost('duration');

        if (!$duration || !is_numeric($duration) || $duration <= 0) {
            return redirect()->to(base_url('/'))->with('error', 'Invalid Duration!');
        }

        return view('/flow/timer-on', ['duration' => $duration]);
    }
}


