<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;




class Slides extends Model {

    

    

    protected $table    = 'slides';
    
    protected $fillable = [
          'name',
          'banner',
          'url'
    ];
    

    public static function boot()
    {
        parent::boot();

        Slides::observe(new UserActionsObserver);
    }
    
    
    
    
}