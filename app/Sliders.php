<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;




class Sliders extends Model {

    

    

    protected $table    = 'sliders';
    
    protected $fillable = [
          'name',
          'url'
    ];
    

    public static function boot()
    {
        parent::boot();

        Sliders::observe(new UserActionsObserver);
    }
    
    
    
    
}