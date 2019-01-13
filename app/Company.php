<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Company
 * @package App
 */
class Company extends Model
{
    
    protected $fillable = [
        'name',
        'street',
        'city',
        'country',
        'zip',
        'phone',
        'fax',
        'email',
        'description',
        'tagline',
        'logo',
        'privacy',
        
    ];
    
    /**
     * Get the user that owns the profile.
     */

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
