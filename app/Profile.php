<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    // Model
    protected $table = "profile";
    protected $fillable = ['name','umur', 'alamat','user_id'];

}
