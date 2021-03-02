<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    protected $fillable = array(
        'email', 'First name', 'Last name', 'Country', 'City', 'Address', 'Phone');


    public function update(array $attributes = [], array $options = [])
    {
        return parent::update($attributes, $options); // TODO: Change the autogenerated stub
    }
}
