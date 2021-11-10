<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = ['client_id','month_id'];

    public function client(){
        return $this->belongsTo(Client::class);
    }
//    public function months(){
//        return $this->hasMany(Month::class);
//    }
}
