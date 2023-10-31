<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public $timestamps=false;
    protected $table='events';
    protected $primaryKey='e_id';
    protected $fillable = ['title', 'description', 'date', 'location'];

    use HasFactory;
}
