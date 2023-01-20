<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'registers';
    protected $fillable = ['id', 'name', 'email', 'password', 'startdate', 'enddate', 'filename'];
}
