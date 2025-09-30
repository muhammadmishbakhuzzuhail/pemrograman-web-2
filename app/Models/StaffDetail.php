<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StaffDetail extends Model
{
    protected $fillable = [
        'user_id',
        'is_active',
        'joined_at',
        'left_at',
        'role',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class, 'staff_id');
    }
}
