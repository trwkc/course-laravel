<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReminderController extends Controller
{
    public function listTask(){
        $tasks = [
            'Go to bank',
            'Buy milk',
            'Learn code'
        ];

        return view('home',['tasks'=>$tasks]);
    }
}
