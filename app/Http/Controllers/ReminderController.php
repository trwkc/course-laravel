<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ReminderController extends Controller
{
    public function listTask(){

        $reminders = DB::table('reminder')->orderBy('id','asc')->get();

        return view('home',['tasks'=>$reminders]);
    }

    public function addReminder(Request $request){
        $content = $request->content;

        DB::table('reminder')->insert(['content' => $content, 'isFinish' => false , 'createdBy' => 1]);

        return back();
    }
}
