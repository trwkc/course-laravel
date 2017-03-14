<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    protected $table = 'reminder';
    public $primaryKey = 'id';
    public $timestamps = true;
}
