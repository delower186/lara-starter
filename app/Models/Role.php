<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
    ];

    /**
     * The users that belong to the role.
     */
    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }

    public function user($role)
    {
        foreach($role->users as $user)
        {
            return $user;
        }
    }

    public function userId($role)
    {
        foreach($role->users as $user)
        {
            return $user->id;
        }
    }
}
