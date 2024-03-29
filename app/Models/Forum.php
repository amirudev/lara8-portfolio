<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Forum extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'message',
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function ownedBy(User $user)
    {
        return $user->id === $this->user_id;
    }
}
