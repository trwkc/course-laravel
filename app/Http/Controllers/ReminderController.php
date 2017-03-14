<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Reminder;

class ReminderController extends Controller
{
    public function listTask(){

        //$reminders = DB::table('reminder')->orderBy('id','asc')->get();
        $reminders = Reminder::orderBy('id','asc')->get();

        return view('home',['tasks'=>$reminders]);
    }

    public function addReminder(Request $request){

        // $content = $request->content;
        // DB::table('reminder')->insert(['content' => $content, 'isFinish' => false , 'createdBy' => 1]);
        $reminder = new Reminder;
        $reminder->content = $request->content;
        $reminder->isFinish = false;
        $reminder->createdBy = 1;

        $reminder->save();

        return back();
    }

    public function deleteReminder(Request $request){

        $id = $request->id;

        DB::table('reminder')->where('id',$id)->delete();

        return back()->with('status','Task finished !!');

    }
}
