<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;




class Deals extends Model {

    

    

    protected $table    = 'deals';
    
    protected $fillable = [
          'name',
          'photo',
          'price',
          'url'
    ];
    

    public static function boot()
    {
        parent::boot();

        Deals::observe(new UserActionsObserver);
    }
    
    
    
    
}