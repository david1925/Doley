<?php

namespace Doley;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';
    protected $fillable = ['name','lastname','phone','discharge_date'];
}
