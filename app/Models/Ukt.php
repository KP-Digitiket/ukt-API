<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ukt extends Model
{
    use HasFactory;
    protected $fillable = ['jenis_ukt','nominal'];

    public function user(){
        return $this->hasMany(User::class,'ukt_id');
    }

    public function paymentHistory(){
        return $this->hasMany(PaymentHistory::class,'ukt_id');
    }
}
