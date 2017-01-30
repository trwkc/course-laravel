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

    function birthday () {
        $birthday = date_create('1991-05-23');
        return $birthday;
    }


}
