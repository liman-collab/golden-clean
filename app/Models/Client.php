<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;


    protected $fillable = [
//        'last_name',
        'name',
        'address',
        'building_id',
        'gate_id',
        'city_name',
        'phone',
        'start_month',
        'packages',
        'payment',
        'mirembajtje13',
        'mirembajtje14',
        'mirembajtje15',
        'mirembajtje10',
        'internet',
        'tv',
        'parking',
        'paid',
        'end_month'
    ];


    public function building(){
        return $this->belongsTo(Building::class);
    }
    public function gate(){
        return $this->belongsTo(Gate::class);
    }
    public function invoices(){
        return $this->hasMany(Invoice::class);
    }
//    public function backUpInvoices(){
//          return $this->hasMany(BackUpInvoice::class);
//    }

    public function setStartMonthAttribute($value){
        $this->attributes['start_month'] = Carbon::createFromFormat('m/d/Y',$value)->format('Y-m-d');
    }
    public function getStartMonthAttribute(){
        return Carbon::createFromFormat('Y-m-d',$this->attributes['start_month'])->format('m/d/Y');
    }
    public function setEndMonthAttribute($value){
        $this->attributes['end_month'] = Carbon::createFromFormat('m/d/Y',$value)->format('Y-m-d');
    }

    public function getEndMonthAttribute(){
        return Carbon::createFromFormat('Y-m-d',$this->attributes['end_month'])->format('m/d/Y');
    }

}
