<?php

namespace App\Models;

use App\Models\Ukt;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PaymentHistory extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','ukt_id','payment_method','expired','status'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function ukt(){
        return $this->belongsTo(Ukt::class);
    }
}
