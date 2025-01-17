<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable=['city','state_id'];
    protected $table='cities';

    public function states(){
        return $this->belongsTo(State::class,'state_id');
    }
}
