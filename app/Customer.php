<?php

namespace Doley;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';
    protected $fillable = ['name','lastname','phone','discharge_date','email','gender','postal_code','right_image','birthdate','observations'];
}