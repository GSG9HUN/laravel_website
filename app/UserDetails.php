<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    protected $fillable = array(
        'email', 'First name', 'Last name', 'Country', 'City', 'Address', 'Phone');
}
