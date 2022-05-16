<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderMidtrans extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    /**
     * Get the userAttendance that owns the OrderMidtrans
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userAttendance()
    {
        return $this->belongsTo(Penjadwalan::class, 'id');
    }

    /**
     * Get the userOrder that owns the OrderMidtrans
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userOrder()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
