<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjadwalan extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    /**
     * Get all of the orderMidtrans for the Penjadwalan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderMidtrans()
    {
        return $this->hasMany(OrderMidtrans::class, 'penjadwalan_id');
    }
}
