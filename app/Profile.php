<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Profile
 * @package App
 */
class Profile extends Model
{

    protected $fillable = [
        'dob',
        'street',
        'city',
        'country',
        'zip',
        'privacy',
        'setup',
    ];

    /**
     * Get the user that owns the profile.
     */

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the companies record associated with the profile.
     */

    public function companies()
    {
        return $this->hasMany(Company::class);
    }
}
