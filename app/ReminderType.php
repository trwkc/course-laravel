<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReminderType extends Model
{
    protected $table = 'reminderType';
    public $primaryKey = 'id';
    public $timestamps = true;
}
