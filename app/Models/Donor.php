<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Donor extends Authenticatable
{
    use HasFactory;
    protected $guarded = ['id'];

    public function district(){
        return $this->belongsTo(District::class);
    }
    public function division(){
        return $this->belongsTo(Division::class);
    }
    public function upazila(){
        return $this->belongsTo(Upazila::class);
    }
}
