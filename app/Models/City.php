<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['state_id', 'city'];

    public function states()
    {
        $this->belongsTo(State::class);
    }
}