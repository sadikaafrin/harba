<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'facebook', 'tiktok', 'instagram', 'x_twitter', 'youtube'
    ];
     /**
     * One to many relationship
     * user table with user_profile table
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
