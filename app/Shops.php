<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;




class Shops extends Model {

    

    

    protected $table    = 'shops';
    
    protected $fillable = [
          'name',
          'logo',
          'url'
          
    ];
    

    public static function boot()
    {
        parent::boot();

        Shops::observe(new UserActionsObserver);
    }
    
    
    
    
}