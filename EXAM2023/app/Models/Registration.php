<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    public $timestamps=false;
    protected $table='registrations';
    protected $primaryKey = 'r_id';

    use HasFactory;
}
