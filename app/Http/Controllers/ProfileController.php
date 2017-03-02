<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{

    function getName () {
        return "Theerawat";
    }

    function getSurname () {
        return "Kaewchote";
    }

    function getBirthday () {
        $date = $this->birthday();
        return date_format($date, 'd-m-Y');
    }

    function getAge () {
        $current = date_create();
        $birthYear = date_format($this->birthday(),'Y');
        $currentYear = date_format($current,'Y');
        $age = $currentYear - $birthYear;
        return $age;
    }

    function getBirthYear ($year) {
        return $year - 543;
    }

    function birthday () {
        $birthday = date_create('1991-05-23');
        return $birthday;
    }

    function getProfile () {
        $theerawat = ['name'=>'Theerawat Kaewchote (Por)', 'occupation'=>'Full Stack Developer - TMES Co.,Ltd.', 'medium'=>'https://medium.com/@aimoocpe', 'github'=>'https://github.com/aimoocpe','image'=>'profile.jpg'];
        $john = ['name'=>'John Doe (john)', 'occupation'=>'Creator - Novacall', 'medium'=>'https://medium.com/@xxx', 'github'=>'https://github.com/xxx','image'=>'person.png'];
        $myProfile = ['profiles'=>[$theerawat,$john]];
        return view('profile',$myProfile);
    }


}
