<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;




class Logos extends Model {

    

    

    protected $table    = 'logos';
    
    protected $fillable = [
          'name',
          'logo',
          'url'
    ];
    

    public static function boot()
    {
        parent::boot();

        Logos::observe(new UserActionsObserver);
    }
    
    
    
    
}