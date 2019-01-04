<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Company
 * @package App
 */
class Company extends Model
{
    /**
     * Get the user that owns the profile.
     */

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
