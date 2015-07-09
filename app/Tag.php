<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    /*
     * Fillable fields for tags
     */
    protected $fillable = [
        'name'
    ];

    /*
     *  Get the cameras associated with the given tag
     */

    public function cameras()
    {
        return $this->belongsToMany('App\Camera');
    }

}
