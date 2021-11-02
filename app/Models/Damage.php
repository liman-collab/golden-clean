<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Damage extends Model
{
    use HasFactory;

    public $fillable = ['damage','floor','building_id','gate_id','fixed'];

    public function gate(){
        return $this->belongsTo(Gate::class);
    }
    public function building(){
        return $this->belongsTo(Building::class);
    }
}
