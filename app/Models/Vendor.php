<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'vendor_id');
    }

    public function withdrawRequests(){
        return $this->hasMany(WithdrawRequest::class);
    }

    public function wallet(){
        return $this->hasOne(Wallet::class);
    }
}
