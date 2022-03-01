<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharityHistory extends Model
{
    use HasFactory;


    public function User()
    {
        return $this->belongsTo('App\Models\User', 'userID');
    }

    public function Userr()
    {
        return $this->belongsTo('App\Models\User', 'charityID');
    }


}
